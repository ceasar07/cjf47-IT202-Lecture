<?php
ob_start();
include("category.php");
include("item.php");

$totalCategories = Category::getTotalCategories();
$totalItems = Item::getTotalItems();
$listpricetotal = Item::getTotalListPrice();

$doc = new DOMDocument("1.0");

$inventoryElement = $doc->createElement("inventory");
$inventoryElement = $doc->appendChild($inventoryElement);

$categoriesElement = $doc->createElement("categories", $totalCategories);
$inventoryElement->appendChild($categoriesElement);

$itemsElement = $doc->createElement("items", $totalItems);
$inventoryElement->appendChild($itemsElement);

$listpricetotalElement = $doc->createElement("listpricetotal", $listpricetotal);
$inventoryElement->appendChild($listpricetotalElement);

header("Content-type: application/xml");
ob_end_clean();
echo $doc->saveXML();
?>