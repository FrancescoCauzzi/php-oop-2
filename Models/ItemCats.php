<?php
class ItemCats extends Item
{

    public $itemCategoryIcon;
    public function __construct($itemName, $itemId, $itemPrice, $itemQuantity, $itemSupplierId, $itemImage, $itemType, $itemDescription, $itemCategory, string $itemCategoryIcon)
    {
        parent::__construct($itemName, $itemId, $itemPrice, $itemQuantity, $itemSupplierId, $itemImage, $itemType, $itemDescription, $itemCategory);
        $this->itemCategoryIcon = $itemCategoryIcon;
    }
}
