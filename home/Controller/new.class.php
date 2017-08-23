<?php
class News{
	public $db;
	public function __construct($db){
		$this->db=$db;
	}
	public function checkDate(){
		if (!isset($_GET['type'])) {
			$type='新闻资讯';
		}else{
			$type=$_GET['type'];
		}
		return $type;
	}
	public function listDate(){
		$sql="";
		if (!isset($_GET['type'])) {
		 	// return "全部产品";
		 	$sql="select id,type,cnttitle,cnt,titleImg from product where fid=3";
		 }else{
		 	$sql="select * from product  where type='{$_GET['type']}'";
		 }
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	//详情
	public function getDetailDate(){
		if (isset($_GET['type'])) {
			$sql="select * from product  where type='{$_GET['type']}' and id='{$_GET['id']}' ";
		}
		$rows=$this->db->selectRow($sql);
		return $rows;
	}
}