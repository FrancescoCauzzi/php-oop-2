<?php
require_once __DIR__ . "/Category.php";
class Item
{
    protected $name;
    protected $id;
    protected $price;
    protected $image;
    protected $description;
    protected $category;


    public function __construct(string $name, int $id, float $price, string $image, string $description, Category $category)
    {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
        $this->category = $category;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
