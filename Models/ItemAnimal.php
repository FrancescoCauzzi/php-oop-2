<?php

class ItemAnimal extends Item
{
    public $itemCategoryIcon;
    public function __construct($itemName, $itemId, $itemPrice, $itemQuantity, $itemSupplierId, $itemImage, $itemType, $itemDescription, $itemCategory, string $itemCategoryIcon)
    {
        parent::__construct($itemName, $itemId, $itemPrice, $itemQuantity, $itemSupplierId, $itemImage, $itemType, $itemDescription, $itemCategory);
        $this->itemCategoryIcon = $itemCategoryIcon;
    }
    public static function printCard($item)
    {


        echo "<div class='card __card' style='width: 18rem;'>";
        echo "     <img src='" . $item->itemImage . "' class='card-img-top' alt='...'>";
        echo  "<div class='card-body'>";
        echo   "<h5 class='card-title'>" . $item->itemName . "</h5>";
        echo        "<p class='card-text'>" . $item->itemDescription . "</p>";
        echo "<p><span>" . $item->itemCategoryIcon . " </span><span><strong>" . $item->itemPrice . " €</strong></span></p>";
        echo "<p><span><i>" . $item->itemType . "</i></span>";



        echo        "</div>";
        echo      "</div>";
    }
}
