<?php namespace Fungku\NetSuite\Classes;

class CampaignAudience extends Record {
	public $name;
	public $description;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"description" => "string",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

