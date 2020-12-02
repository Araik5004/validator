<?php

namespace Validators;

class Required extends AbstractValidator
{

	 private $rule = false;

	 function __construct($rule = false)
	 {
			$this->rule = $rule;
	 }

	 function isValid($value)
	 {
			$val_ = trim($value);
			if (!$val_)
			{
				 $this->setError("Field is Required.");
				 return false;
			}
			return true;
	 }

}
