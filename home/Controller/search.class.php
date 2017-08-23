<?php
class Search{
	public $db;
	public $keys;
	public function __construct($db){
		$this->db=$db;
	}
	public function searchKeys(){
			$this->keys=isset($_GET['keys']) ? trim($_GET['keys']) : '';
			if (!empty($this->keys)) {
				$sql="select * from product  where  cnttitle like '%".$this->keys."%'";
				return $this->db->selectRows($sql);
			}
	}
}