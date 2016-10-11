<?php

class html {
	public $html;
	public function __construct($html = 'DEFAULT' ){
    		 echo $html;
	}
}

  

class htmlTable extends html {
  	public function fromArray($arr){
		$this->html = $html + '<table>';
		foreach($arr as $link){
			$this->html = $html + '<tr>';
			foreach($link as $key => $value){
				$this->html = $html + '<td>' + $key + '</td>' ; 
				$this->html = $html + '<td>' + $value + '</td>';
			}
			$this->html = $html + '</tr>';
		}
		$this->html = $html + '</table>';
	}
}

$obj = new htmlTable; 

$seasons = array(1=>"Autumn",2 =>"Winter",3=>"Spring",4=>"Summer");
$obj->fromArray($seasons);
echo $obj->$html;
?>

