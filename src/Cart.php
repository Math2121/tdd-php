<?php

namespace Code;

class Cart
{
    private array $items = [];

    public function addProduct(object $product, Log $log = null)
    {
        $this->items[] = $product;
        if (!is_null($log))
            $log->log('Add Product');
    }
    public function getProducts()
    {
        return $this->items;
    }

    public function countAllItems()
    {
        return count($this->items);
    }

    public function sumAllPrices()
    {
        $current = 0;

        foreach ($this->items as $item) {
            $current += $item->getPrice();
        }

        return $current;
    }
}