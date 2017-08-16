<?php
// header("content-type:text/html;charset=utf-8");
// include("../Model/Db.class.php");
class Cnt{
	public $db;
	public $sel_lanmu;
	public $title;
	public $content;
	public $titleImg;
	public function __construct($db){
		$this->db=$db;
		$this->getFormDate();
	}
	public function getFormDate(){
		$this->sel_lanmu=$_POST['sel_lanmu'];
		$this->title=$_POST['title'];
		$this->content=$_POST['content'];
		$this->titleImg=$_POST['titleImg'];

	}
	public function addCnt(){
		$sql="insert into product(type,cnttitle,cnt,titleImg) values('{$this->sel_lanmu}','{$this->title}','{$this->content}','{$this->titleImg}')";
		return $this->db->otherData($sql);
	}
	 public function getParents($array,$id){
			$parents=array();
			foreach ($array as $row) {
				if ($row['id']==$id) {//查找的开始位置
					$parents[]=$row;
					if ($row['pid']>0) {//查询的终止条件
						$parents=array_merge($parents,getParents($array,$row['pid']));//传递的是父id
					}
				}
			}
			return $parents;
		}
}
