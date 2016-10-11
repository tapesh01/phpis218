<?php

class html {
	public $html;
	public function __construct($html = 'DEFAULT' ){
    		 echo $html;
	}
}

  

class htmlTable extends html {
	protected $table;
	public function getTableHTML() {
		$this->html = 'some table html';
	}
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
 $html = $obj->getTableHTML();
 echo $obj->$html;

?>

