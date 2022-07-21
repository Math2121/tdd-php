<?php

namespace Code;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test_it_should_be_name_is_set()
    {
        $product = new Produto();

        $product->setName('Teste 1');
        
        $this->assertEquals('Teste 1',$product->getName());

        
    }

    public function test_it_should_be_price_is_set()
    {
        $product = new Produto();

        $product->setPrice(20);
        
        $this->assertEquals(20,$product->getPrice());

        
    }


    public function test_it_should_be_slug_is_set()
    {
        $product = new Produto();

        $product->setSlug('teste-1');
        
        $this->assertEquals('teste-1',$product->getSlug());

        
    }
}