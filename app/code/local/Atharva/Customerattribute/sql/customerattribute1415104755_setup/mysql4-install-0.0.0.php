<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("customer", "industry",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "Industry",
    "input"    => "select",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "0",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

$attribute1   = Mage::getSingleton("eav/config")->getAttribute("customer", "industry");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
$attribute1->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 800)
		;
$attribute1->save();
	
	
	

$installer->addAttribute("customer", "planted_location",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "Planted Location",
    "input"    => "select",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "0",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

$attribute2   = Mage::getSingleton("eav/config")->getAttribute("customer", "planted_location");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
$attribute2->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 900)
		;
$attribute2->save();
	
	
	
$installer->endSetup();
