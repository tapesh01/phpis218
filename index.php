<?php

  echo 'Hello World';
  '<br>'

 
  $myarray = array();
  $myarray = 'some value 1';
  $myarray = 'some value 2';
  $myarray = 'some value 3';

  print_r($myarray);

  $myAssoc = array('value1' => $myarray, 'value2' => $myarray);

  print_r($myAssoc);
  
  print_r($myAssoc['value1']);

  class myclass {
  
  public $myPublic;
  private $myPrivate;
  protected $myProtected;

  public function_construct() {
  	
	$this->myPublic = 1;
	$this->myPrivate = 2;
	$this->myProtected = 3;

  }
}	
  $obj = new myclass;

  print_r($obj);




?>
