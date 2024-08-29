<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
  "NAME" => GetMessage("Name"),
  "DESCRIPTION" => GetMessage("Description"),
  "PATH" => array(
    "ID" => "test",
    "NAME" => GetMessage("Author"),
    "CHILD" => array(
      "ID" => "curdate",
      "NAME" => GetMessage("Child")
    )
  ),
);
