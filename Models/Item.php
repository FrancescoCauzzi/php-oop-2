<?php
class Item
{
    public $itemName;
    protected $itemId;
    public $itemPrice;
    protected $itemQuantity;
    protected $itemSupplierId;
    public $itemImage;
    public $itemType;
    public $itemDescription;
    public $itemCategory;


    public function __construct(string $itemName, int $itemId, float $itemPrice, int $itemQuantity, int $itemSupplierId, string $itemImage, string $itemType, string $itemDescription, string $itemCategory)
    {
        $this->itemName = $itemName;
        $this->itemId = $itemId;
        $this->itemPrice = $itemPrice;
        $this->itemQuantity = $itemQuantity;
        $this->itemSupplierId = $itemSupplierId;
        $this->itemImage = $itemImage;
        $this->itemType = $itemType;
        $this->itemDescription = $itemDescription;
        $this->itemCategory = $itemCategory;
    }
}
