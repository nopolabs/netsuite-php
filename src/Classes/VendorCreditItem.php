<?php namespace Fungku\NetSuite\Classes;

class VendorCreditItem {
	public $item;
	public $vendorName;
	public $line;
	public $orderLine;
	public $quantity;
	public $units;
	public $inventoryDetail;
	public $serialNumbersList;
	public $description;
	public $rate;
	public $amount;
	public $binNumbers;
	public $taxCode;
	public $taxRate1;
	public $taxRate2;
	public $grossAmt;
	public $tax1Amt;
	public $options;
	public $department;
	public $class;
	public $location;
	public $customer;
	public $isBillable;
	public $amortizationSched;
	public $amortizStartDate;
	public $amortizationEndDate;
	public $amortizationResidual;
	public $customFieldList;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"vendorName" => "string",
		"line" => "integer",
		"orderLine" => "integer",
		"quantity" => "float",
		"units" => "RecordRef",
		"inventoryDetail" => "InventoryDetail",
		"serialNumbersList" => "RecordRefList",
		"description" => "string",
		"rate" => "string",
		"amount" => "float",
		"binNumbers" => "string",
		"taxCode" => "RecordRef",
		"taxRate1" => "float",
		"taxRate2" => "float",
		"grossAmt" => "float",
		"tax1Amt" => "float",
		"options" => "CustomFieldList",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"amortizationSched" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"customFieldList" => "CustomFieldList",
	);
}

