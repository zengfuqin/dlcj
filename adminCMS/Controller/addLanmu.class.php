<?php
class Lanmu{
	public $db;
	public function __construct($db){
		$this->db=$db;
	}

	//获取菜单名称
	public function getMenu(){
		$sql="select * from adminAddMenu ";
		return $this->db-> selectRows($sql);
	}
	//根据id获取信息
	public function getMenuById(){
		$id=$_GET['id'];
		$sql="select * from adminAddMenu where id=$id ";
		return $this->db-> selectRow($sql);
	}
	//添加栏目
	public function addLanmu(){
		$fid=$_POST['menuID'];
		$Lanmu=$_POST['lanmu'];
		if (!empty($Lanmu)) {
			$sql="insert  into adminAddMenu(fid,name) values('{$fid}','{$Lanmu}') ";
			if ($this->db->otherData($sql)>0) {
			 	return array('code'=>1,'msg'=>'添加栏目成功！');exit;
			 } else{
			 	return array('code'=>2,'msg'=>'添加栏目失败！');exit;
			 }
		}
	}
	//根据id跟新栏目
	public function upLanmuById(){
		$id=$_GET['id'];
		$name=$_GET['name'];
		$sql="update  adminAddMenu set name='{$name}' where id=$id ";
		if ($this->db->otherData($sql)>0) {
			 return array('code'=>3,'msg'=>"添加栏目成功！");exit;
		 } else{
			 return array('code'=>4,'msg'=>"添加栏目失败！");exit;
		 }
	}
	//根据id删除栏目
	public function deleteLanmuById(){
		$id=$_GET['id'];
		$sql="select * from adminAddMenu where fid={$id}";
		$res=$this->db-> selectRow($sql);
		 if ( $res) {
		 	return array('code'=>5,'msg'=>"请先删除子孙类！");exit;
		 }else{
		 	$sql="delete from adminAddMenu where id=$id";
		 	if($this->db->otherData($sql)>0){
		 		return array('code'=>6,'msg'=>"删除栏目成功！");exit;
		 	}else{
		 		return array('code'=>7,'msg'=>"删除栏目失败！");exit;
		 	}
		 	
		 }
	}
	//根据ID更新栏目
	public function updateLanmu(){
		$id=$_POST['id'];//来自隐藏域
		$fid=$_POST['menuID'];
		$name=$_POST['name'];
		if (empty($name)) {return array('code'=>8,'msg'=>"栏目名不能为空！");exit;}
		$sql="update  adminAddMenu set fid={$fid},name='{$name}' where id=$id ";
		if ($this->db->otherData($sql)>0) {
			 return array('code'=>9,'msg'=>"更新栏目成功！");exit;
		 } else{
			 return array('code'=>10,'msg'=>"更新栏目失败！");exit;
		 }
	}

}