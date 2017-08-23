<?php
class Cases{
	public $db;
	public $id;
	public $pageSize;//每页个数
	public $prvPage;//前一页
	public $nextPage;//下一页
	public $currentPage;//当前页
	public $maxPage;//最大的页数
	public $showPage;//要显示的页数
	public $currentIndex;//当前索引
	public $prvIndex;//前一个索引
	public $nextIndex;//后一个索引
	public $maxIndex;//最后的索引
	public function __construct($db,$pageSize=6,$showPage=3){
		$this->db=$db;
		$this->pageSize=$pageSize;
		$this->showPage=$showPage;
	}
	//获取   成功案例  的内容
	public function getCaseCnt(){
		$sql="select * from product where fid=5";
		$rows=$this->db->selectRows($sql);
		return $rows;
	}

	//获取最大的页数
	public function getMaxPage(){
		$sql="select id from product where fid=5";
		$rows=$this->db->selectRows($sql);
		$nums=count($rows);
		$this->maxPage=ceil($nums/$this->pageSize);

	}
	//处理上一页，当前页，下一页的关系
	public function checkPage(){
		$this->getMaxPage();
		$this->currentPage=1;
		if (isset($_GET['page'])) {
			$this->currentPage=$_GET['page'];
		}
		if ($this->currentPage<1) {$this->currentPage=1;}
		if ($this->currentPage>=$this->maxPage) {$this->currentPage=$this->maxPage;}
		if ($this->currentPage==1) {
			$this->prvPage=1;
		}else{
			$this->prvPage=$this->currentPage-1;
		}
		if ($this->currentPage==$this->maxPage) {
			$this->nextPage=$this->maxPage;
		}else{
			$this->nextPage=$this->currentPage+1;
		}
		// echo $this->prvPage.'....'.$this->currentPage.'...'.$this->nextPage;
	}
	//根据当前页获取内容
	public function getCntPage(){
		$start=($this->currentPage-1)*$this->pageSize;
		$sql="select * from product where fid=5 limit {$start},$this->pageSize";
		return $this->db->selectRows($sql);
	}
	//制作文本链接
	public function makeTextLinks(){
		$link='';
		$link.='<a class="yeshu"  href="?page=1">首页</a>';
		$link.='<a class="yeshu"  href="?page='.$this->prvPage.'">上一页</a>';
		$link.='<a class="yeshu" href="?page='.$this->nextPage.'">下一页</a>';
		$link.='<a class="yeshu"  href="?page='.$this->maxPage.'">末尾页</a>';
		return  $link;
	}
	//制作数字链接
	public function makeNumLinks(){
		$link='';
		$prvLink='';
		$nexLink='';
		$numLink='';
		if ($this->currentPage==1) {
			$prvLink.='<a class="yeshu"  href="?page=1">第一页</a>';
		}else{
			$prvLink.='<a class="yeshu"  href="?page='.$this->prvPage.'">上一页</a>';
		}
		if ($this->currentPage==$this->maxPage) {
			$nexLink.='<a class="yeshu" href="?page='.$this->maxPage.'">末尾页</a>';
		}else{
			$nexLink.='<a class="yeshu" href="?page='.$this->nextPage.'">下一页</a>';
		}
		if ($this->maxPage<$this->showPage) {//总页数小于数字页
			for ($i=1; $i <$this->maxPage ; $i++) { 
				if ($this->currentPage==$i) {
					$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
				}else{
					$numLink.='<a class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
				}
			}
		}else{
			if ($this->currentPage>=$this->maxPage-$this->showPage+1) {//当前页在最后一组页面中
				$start=$this->maxPage-$this->showPage+1;
				$end=$this->maxPage;
				for ($i=$start; $i <=$end ; $i++) { 
					if ($this->currentPage==$i) {
						$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
					}else{
						$numLink.='<a class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
					}
				}
			}else{//当前页不在最后一组页面中
				if ($this->currentPage==1) {
					for ($i=1; $i <=$this->showPage ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
						}
					}
				}else{
					$start=$this->currentPage-1;
					$end=$this->currentPage+$this->showPage-1;
					for ($i=$start; $i <$end ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
						}
					}
				}

			}

		}
		

		return  $link=$prvLink.$numLink.$nexLink;
	}






	//通过id获取详情
	public function getDetailById(){
		$sql="select * from product where id={$this->id}";
		$row=$this->db->selectRow($sql);
		return $row;
	}
	//根据id获取当前的索引,并处理上下索引
	public function getIndex(){
		$this->id=$_GET['id'];
		$sql="select id from product where fid=5";
		$rows=$this->db->selectRows($sql);
		if (!$rows) {return '';exit;}
		foreach ($rows as $key => $row) {
			if ($this->id==$row['id']) {
				 $this->currentIndex=$key;
			}
		}
		if ($this->currentIndex==0) {
			$this->prvIndex=0;
		}else{
			 $this->prvIndex=$this->currentIndex-1;
		}
		$this->maxIndex=count($rows)-1;
		if ($this->currentIndex==$this->maxIndex) {
			$this->nextIndex=$this->maxIndex;
		}else{
			 $this->nextIndex=$this->currentIndex+1;
		}
	}
	//制作连接
	public function makeLinks(){
		$sql="select * from product where fid=5 limit $this->prvIndex,1";
		 $prvRow=$this->db->selectRow($sql);
		$sql="select * from product where fid=5 limit $this->nextIndex,1";
		$nextRow=$this->db->selectRow($sql);
		$link='';
		if ($this->currentIndex==0) {
			$link.='上一篇：<a href="">没有了</a>';
		}else{
			$link.='上一篇：<a href="?id='.$prvRow['id'].' ">'.$prvRow['cnttitle'].'</a>';
		}
		if ($this->currentIndex==$this->maxIndex) {
			$link.='下一篇：<a href="">末尾片</a>';
		}else{
			$link.='下一篇：<a href="?id='.$nextRow['id'].' ">'.$nextRow['cnttitle'].'</a>';
		
		}
		echo $link;
		// print_r($prvRow);
	}
}