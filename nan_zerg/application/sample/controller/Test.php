<?php

namespace app\sample\controller;

use think\Request;

class Test{

	public function hello(){
		//获取传过来的参数，get和post都可以
		//$all = Request::instance()->param();
		//$all = input('param.');
		$id = input('id');
		$shu = db('tp_cate')->select($id);
		echo json_encode($shu);
	}
	
}

?>