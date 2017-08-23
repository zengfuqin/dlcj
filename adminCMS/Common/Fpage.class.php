<?php 
class Fpage{
	protected $db;
	protected $tab;
	protected $currentPage;
	protected $prePage;
	protected $nextPage;
	protected $maxPage;
	protected $pageSize;
	protected $showPage;
	public function __construct($db,$tab,$pageSize=4,$showPage=3){
		$this->db=$db;
		$this->tab=$tab;
		$this->pageSize=$pageSize;
		$this->showPage=$showPage;
	}
	public function init(){
		$this->makeNumLinks();
		$this->getCntByPage();
	}
	//最大页数
	public function getMaxPage(){
		$sql="select id from {$this->tab}";
		$rows=$this->db->selectRows($sql);
		$nums=count($rows);
		 $this->maxPage=ceil($nums/$this->pageSize);
	}
	//上下页关系
	public function checkPage(){
		$this->getMaxPage();
		$this->currentPage=1;
		if (isset($_GET['page'])) {
			$this->currentPage=$_GET['page'];
		}
		if ($this->currentPage<1) {
			$this->currentPage=1;
		}
		if ($this->currentPage>$this->maxPage) {
			$this->currentPage=$this->maxPage;
		}
		if ($this->currentPage==1) {
			$this->prePage=1;
		}else{
			$this->prePage=$this->currentPage-1;
		}
		if ($this->currentPage==$this->maxPage) {
			$this->nextPage=$this->maxPage;
		}else{
			$this->nextPage=$this->currentPage+1;
		}
		// echo $this->prePage.$this->currentPage.$this->nextPage;
	}
	//获取内容
	public function getCntByPage(){
		$star=($this->currentPage-1)*$this->pageSize;
		$sql="select * from {$this->tab} limit $star,$this->pageSize";
		return $this->db->selectRows($sql);
	}
	//文本链接
	public function makeLinks(){
		$this->checkPage();
		$link='';
		$link.='<a href="?page=1">第一页</a>';
		$link.='<a href="?page='.$this->prePage.'">上一页</a>';
		$link.='<a href="?page='.$this->nextPage.'">下一页</a>';
		$link.='<a href="?page='.$this->maxPage.'">末尾页</a>';
		echo $link;
	}
	//数字页
	public function makeNumLinks(){
		$this->checkPage();
		$link='';
		$preLink='';
		$nextLink='';
		$numLink='';
		$preLink.='<a class="yeshu" href="?page='.$this->prePage.'">上一页</a>';
		$nextLink.='<a class="yeshu" href="?page='.$this->nextPage.'">下一页</a>';
		if ($this->maxPage<$this->showPage) {
			for ($i=1; $i <=$this->maxPage ; $i++) { 
				if ($this->currentPage==$i) {
					$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
				}else{
					$numLink.='<a  class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
				}
			}
		}else{
			if ($this->currentPage>=$this->maxPage-$this->showPage+1) {
				$star=$this->maxPage-$this->showPage+1;
				$end=$this->maxPage;
				for ($i=$star; $i <=$end ; $i++) { 
					if ($this->currentPage==$i) {
						$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
					}else{
						$numLink.='<a  class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
					}
				}
			}else{
				if ($this->currentPage==1) {
					for ($i=1; $i <=$this->showPage ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a  class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
						}
					}
				}else{
					$star=$this->currentPage-1;
					$end=$this->currentPage+$this->showPage-1;
					for ($i=$star; $i <$end ; $i++) { 
						if ($this->currentPage==$i) {
							$numLink.='<a class="shuzi_2" href="?page='.$i.'">'.$i.'</a>';
						}else{
							$numLink.='<a  class="shuzi_1" href="?page='.$i.'">'.$i.'</a>';
						}
					}
				}
			}
		}
		$link=$preLink.$numLink.$nextLink;
		return  $link;
	}
}