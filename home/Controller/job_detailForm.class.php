<?php
// header("content-type:text/html;charset=utf-8");
// include("../Model/Db.class.php");
class Jobdetail{
	public $db;
	public $position;
	public $name;
	public $sex;
	public $age;
	public $domicile;
	public $ctphone;
	public $educational;
	public $professional;
	public $school;
	public $jobContent;
	public function  __construct($db){
		$this->db=$db;
		$this->getForm();
	}
	public function getForm(){
		$this->position=$_POST['position'];
		$this->name=$_POST['name'];
		$this->sex=$_POST['sex'];
		$this->age=$_POST['age'];
		$this->domicile=$_POST['domicile'];
		$this->ctphone=$_POST['ctphone'];
		$this->educational=$_POST['educational'];
		$this->professional=$_POST['professional'];
		$this->school=$_POST['school'];
		$this->jobContent=$_POST['jobContent'];
	}
	public function addJobdetail(){
		  $sql="insert into positionbtninfo(position,name,sex,age,domicile,ctphone,educational,professional,school,jobContent) values('{$this->position}','{$this->name}','{$this->sex}','{$this->age}','{$this->domicile}','{$this->ctphone}','{$this->educational}','{$this->professional}','{$this->school}','{$this->jobContent}')";
		return $this->db->otherData($sql);
	}
}
