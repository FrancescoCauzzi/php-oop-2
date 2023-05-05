<?php


require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . "/../Traits/Discountable.php";

class Food extends Item
{
    use Discountable;

    protected $ingredients;

    function __construct(string $name, string $id, float $price, string $image, string $description, Category $category, string $ingredients)
    {

        // $this->name = $name;
        // $this->price = $price;

        parent::__construct($name, $id, $price, $image, $description, $category);

        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
