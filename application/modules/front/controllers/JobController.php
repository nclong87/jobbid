<?php

class Front_JobController extends Zend_Controller_Action
{
	private $session;
    public function init()
    {
        /* Initialize action controller here */
    	$this->_helper->layout->setLayout('front_layout');
    	$this->session = new Zend_Session_Namespace('session');
    	$this->session->visitor = Application_Model_DbTable_Visitor::getVisitor($this->session->logged);
    	$this->session->url = Core_Utils_Tools::getFullURL();
    }
    public function viewJobAction() {
    	try {
    		$jobId = $this->_request->getParam('id','');
    		if(empty($jobId)) throw new Core_Exception('LINK_ERROR');
    		Core_Utils_DB::update('jobs',array('view' => '`view` + 1'),array('id' => 1));
    		$job = Application_Model_DbTable_Job::findById($jobId);
    		if($job==null) throw new Core_Exception('LINK_ERROR');
    		$similarJobs = Application_Model_DbTable_Job::getSimilarJob($job);
    		$this->view->job = $job;
    		$this->view->similarJobs = $similarJobs;
    		
    	} catch (Exception $e) {
    		$this->view->error_msg = Core_Exception::getErrorMessage($e);
    		$this->_forward('error','message','front');
    	}
    	
    	
    }
	public function testAction() {
		$this->_helper->layout->setLayout('test_layout');
	}
    public function createJobAction()
    {
        try {
        	//die('');
        	$form = new Front_Form_PostJob();
        	$this->view->form = $form;
        	if ($this->getRequest()->isPost()) {
        		$form_data = $this->getRequest()->getParams();
        		if ($form->isValid($form_data)) {
        			if(Application_Model_DbTable_Activity::getNumActivity(ACTION_POST_JOB) > LIMIT_POST_JOB) {
        				Application_Model_DbTable_Activity::insertLockedActivity(ACTION_POST_JOB);
        				throw new Core_Exception('LIMIT_POST_JOB');
        			}
        			$modelCompany = new Application_Model_DbTable_Company();
        			$companyId = $modelCompany->save($form_data['company']);
        			$modelJobTitle = new Application_Model_DbTable_JobTitle();
        			$jobTitleId = $modelJobTitle->save($form_data['job_title']);
        			$modelJob = new Application_Model_DbTable_Job();
        			$now = Core_Utils_Date::getCurrentDateSQL();
        			$secId = Core_Utils_Tools::genKey();
        			$jobId = $modelJob->insert(array(
        					'id' => null,
        					'title' => $form_data['company'].' - '.$form_data['job_title'],
        					'account_id' => 1,
        					'company_id' => $companyId,
        					'job_title_id' => $jobTitleId,
        					'job_description' => $form_data['job_description'],
        					'city_id' => $form_data['city_id'],
        					'email_to' => $form_data['email_to'],
        					'job_type' => $form_data['job_type'],
        					'view' => 0,
        					'time_create' => $now,
        					'time_update' => $now,
        					'sec_id' => $secId
        			));
        			Application_Model_DbTable_Activity::insertActivity(ACTION_POST_JOB,$jobId);
        			$this->_redirect('/message/success?type=post-job&email='.$form_data['email_to']);
        		} else {
        			$form->populate($form_data);
        		}
        	}
        } catch (Exception $e) {
        	$this->view->error_msg = Core_Exception::getErrorMessage($e);
        	$this->_forward('error','message','front');
        }	
    }
	public function indexAction()
    {
        // action body
    }

}

