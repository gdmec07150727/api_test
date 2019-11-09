<?php
namespace app\api\validate;
use think\Validate;

class ID_valid extends BaseValidate
{
	protected $rule = [
		'id' => 'require|isPositiveInt'
	];

	protected function isPositiveInt($value,$rule='',$data='',$field='')
	{
		if(is_numeric($value) && is_int($value+0) && ($value+0)>0)
		{
			return true;
		}else{
			return $field.'字段必须是整数';
		}
	}


}
?>