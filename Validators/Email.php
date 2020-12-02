<?php

namespace Validators;

class Email extends AbstractValidator
{

	 private $rule = false;

	 function __construct($rule = false)
	 {
			$this->rule = $rule;
	 }

	 function isValid($value)
	 {
			if (!filter_var($value, FILTER_VALIDATE_EMAIL))
			{
				 $this->setError("Invalid Email.");
				 return false;
			}
			return true;
	 }

}
