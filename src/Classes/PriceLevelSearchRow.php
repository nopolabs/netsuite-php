<?php namespace Fungku\NetSuite\Classes;

class PriceLevelSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PriceLevelSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

