<?php 

interface Crudinterface{
	public function select($what);
	public function from($table);
	public function limit($limit);
	public function orderby($orderby);
	public function where($collumn,$value,$operator = '=');
	public function andwhere($collumn,$value,$operator = '=');
	public function quote($value);
	public function sql($sql);
	public function execute();
	
}//end interface





?>