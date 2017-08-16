<?php
// header("content-type:text/html;charset=utf-8");
class Db{
	protected $conn;//成员属性
	public function __construct(){//构造函数：在new的时候，就自动运行
		$this->conn=mysqli_connect('127.0.0.1','root','root');//登入服务器
		mysqli_select_db($this->conn,'dlcj');//选择数据库
		mysqli_query($this->conn,'set names utf8');//防止乱码
	}
	/*
	*作用：选取一条记录
	*参数：sql语句
	*返回值：一维数组
	*/
	public function selectRow($sql){
		$res=mysqli_query($this->conn,$sql);
		$row=mysqli_fetch_assoc($res);
		return $row;
	}
	//选取多条记录
	public function selectRows($sql){
		$res=mysqli_query($this->conn,$sql);
		while($row=mysqli_fetch_assoc($res)) { 
			$rows[]=$row;
		}
		return $rows;
	}
	//处理数据（insert,delete,update）
	public function otherData($sql){
		mysqli_query($this->conn,$sql);
		return mysqli_affected_rows($this->conn);
	}
	public function __destruct(){//析构函数
		if ($this->conn) {
			mysqli_close($this->conn);//关闭数据库链接，回收资源
		}
	}
}
// $d=new Db();
// $sql="select * from message where name='曾福琴' or phone='12345678910'";//字段的值必须用单引号
// $sql="select * from message order by id desc";//asc desc
// $sql="select * from message limit 1,1";//limit索引
// $sql="select * from message order by id desc limit 0,2";//最近的前两条
// $sql="insert into  case(type,imgtitle,imgs) values('小蓝','136@161','18272903298')";
// $sql="insert into case(id,type,imgtitle,imgs) values('' ,'小兰','123','fdsjahjk')";
// $sql="update message set name='蓝器',emain='2' where id='3'";
// $sql="delete from message where id=4";
// $row=$d->otherData($sql);
// echo "<pre>";
// print_r($row);
// echo $row;
// var_dump($d);