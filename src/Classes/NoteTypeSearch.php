<?php namespace Fungku\NetSuite\Classes;

class NoteTypeSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "NoteTypeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

