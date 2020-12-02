<?php

namespace Forms;

interface FormInterface
{

	 public function validate();

	 public function isFormValid();

	 public function addFields(array $data);
	 
	 public function addRules(array $data);
}