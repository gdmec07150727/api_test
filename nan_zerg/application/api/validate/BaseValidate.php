<?php
namespace app\api\validate;
use think\Validate;
use think\Request;
use think\Exception;

class BaseValidate extends Validate
{
	public function goCheck()
	{
		//获取所有传过来的值
		$request = Request::instance();
		$params = $request->param();
		//验证当前值
		$result = $this->check($params);
		if(!$result)
		{
			$error = $this->error;
			throw new Exception($error);
			
		}else
		{
			return true;
		}
	}
}

?>