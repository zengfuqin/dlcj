<?php
class Product{
	public $db;
	public $type;
	public $cnttitle;
	public $typeid;
	public function __construct($db){
		$this->db=$db;
	}
	//检测get传递过来的数据类型
	public function checkType(){
		 if (!isset($_GET['type'])) {
		 	$type="产品中心";
		 }else{
		 	$type=$_GET['type'];
		 }
		 return $type;
	}
	//根据类型取列表页的数据
	public function listDate(){
		$sql="";
		if (!isset($_GET['type'])) {
		 	// return "全部产品";
		 	$sql="select id,type,cnttitle,titleImg from product ";
		 }else{
		 	$sql="select * from product  where type='{$_GET['type']}'";
		 }
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	public function getDetailDate(){
		$sql="select * from product  where type='{$_GET['type']}' and cnttitle='{$_GET['cnttitle']}'";
		$rows=$this->db->selectRow($sql);
		return $rows;
	}
	public function getDateAll(){
		$sql="select * from product ";
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	public function getTree($array,$typeid=0,$level=0,$html='--'){
		$tree=array();
		foreach ($array as $row) {
			if ($row['typeid']==$typeid) {
				$row['level']=$level+1;
				$row['html']=str_repeat($html, $level);
				$tree[]=$row;
				$tree=array_merge($tree,$this->getTree($array,$row['id'],$level+1,$html));
			}
		}
		return $tree;
	}
}