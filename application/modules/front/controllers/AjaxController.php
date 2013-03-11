<?php

class Front_AjaxController extends Zend_Controller_Action
{
	private $session;
    public function init()
    {
    	$this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $this->session = new Zend_Session_Namespace('session');
        $this->session->visitor = Application_Model_DbTable_Visitor::getVisitor($this->session->logged);
    }
	public function checkLoggedAction() {
		if(!isset($this->session->logged)) {
			die('NOT_LOGIN');
		}
		if($this->session->logged['active'] == 0) {
			die('NOT_VERIFY');
		}
		die('OK');
	}
    public function autoCompleteAction() {
    	$type = $this->_request->getParam('type','');
    	$keyword = $this->_request->getParam('keyword','');
    	$result = array();
    	if(!empty($keyword)) {
    		$keyword = '%'.str_replace(' ', '%', trim($keyword)).'%';
	    	if($type=='company') {
	    		$result = Application_Model_DbTable_Company::suggest($keyword);
	    	} else {
	    		$result = Application_Model_DbTable_JobTitle::suggest($keyword);
	    	}
    	}
		$this->_helper->json($result);    	
    }
	public function refeshCaptchaAction() {
		$type = $this->_request->getParam('t','');
		if(!in_array($type, Core_Const::$captcha_type)) die('ERROR');
		$session = new Zend_Session_Namespace('front');
    	$captcha = new Zend_Captcha_Image();
       	$captcha->setWordLen('4');
       	$captcha->setTimeout('300');
       	$captcha->setHeight('40');
		$captcha->setWidth('200');
		$captcha->setLineNoiseLevel(0);
		$captcha->setImgDir(PATH_CAPTCHA_IMAGES);
		$captcha->setImgUrl(DOMAIN.$this->getFrontController()->getBaseUrl().'/captcha/images/');
		$captcha->setFont(PATH_CAPTCHA_FONT);
		$id = $captcha->generate();
		$session->captcha_word[$type] = $captcha->getWord();
		die($captcha->getImgUrl().$id.$captcha->getSuffix());
	}
	public function checkCaptchaAction() {
		$type = $this->_request->getParam('t','');
		if(!in_array($type, Core_Const::$captcha_type)) die('ERROR');
		$session = new Zend_Session_Namespace('front');
    	if(!isset($session->captcha_word[$type])) die('ERROR');
		$captcha_word = $this->_request->getParam('word','');
		if(strcmp($captcha_word, $session->captcha_word[$type]) == 0) {
			die('OK');
		}
		die('WRONG');
	}
	public function fbauthAction()
    {
    	$accessToken = $this->_request->getParam('accessToken','');
    	if(empty($accessToken)) die('ERROR');
    	$graphInfo = Core_Utils_Facebook::getGraphInfo($accessToken);
    	$taikhoan = Application_Model_DbTable_TaiKhoan::findByFbId($graphInfo->id);
    	if($taikhoan == null) die('ERROR');
    	$this->session->__set('logged', $taikhoan);
    	$this->session->__set('graphInfo', $graphInfo);
    	$redirectUrl = isset($this->session->url)?$this->session->url:'/index';
    	die('OK');
    }
    public function verifyRegistrationAction()
    {
    	$key = $this->_request->getParam('key','');
    	if(empty($key)) die('ERROR');
    	if(Application_Model_DbTable_Activity::getNumActivity(ACTION_VERIFY_REGISTRATION_FAILED) > LIMIT_VERIFY_FAILED) {
    		Application_Model_DbTable_Activity::insertLockedActivity(ACTION_VERIFY_REGISTRATION_FAILED);
    		die('LIMIT');
    	}
    	if(($secure_key = Application_Model_DbTable_SecureKey::findByKey($key)) == null) {
    		Application_Model_DbTable_Activity::insertActivity(ACTION_VERIFY_REGISTRATION_FAILED);
    		die('FAILED');
    	} 
    	Application_Model_DbTable_Activity::insertActivity(ACTION_VERIFY_REGISTRATION,$secure_key['account_id']);
    	Application_Model_DbTable_SecureKey::removeSecureKey($secure_key['id']);
    	Core_Utils_DB::update('accounts', array('active' => 1), array('id' => $secure_key['account_id'],'status' => 1));
    	if(($account = Application_Model_DbTable_TaiKhoan::findbyId($secure_key['account_id'])) == null) die('ERROR');
    	$this->session->__set('logged', $account);
    	die(isset($this->session->url)?$this->session->url:'/index');
    }
	public function verifyJobAction()
    {
    	$key = $this->_request->getParam('key','');
    	if(empty($key)) die('ERROR');
    	if(Application_Model_DbTable_Activity::getNumActivity(ACTION_VERIFY_JOB_FAILED) > LIMIT_VERIFY_FAILED) {
    		Application_Model_DbTable_Activity::insertLockedActivity(ACTION_VERIFY_JOB_FAILED,$key);
    		die('LIMIT');
    	}
    	if(($secure_key = Application_Model_DbTable_SecureKey::findByKey($key)) == null) {
    		Application_Model_DbTable_Activity::insertActivity(ACTION_VERIFY_JOB_FAILED);
    		die('FAILED');
    	} 
    	Application_Model_DbTable_Activity::insertActivity(ACTION_VERIFY_JOB_SUCCESS,$secure_key['ref_id']);
    	Application_Model_DbTable_SecureKey::removeSecureKey($secure_key['id']);
    	Core_Utils_DB::update('jobs', array('active' => 1), array('id' => $secure_key['ref_id'],'status' => 1));
    	die('OK');
    }
    public function reportJobAction()
    {
    	$jobId = $this->_request->getParam('id','');
    	if(empty($jobId)) die('ERROR');
    	if(isset($this->session->reports[$jobId])) die('OK');
    	if(Application_Model_DbTable_Job::doReport($jobId, $this->session->visitor) == true) {
    		$this->session->reports[$jobId] = $jobId; 
    	}
    	die('OK');
    }
	public function testAction() {
		//$string = 'làm thêm,sinh viên làm thêm,việc làm thêm sinh viên,lam them sinh vien,việc làm thêm cho sinh viên,viec lam cho sinh vien lam them,viec cho sinh vien lam them,tìm sinh viên làm thêm,tim việc làm thêm cho sinh viên,tim viec lam cho sinh vien lam them,tim viec cho sinh vien lam them,tuyển sinh viên làm thêm,làm thêm của sinh viên,công việc làm thêm cho sinh viên,công việc cho sinh viên làm thêm,sinh viên đi làm thêm,sinh vien di lam them,việc làm thêm của sinh viên,việc làm thêm tại nhà cho sinh viên,sinh viên với việc làm thêm,những việc làm thêm cho sinh viên,các việc làm thêm cho sinh viên,kiếm việc làm thêm cho sinh viên,can viec lam them cho sinh vien,các công việc làm thêm cho sinh viên,những công việc làm thêm cho sinh viên,tuyển dụng sinh viên làm thêm,sinh vien va lam them,sinh viên và việc làm thêm,tìm kiếm việc làm thêm cho sinh viên,cần tìm việc làm thêm cho sinh viên,công việc làm thêm tại nhà cho sinh viên,tìm việc làm thêm,tìm việc làm thêm sinh viên,tìm việc sinh viên làm thêm,sinh viên tìm việc làm thêm,tim viec lam sinh vien lam them,tim viec lam them buoi toi,tim viec lam them qua mang,tìm việc làm thêm tết,sv tim viec lam them,tim viec lam them sv,tim viec lam them buoi sang,tìm việc làm thêm tại cầu giấy,tim viec lam them ban dem,tim viec lam them tai hue,muon tim viec lam them,tim viec lam them dip tet,tim viec lam them tai hn,tim viec lam them moi nhat,tim viec lam them ngay tet,cách tìm việc làm thêm,www.tim viec lam them,kiếm việc làm thêm,tìm kiếm việc làm thêm,sinh vien kiem viec lam them,kiếm việc làm thêm ngoài giờ,kiem viec lam them buoi toi,cần kiếm việc làm thêm,tìm kiếm công việc làm thêm,làm ngoài giờ,việc làm ngoài giờ,làm thêm ngoài giờ,việc làm thêm ngoài giờ,tìm việc làm ngoài giờ,tìm việc làm thêm ngoài giờ,lam them ngoai gio hanh chinh,tuyen nhan vien lam ngoai gio,những việc làm thêm ngoài giờ,làm thêm bán thời gian,việc làm thêm bán thời gian,tìm việc làm thêm bán thời gian,việc làm thêm bán thời gian cho sinh viên,cong viec lam them ban thoi gian,kiem viec lam them ban thoi gian,viec lam tren mang,tim viec lam tren mang,lam them tren mang,viec lam them tren mang,kiem viec lam tren mang,tim viec lam them tren mang,viec lam tren internet,cong viec lam them tren mang,kiem viec lam them tren mang,cong viec lam,tim cong viec lam,công việc làm thêm,việc làm gia công,công việc làm bán thời gian,công việc làm tại gia,giờ làm việc của công an,các công việc làm thêm,những công việc làm thêm,tìm việc làm công nhân,tim viec lam thu cong,tìm việc làm gia công,tìm công việc làm thêm,cong viec lam tet,cong viec lam them buoi toi,tim viec lam cho cong nhan,công việc làm thêm ngoài giờ,cong viec lam them cua sinh vien,việc làm thêm cho dân công sở,tim viec lam ha noi,lam them tai ha noi,viec lam them ha noi,viec lam them tai ha noi,lam them o ha noi,tim viec lam them ha noi,viec lam sinh vien ha noi,bao viec lam ha noi,làm thêm cho sinh viên,vieclam them cho sinh vien,tim viec them cho sinh vien,viec lam them cho sv,viec lam them cho hoc sinh,tim viec lam them cho sv,lam viec online,viec lam online,tim viec lam online,viec lam them online,viec lam online tren mang,kiem viec lam online,tim viec lam them online,tim kiem viec lam online,lam them gio,tính làm thêm giờ,quy định làm thêm giờ,lương làm thêm giờ,mẫu làm thêm giờ,cach tinh luong lam them gio,mẫu đăng ký làm thêm giờ,làm bán thời gian,việc làm bán thời gian,viec lam ban thoi,tìm việc làm bán thời gian,timviec lam ban thoi gian,tuyển việc làm bán thời gian,tuyen dung lam ban thoi gian,tuyen dung lam viec ban thoi gian,thời giờ làm việc,sinh viên làm bán thời gian,làm bán thời gian cho sinh viên,việc làm cho sinh viên bán thời gian,việc làm bán thời gian cho sinh viên,sinh vien lam viec ban thoi gian,viec lam ban thoi gian sinh vien,lam viec ban thoi gian cho sinh vien,xác nhận thời gian làm việc,kiếm việc làm bán thời gian,mẫu xác nhận thời gian làm việc,tìm việc làm bán thời gian cho sinh viên,tim viec lam sinh vien ban thoi gian,tim viec lam cho sinh vien ban thoi gian,viec lam ban thoi gia,mẫu đơn xác nhận thời gian làm việc,tìm kiếm việc làm bán thời gian,tim viec lam thoi vu,viec lam ban thoi gian moi nhat,tim viec lam ban thoi gia,cần tìm việc làm bán thời gian,tim viet lam ban thoi gian,việc làm thời vụ cho sinh viên,thời gian làm thêm giờ,xin việc làm bán thời gian,thông báo thời gian làm việc,nhung viec lam ban thoi gian,tiem viec lam ban thoi gian,viec lam nhanh ban thoi gian,kiếm việc làm bán thời gian cho sinh viên,việc làm thêm thời vụ,tim kiem viec lam ban thoi gian cho sinh vien,tuyen sinh vien lam viec ban thoi gian,vieệc làm bán thời gian,tim viec lam nhanh ban thoi gian,kiem viec lam thoi vu,tuyen dung nhan vien lam viec ban thoi gian,viec lam ban thoi gain,muon tim viec lam ban thoi gian,viet lam ban thoi gian cho sinh vien,viec lam ban thoi gjan,tim viec lam ban thoi gjan,viec lam tphcm,viec lam tai tphcm,tim viec lam tphcm,tim viec lam tai tphcm,làm thêm tphcm,viec lam them tphcm,viec lam them tai tphcm,tim viec lam them tphcm,tim viec lam them tai tphcm,viec lam nhanh tai tphcm,viec lam 24h tai tphcm,tien viec lam,viec lam tien giang,tiền làm thêm giờ,lam viec kiem tien,tính tiền làm thêm giờ,làm thêm kiếm tiền,tiền lương làm thêm giờ,cách tính tiền làm thêm ngoài giờ,viec lam can,cần việc làm,cần tìm việc làm,viec lam tai can tho,cần việc làm thêm,can tim viec lam them,viec lam them can tho,sinh vien can viec lam,viec lam them tai can tho,sinh vien can tim viec lam,can tim viec lam cho sinh vien,sinh viên cần tìm việc làm thêm,viet lam,viet lam viet nam,viet lam tinh,bao viet lam,tim viet lam,can viet lam,viet lam sinh vien,viet lam them,tuyen dung viet lam,tiem viet lam,viet lam tet,can tim viet lam,tim viet lam them,nguoi viet rao vat viet lam,viet lam them cho sinh vien,tim viet lam bao ve,tim viet lam.com,viec lam binh duong,tim viec lam binh duong,viec lam binh dinh,viec lam binh thuan,viec lam binh phuoc,viec lam them binh duong,viec lam them tai binh duong,viec lam o ha noi,viec lam o tphcm,tim viec lam o tphcm,tim viec lam o hcm,viec lam o can tho,viec lam them o ha noi,việc làm ở nha trang,việc làm ở việt nam,tìm việc làm ở nha trang,viec lam o nhat ban,viec lam them o tphcm,viec lam o vinh long,tim viec o gia lam,viec lam them o hai phong,viec lam them o da nang,tim viec lam them o tphcm,viec lam them o can tho,viec lam them o thu duc,viec lam them o hue,tim viec lam them o hue,tim viec lam o viet nam,tim viec lam them o hn,lam them buoi toi,viec lam them buoi toi,tim viec lam buoi toi,viec lam them buoi sang,viec lam them vao buoi toi,lam kiem toan,lam them ke toan,ke toan lam them,viec lam them ke toan,tim viec ke toan lam them,tim viec lam them ke toan,việc làm toàn thời gian,tìm việc làm toàn thời gian,tuyển dụng việc làm,việc làm tuyển dụng,tim viec lam tuyen dung,tuyen dung tim viec lam,can tuyen viec lam,tuyen nguoi lam viec,tuyển việc làm thêm,tuyen viec lam tet,tuyen dung viec lam nhanh,tuyen dung viec lam them,bao thanh nien tuyen dung viec lam,viec lam da,viec lam da nang,viec lam tai da nang,viec lam them da nang,viec lam them tai da nang,tim viec lam them da nang,tim vjec lam,vjec lam them,vjec lam ban thoi gian,tim vjec lam them,vjec lam ban thoj gjan,tuyen dung vjec lam,viec lam tai gia,lam viec tai gia,viec lam tai gia lam,tim viec tai gia lam,tim viec lam tai gia lam,cho gia cong tai nha,web việc làm,trang web việc làm,web tìm việc làm,các trang web việc làm,các web tìm việc làm,web kiem viec lam,trang web kiếm việc làm,web tìm kiếm việc làm,các trang web kiếm việc làm,web tìm việc làm cho sinh viên,web tìm việc làm bán thời gian,web xin viec lam,trang web xin viec lam,viec lam hai phong,viec lam tai hai phong,tim viec lam hai phong,viec lam them hai phong,viec lam them tai hai phong,tim viec lam them hai phong,viec lam hai phong 2011,vieecj lamf,viec lamf,timf vieecj lamf,tim viec lamf,timf vieecj lamf theem,việc tìm người,người tìm việc';
		$string = 'việc tìm người người tìm việc,người tìm việc việc tìm người,tìm người giúp việc,viec tim nguoi tai tphcm,bao viec tim nguoi,viec tim nguoi.com,tìm việc bán thời gian,việc bán thời gian cho sinh viên,cong việc bán thời gian,kiếm việc bán thời gian,tìm việc bán thời gian cho sinh viên,can tim viec ban thoi gian,tim cong viec ban thoi gian,công việc bán thời gian cho sinh viên,tiem viec ban thoi gian,cac cong viec ban thoi gian,ban lam viec,viec lam ban,tim viec lam ban,viec lam ban thoigian,viec lam ban hang,tim viec lam ban hang,tim viec lam tai nhat ban,viec lam them ban dem,tim viec lam ban time,viec lam ban tg,viec lam ban thoj gjan,việc làm part time,tìm việc làm part time,việc làm part time cho sinh viên,kiếm việc làm part time,tim viec lam them part time,tìm kiếm việc làm part time,trang tìm việc,trang tìm việc làm,trang web tim viec,các trang web tìm việc,cac trang tim viec,tìm việc làm nha trang,trang web tìm việc làm,các trang tìm việc làm,nhung trang tim viec,tim kiem trang web,các trang web tìm việc làm,những trang web tìm việc làm,nhung trang web tim viec,trang tìm kiếm việc làm,tim viec nhanh o nha trang,tìm việc làm thêm tại nha trang,trang web tìm kiếm việc làm,các trang tìm kiếm việc làm,trang web tìm việc nhanh,cac trang wed tim viec,tim kiem viec lam tai nha trang,trang wed tim viec lam,tim viec ban thoi gian tai nha trang,tim viec lam nhanh tai nha trang,tim viec lam ban thoi gian tai nha trang,trang chu tim viec lam,các trang web tìm kiếm việc làm,viec tim nguoi tai nha trang,cac trang wed tim viec lam,trang web tim viec lam ban thoi gian,trang web tim viec lam them,các trang web tìm việc làm cho sinh viên,tim viec tai ha noi,tim viec o ha noi,tim viec hai phong,tim viec tai da nang,tim viec tai hai phong,tim viec o hai phong,tim viec o vung tau,tim viec nhanh ha noi,tim viec lam them theo ca,tim viec lam them ca toi,tim viec tai ct,dang ky tim viec nhanh,tim viec nhanh tai,tìm việc làm nhanh,tim viec nhanh tai tphcm,tim viec nhanh 24h,tim viec lam nhanh nhat,web tim viec nhanh,nguoi tim viec nhanh,tim viec lam them nhanh,tim viec lam nhanh cho sinh vien,viec lam nhanh.com.vn,viec lam nhanh lao cai,tiem viec nhanh.com,tìm vịec nhanh,tìm việc nhanh.com,nhan lam gia cong,nhan lam them,nhan vien lam them,tuyển nhân viên làm thêm,nhan lam the sinh vien,nhan vien lam tet,lam tai,viec lam tai,tìm việc làm tại,viec lam tai hcm,việc làm tại nhật,làm việc tại nhật,viec lam tai nghe an,viec lam tai thai nguyen,viec lam tai khanh hoa,viec lam tai vinh long,viec lam tai kien giang,tim viec lam tai daklak,viec lam tai cau giay,viec lam them tai thu duc,tim viec lam tai cau giay,tim viec lam tai lao cai,viec lam tai hd,tuyển người,tuyển người làm,tuyển người giúp việc,tuyển người làm thêm,tuyen nguoi lam tet,trang việc làm,viec lam tai quang ngai,viec lam them theo ca,cac trang viec lam,viec lam them ca toi,tìm việc làm cho sinh viên,viec lam cho nam sinh vien,làm việc tại nhà cho sinh viên,việc làm tại nhà cho sinh viên,việc làm tết cho sinh viên,cơ hội việc làm cho sinh viên,tìm người làm,viec lam tim nguoi,tìm người làm việc,người tìm việc làm,tim nguoi lam them,nguoi tim viec lam ban thoi gian,tim nguoi lam viec ban thoi gian,tin viec lam,thông tin việc làm,thong tin tuyen viec lam,cong thong tin viec lam,thong tin tim viec,thông tin tuyển dụng việc làm,tin tim viec lam,đăng tin tìm việc,dang tin tim viec,trang tin viec lam,thông tin tìm việc làm,ban tin viec lam,dang tin viec lam,viec lam dang tin,trang thong tin viec lam,tin viec lam ban thoi gian,thong tin viec lam ban thoi gian,đăng tin tìm việc làm,tin viec lam them,thong tin viec lam moi nhat,thong tin viec lam nha trang,thong tin viec lam tai nha trang,thong tin nguoi tim viec,thong tin tim kiem viec lam,đăng thông tin tìm việc làm,dang thong tin tim viec lam,thong tin tuyen dung viec lam tai nha trang,đăng tin tìm việc làm miễn phí,dang tin tim viec nhanh,dang tin tim viec lam them,viec lam gia lam,viec lam gia lai,viec lam vat gia,lam them gia su,viec lam them gia su,việc làm mới nhất,tim viec lam moi,tìm việc làm mới nhất,viec lam moi dang,viec lam nha trang moi nhat,kiếm viêc,tìm kiêm việc làm,tim kiem cong viec,các trang kiếm việc,kiếm việc.com,kiem viec lam tet,viet nam tuyen dung,tuyen dung tai da nang,trang tuyen dung,trang tuyển dụng việc làm,dang ky tuyen dung,tuyen dung va viec lam,các trang tuyển dụng việc làm,việc partime,làm partime,việc làm partime,lam viec partime,tìm việc partime,tìm việc làm partime,partime cho sinh viên,công việc partime,web tuyen dung,web việc làm tuyển dụng,web tuyển dụng việc làm,trang web tuyển dụng việc làm,các trang web tuyển dụng việc làm,timvieclam ban thoi gian,tuyển bán thời gian,tuyển dụng bán thời gian,sinh vien ban thoi gian,ban thoi gian cho sinh vien,tim viet ban thoi gian,báo việc làm,báo tìm việc làm,việc làm báo chí,bao rao vat viec lam,tim viec lam giao bao,doc bao tim viec lam,vieclam ban thoi gian,tim vieclam them,vieclam sinh vien,vieclam cho sinh vien,vieclam tuyendung,vieclam moi nhat,web vieclam,vieclam lao cai,www.vieclam,www.vieclam.vn,việclam,việc làm thêm tại nha trang,thong tin tuyen dung tai nha trang,cong viec tai nha trang,viec lam nhanh tai nha trang,xin viec lam tai nha trang,kiếm việc làm cho sinh viên,tim kiem viec lam sinh vien,tìm kiếm việc làm cho sinh viên,kiem tien cho sinh vien,cach kiem tien cho sinh vien,pho viec lam,viec lam thanh pho,việc làm phổ thông,tim viec lam thanh pho,tìm việc làm phổ thông,tim kiem viec lam pho thong,viec lam them it,tim lam them,timviec lam them,tim vien lam them,viec lam them hcm,viec lam them toi,làm thêm 2012,tuyển làm thêm,can lam them,kiemviec lam them,kim viec lam them,di lam them,các việc làm thêm,lam them qua mang,lam them theo ca,viec lam them qua mang,vie lam them,lam them sv,sv lam them,viec lam them he,nghe lam them,viec lam them sv,nhung viec lam them,lam them dip tet,tuyển dụng làm thêm,lam them ngay tet,viec lam them dip tet,lam them 24h,viec lam them ngay tet,lam them cuoi tuan,viec lam them cuoi tuan,làm thêm dịch thuật,viec lam them ngay chu nhat,viec lam them tieng nhat,lam them truc tuyen,tiem viec lam them,can nguoi lam them,viec lam them trong he,viec lam them cuoi nam,mẫu đơn xin việc làm thêm,tiìm việc làm thêm,viec lam them mua tet,tim viev lam them,lam them.vn,lam the sinh vien,sinh vien lam,việc làm sinh viên,sinh vien viec lam,tìm việc làm sinh viên,sinh viên tìm việc làm,sinh vien di lam,cach lam giau cua sinh vien,việc làm tìm việc,tim viec lam in an,tìm viẹc làm,tim viec lam noi that,tim viec lam dien,tim viec lam 24h,tim viec lam ngay,tìm việc làm tết,website tim viec lam,đăng tìm việc làm,tim viec lam giup viec,tìm việc làm phục vụ,đăng ký tìm việc làm,muốn tìm việc làm,tim viec lam cho nam,tim viec lam lao cai,tim viec lam thue,tim viec lam t,tim viec lam rao vat,tim viec lam ve duoc,tim viec lam mien phi,làm sao để tìm được việc làm,tìm việc làm thê,tim viec lam.vn,việc làm thêm,làm thêm tối,làm thêm online,làm thêm tết,đi làm thêm,làm thêm hè,việc làm thêm tết,xin việc làm thêm,làm thêm pg,vieệc làm thêm';
		$list = explode(',', $string);
		foreach($list as $item) {
			Application_Model_DbTable_Tag::insertTag($item);
		}
		die('OK');
		if(Core_Utils_String::checkContent($content) == true) {
			echo 'true';
		} else {
			echo 'false';
		}
		die;
		print_r($this->session->logged);die;
		$date = new Zend_Date();
		$date->subMinute(5);
		echo $date->toString();
		//Core_Utils_DB::update('jobs',array('view' => '`view` + 1'),array('id' => 1));
		//echo $key;
		/*$str = file_get_contents('https://graph.facebook.com/me?access_token=AAACF3doGSoEBAD0ph0PHsAftEr5GVbZBR0IjpximstoVGjiwj2xbSuVxVXKIO3qlS5VyJ0ZCA9zsa7L2GMMZB1dhq0HgiIsrZCCjm7uP0XtuA3jOkVcy');
		$array = json_decode($str);
		print_r($array);*/
		/* $session = new Zend_Session_Namespace('session');
		//$session->unsetAll();
		print_r($session->logged); */
	}
	/*
	public function sendOrderMailAction() {
		$purchase_id = $this->_request->getParam('id','');
		if(!empty($purchase_id)) {
			$dbPurchase = new Application_Model_DbTable_Purchase();
			if(($purchase = $dbPurchase->findById($purchase_id)) != null) {
				if($purchase->is_send == false) {
					$dbGianhang = new Application_Model_DbTable_GianHang();
					if(($gianhang = $dbGianhang->findById($purchase->gianhang_id)) == null) return;
					$link = DOMAIN.$this->getFrontController()->getBaseUrl().'/'.$gianhang->ma_gian_hang.'/phieu-dat-hang?id='.$purchase->id.'&code='.$purchase->code;
					$link = '<a href="'.$link.'">'.$link.'</a>';
					$send_mail = new zendcms_Controller_Helper_SendMail();
		    		$send_mail->sendEmailByTemplate($gianhang->email_gianhang, array(
		    			'link' => $link
		    		),TEMPLATE_ORDER);
		    		$dbPurchase->update(array('is_send' => 1), array('id = ?' => $purchase_id));
				}
			}
		}
	}*/

}

