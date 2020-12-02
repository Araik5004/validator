<?php

namespace Validators;

interface ValidatorInterface
{

	 function getError();

	 function setError($error);

	 function isValid($value);
}