<?php
class Product{
	protected $db;
	protected $type;//类型
	protected $cnttitle;
	protected $id;
	protected $tab;//表名
	protected $currentPage;//当前页
	protected $prvPage;//上一页
	protected $nextPage;//下一页
	protected $pageSize;//每页页数
	protected $nums;//数字页数
	protected $currentIndex;//当前索引
	protected $prvIndex;//上一个索引
	protected $nextIndex;//下一个索引
	protected $maxIndex;//最大索引
	public function __construct($db,$tab,$pageSize=6,$nums=2){
		$this->db=$db;
		$this->pageSize=$pageSize;
		$this->tab=$tab;
		$this->nums=$nums;
		$this->countMaxPage();
		
	}
	//检测get传递过来的数据类型
	public function checkType(){
		$this->type='';
		 if (!isset($_GET['type'])) {
		 	$this->type="产品中心";
		 }else{
		 	$this->type=$_GET['type'];
		 }
		 return $this->type;
	}
	//总计最大的页数
	public function countMaxPage(){
		$sql='';
		if (!isset($_GET['type'])) {
			$sql="select id from {$this->tab} where fid=4";
		}else{
			$sql="select id from {$this->tab} where fid=4 and type='{$_GET['type']}'";
		}
		$rows=$this->db->selectRows($sql);
		$allPage=count($rows);
		$this->maxPage=ceil($allPage/$this->pageSize);
	}
	//处理上一页，下一页，当前页的关系
	public function checkPage(){
		 $this->currentPage=1;//当前页，默认为1页
		 if (isset($_GET['page'])) {
		 	 $this->currentPage=$_GET['page'];
		 }
		 if ($this->currentPage<=1) {$this->currentPage=1; }
		 if ($this->currentPage>=$this->maxPage) {$this->currentPage=$this->maxPage; }
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
	}
	//根据当前类型与当前页取当前页面的记录
	public function getPage(){
		$this->checkPage();
		$start=($this->currentPage-1)*$this->pageSize;
		if ($this->type=='产品中心') {
			$sql="select * from {$this->tab} where fid=4  limit $start,$this->pageSize";
		}else{
			 $sql="select * from {$this->tab} where fid=4 and type='{$this->type}' limit $start,$this->pageSize";
		}
		
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	//根据当前类型与当前页生成链接(文字)
	public function makePageLinks(){
		$link='';
		$link.='<a class="yeshu" href="?type='.$this->type.'&page=1">首页</a>';
		$link.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->prvPage.'">上一页</a>';
		$link.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->nextPage.'">下一页</a>';
		$link.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->maxPage.'">末尾页</a>';
		$link.='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#f00">'.$this->currentPage.'</font>/'.$this->maxPage.'';
		if ($this->type=='产品中心') {
			$link=str_replace("type={$this->type}&", '', $link);
		}
		return $link;
	}
	//根据当前类型与当前页生成链接(数字)
	public function makeNumPageLinks(){
		$link='';
		$prvLink='';
		$nextLink='';
		$numLink='';
		if($this->maxPage>1){
			if ($this->currentPage==1) {
				$prvLink='<a class="yeshu" href="?type='.$this->type.'&page=1">第一页</a>';
			}else{
				$prvLink.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->prvPage.'">上一页</a>';
			}
			if ($this->currentPage==$this->maxPage) {
				$nextLink.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->maxPage.'">末尾页</a>';
			}else{
				$nextLink.='<a class="yeshu" href="?type='.$this->type.'&page='.$this->nextPage.'">下一页</a>';
			}
		}
		if ($this->maxPage==1) {
			$prvLink='<span class="yeshu" >上一页</span>';
			$nextLink.='<span class="yeshu" >下一页</span>';
			for ($i=1; $i <=$this->maxPage; $i++) { 
				if ($this->currentPage==$i) {
					$numLink.='<a class="shuzi_2" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
				}else{
					$numLink.='<a class="shuzi_1" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
				}
			}
		}else if ($this->maxPage<$this->nums) {//总页数小于数字页
			for ($i=1; $i <=$this->maxPage; $i++) { 
				if ($this->currentPage==$i) {
					$numLink.='<a class="shuzi_2" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
				}else{
					$numLink.='<a class="shuzi_1" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
				}
			}
		}else{
			//当前页是否是最后一组当中的页面
			//$this->maxPage-$this->nums+1最后几个页面当中的第一个页面
			if ($this->currentPage>=$this->maxPage-$this->nums+1) {
				$start=$this->maxPage-$this->nums+1;//开始页数
				$end=$this->maxPage;//结束页数
				for ($i=$start; $i <=$end ; $i++) { 
					if ($this->currentPage==$i) {
						$numLink.='<a class="shuzi_2" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
					}else{
						$numLink.='<a class="shuzi_1" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
					}
				}
			}else{
				if ($this->currentPage==1) {
					for ($i=1; $i <=$this->nums ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a class="shuzi_1" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
						}
					}
				}else{
					$start=$this->currentPage-1;
					$end=$this->currentPage+$this->nums-1;
					for ($i=$start; $i <$end ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a class="shuzi_1" href="?type='.$this->type.'&page='.$i.'">'.$i.'</a>';
						}
					}
				}
				
			}
		}

		$link=$prvLink.$numLink.$nextLink;
		if ($this->type=='产品中心') {
			$link=str_replace("type={$this->type}&", '', $link);
		}
		return $link;
	}
	//获取产品中心的详情
	public function getDetailDate(){
		if (isset($_GET['type'])) {
			$sql="select * from {$this->tab}  where type='{$_GET['type']}' and id='{$_GET['id']}' ";
		}	
		$rows=$this->db->selectRow($sql);
		return $rows;
	}
	public function getDateAll(){
		$sql="select * from {$this->tab} ";
		$rows=$this->db->selectRows($sql);
		return $rows;
	}
	//根据当前的id取其在数据表中对应的索引，同时处理上一篇和下一篇的索引关系
	public function getIndexById(){
		$id=$_GET['id'];
		$sql="select id from {$this->tab} where fid=4";
		$rows=$this->db->selectRows($sql);
		if (!$rows) {return '';exit;}
		foreach ($rows as $key => $row) {
			if ($id==$row['id']) {
				  $this->currentIndex=$key;
			}
		}
		  $this->maxIndex=count($rows)-1;
		if ($this->currentIndex==0) {
			$this->prvIndex=0;
		}else{
			$this->prvIndex=$this->currentIndex-1;
		}
		if ($this->currentIndex==$this->maxIndex) {
			$this->nextIndex=$this->maxIndex;
		}else{
			$this->nextIndex=$this->currentIndex+1;
		}
		// echo $id.'---id--'.$this->prvIndex.'--上-'.$this->currentIndex.'--当前-'.$this->nextIndex.'--下-';
	}
	//根据上一篇和下一篇的索引取id，type，标题并生成相关连接
	public function makeLinks(){
		$link='';
		$sql="select id,type,cnttitle from {$this->tab} where fid=4 limit $this->prvIndex,1";
		$prvRow=$this->db->selectRow($sql);
		$sql="select id,type,cnttitle from {$this->tab} where fid=4 limit $this->nextIndex,1";
		$nextRow=$this->db->selectRow($sql);
		if ($this->currentIndex==0) {
			$link.='上一篇：<a href="">没有了</a>';
		}else{
			$link.='上一篇：<a href="?type='.$prvRow['type'].'&id='.$prvRow['id'].' ">'.$this->checkTitle($prvRow['cnttitle']).'</a>';
		}
		if ($this->currentIndex==$this->maxIndex) {
			$link.='下一篇：<a href="">末尾片</a>';
		}else{
			$link.='下一篇：<a href="?type='.$nextRow['type'].'&id='.$nextRow['id'].' ">'.$this->checkTitle($nextRow['cnttitle']).'</a>';
		
		}
		return $link;
	}
	//处理链接中的标题；长度超过5个字符的标题，多出的部分用...代替
	public function checkTitle($title,$len=5){
		$res=$title;
		$lens=mb_strlen($title,'utf-8');
		if ($lens>$len) {
			$res=mb_substr($title, 0,3,'utf-8').'...';
		}
		return $res;
	}

}