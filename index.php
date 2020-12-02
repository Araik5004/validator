<?php


function __autoload($class_name) 
{
    $filename =  $class_name.'.php';
    if (  file_exists($filename))
    {
        include $filename;
    }
		else
		{
			 throw new Exception("Can't find {$class_name}");
		}
    
}

//Form Data
$request = [
		'email' => 'araik.minasov.r@gmail.com', //araik.minasov.r@gmail.com
		'username' => 'Araik', //Araik
];


$validate = new \Forms\FormValidate();
$validate->addFields($request);
$validate->addRules(
				[
						'email' => 'required|email',	//field is requerid and mail type
						'username' => 'required|min:5|max:10',	//field is required , min 5 , max 10 charset
				]
);

$validate->validate();

if (!$validate->isFormValid())
{
	 echo'<pre>';
	 print_r($validate->getErrors());
	 echo'</pre>';
}
else
{
	 echo 'All input is valid';
}
