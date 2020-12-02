<?php

namespace Validators;

class Min extends AbstractValidator
{

	 private $rule = false;

	 function __construct($rule = false)
	 {
			$this->rule = $rule;
	 }

	 function isValid($value)
	 {
			if (strlen($value) < $this->rule)
			{
				 $this->setError("The field must be at least $this->rule.");
				 return false;
			}
			return true;
	 }

}
