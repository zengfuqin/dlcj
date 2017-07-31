<?php
header("content-type:text/html;charset=utf-8");
	class Tabe{
		public function makeTabe(){
			echo "<table border='1' cellspacing='0' cellpadding='0' width='80%' height='50'>
					<tr><td ></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td></tr>
					<tr><td></td><td></td><td></td></tr>
				</table>";
		}
	}
	$a=new Tabe();
	$a->makeTabe();