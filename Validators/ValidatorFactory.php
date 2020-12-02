<?php

namespace Validators;

class ValidatorFactory
{

	 static function build($type)
	 {
		
			$type_ = explode(':', $type);
			$params = isset($type_[1]) ?  $type_[1] : null;
		
			$type_validator = "\\Validators\\" . ucfirst($type_[0]);
			if (!$type_validator)
			{
				 return null;
			}
			if (!class_exists($type_validator))
			{
				 throw new \Exception("Not Exists Validator Type");
			}
			return new $type_validator($params);
	 }

}
