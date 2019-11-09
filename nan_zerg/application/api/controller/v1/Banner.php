<?php
namespace app\api\controller\v1;

use app\api\validate as validate;

class Banner
{
	//设置url,banner/:id
	//设置banner id号
	public function getBanner($id)
	{
		$data = [
			'id' => $id
		];
		$validate = new validate\ID_valid();
		$validate->goCheck($data);	
		
		
	}
}

?>