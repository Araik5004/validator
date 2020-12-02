<?php

namespace Validators;

abstract class AbstractValidator implements ValidatorInterface
{

	 private $errors;

	 abstract function isValid($value);

	 function setError($error)
	 {
			$this->errors = $error;
	 }

	 function getError()
	 {
			return $this->errors;
	 }

}