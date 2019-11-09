<?php

namespace app\sample\controller;

use think\Request;

class Links{

	public function lst(){
		//获取传过来的参数，get和post都可以
		//$all = Request::instance()->param();
		//$all = input('param.');
		$shu = db('tp_links')->select();
		//PHP5.4版本，已经给Json新增了一个选项: JSON_UNESCAPED_UNICODE。加上这个选项后，就不会自动把中文编码了。
		echo json_encode($shu,JSON_UNESCAPED_UNICODE);
	}
	
}

?>