<?php
class Item
{
    public $itemName;
    public $itemCategory;
    public $itemPrice;
    public $itemQuantity;
    public $itemSupplier;

    public function __construct($itemName, $itemCategory, $itemPrice, $itemQuantity, $itemSupplier)
    {
        $this->itemName = $itemName;
        $this->itemCategory = $itemCategory;
        $this->itemPrice = $itemPrice;
        $this->itemQuantity = $itemQuantity;
        $this->itemSupplier = $itemSupplier;
    }
}
