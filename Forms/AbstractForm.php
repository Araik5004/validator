<?php


namespace Forms;
use Validators\ValidatorFactory;


abstract class AbstractForm implements FormInterface
{

	 private $fields = [];
	 private $rules = [];
	 private $errors = [];

	 function isFormValid()
	 {
			if ($this->getErrors())
			{
				 return false;
			}
			return true;
	 }

	 function validate()
	 {
			if ($this->fields && $this->rules)
			{
				 foreach ($this->rules as $field => $rule)
				 {
						$each_rule = explode("|", $rule);
						foreach ($each_rule as $one_rule)
						{
							 $validator = ValidatorFactory::build($one_rule);
							 if (!$validator->isValid($this->fields[$field]))
							 {
									$this->setError($field, $validator->getError());
							 }
						}
				 }
			}
	 }

	 function addRules(array $data)
	 {
			foreach ($data as $name => $value)
			{
				 $this->rules[$name] = $value;
			}
	 }

	 function addFields(array $data)
	 {
			foreach ($data as $name => $value)
			{
				 $this->fields[$name] = $value;
			}
	 }

	 function setError($field_name, $validation_error)
	 {
			$this->errors[$field_name][] = $validation_error;
	 }

	 function getFields()
	 {
			return $this->fields;
	 }

	 function getErrors()
	 {
			return $this->errors;
	 }

}
