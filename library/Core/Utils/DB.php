<?php
class Core_Utils_DB
{	
	public static function update($tableName,$data,$where) {
    	if(empty($data)) return;
    	$arraySet = array();
    	$params = array();
    	foreach ($data as $key => $value) {
    		$arraySet[]=" `$key` = :$key ";
    		$params[$key] = $value;
    	}
    	$sWhere = ' 1 = 1 ';
    	foreach ($where as $key => $value) {
    		$sWhere.=" AND `$key` = $value";
    	}
    	$query = 'UPDATE `'.$tableName.'` SET '.join(',', $arraySet).' WHERE '.$sWhere;
    	$db = Zend_Registry::get('connectDb');
    	$stmt = $db->prepare($query);
    	$stmt->execute($params);
    	$stmt->closeCursor();
    	$db->closeConnection();
    } 
    public static function insert($tableName,$data) {
    	if(empty($data)) return;
    	$params = array();
    	$fieldNames = array();
    	$fieldValues = array();
    	foreach ($data as $key => $value) {
    		$params[$key] = $value;
    		$fieldNames[] = "`$key`";
    		$fieldValues[] = ":$key";
    	}
    	$query = 'INSERT INTO `'.$tableName.'`('.join(',', $fieldNames).') VALUES('.join(',', $fieldValues).') ';
    	$db = Zend_Registry::get('connectDb');
    	$stmt = $db->prepare($query);
    	$stmt->execute($params);
    	$stmt->closeCursor();
    	$db->closeConnection();
    }
    public static function query($sql,$flag = 1,$params = array()) {
    	$db = Zend_Registry::get('connectDb');
    	$stmt = $db->prepare($sql);
    	$stmt->execute($params);
    	$result = null;
    	if($flag == 1) {//return rows
    		$result = $stmt->fetchAll();
    	} elseif ($flag == 2) { // return one
    		$result = $stmt->fetch();
    		$result = $result==false?null:$result;
    	} else if ($flag == 3) { //execute not return
    		
    	}
    	$stmt->closeCursor();
    	$db->closeConnection();
    	return $result;
    }
}