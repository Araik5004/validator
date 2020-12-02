<?php

namespace Validators;

class Max extends AbstractValidator
{

	 private $rule = false;

	 function __construct($rule = false)
	 {
			$this->rule = $rule;
	 }

	 function isValid($value)
	 {
			if (strlen($value) > $this->rule)
			{
				 $this->setError("The field may not be greater than $this->rule.");
				 return false;
			}
			return true;
	 }

}
