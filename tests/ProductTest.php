<?php

namespace Code;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    private $product;
    public function setUp(): void
    {
        $this->product = new Produto();
    }
    public function test_it_should_be_name_is_set()
    {
        $product =  $this->product;
        $product->setName('Teste 1');

        $this->assertEquals('Teste 1', $product->getName());
    }

    public function test_it_should_be_price_is_set()
    {
        $product =  $this->product;
        $product->setPrice(20);

        $this->assertEquals(20, $product->getPrice());
    }


    public function test_it_should_be_slug_is_set()
    {
        $product =  $this->product;
        $product->setSlug('teste-1');

        $this->assertEquals('teste-1', $product->getSlug());
    }
}