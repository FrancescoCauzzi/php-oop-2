<?php
trait Discountable
{
    protected $discount;

    public function setDiscount(int $discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
