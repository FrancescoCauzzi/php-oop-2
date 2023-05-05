<?php
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . "/../Traits/Discountable.php";

class Accessory extends Item
{
    use Discountable;

    protected $utility;

    function __construct(string $name, string $id, float $price, string $picture, string $description, Category $category, string $utility)
    {
        parent::__construct($name, $id, $price, $picture, $description, $category);

        $this->utility = $utility;
    }

    public function getAccessory()
    {
        return $this->utility;
    }
}
