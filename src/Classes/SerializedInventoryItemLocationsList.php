<?php namespace Fungku\NetSuite\Classes;

class SerializedInventoryItemLocationsList {
	public $locations;
	public $replaceAll;
	static $paramtypesmap = array(
		"locations" => "SerializedInventoryItemLocations[]",
		"replaceAll" => "boolean",
	);
}

