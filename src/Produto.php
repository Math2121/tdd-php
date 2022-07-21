<?php

namespace Code;

class Produto
{
    private $name;
    private $price;
    private $slug;

    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getSlug()
    {
        return $this->slug;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
}