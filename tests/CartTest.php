<?php

namespace Code;

use PHPUnit\Framework\TestCase;

/**
 * * Carrinho de compras
 * * Visualiza produtos
 * * Total de produtos
 */
class CartTest extends TestCase
{

    public function test_if_cart_class_exists()
    {

        $checkClass = class_exists('\\Code\\Cart');

        $this->assertTrue($checkClass);
    }

    public function test_it_should_be_able_add_product_in_cart()
    {
        $product = new Produto();
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $cart = new Cart();
        $cart->addProduct($product);

        $this->assertIsArray($cart->getProducts());
        $this->assertInstanceOf('\\Code\\Produto', $cart->getProducts()[0]);
    }

    public function test_it_should_be_able_verify_correct_products_in_a_cart()
    {
        $product = new Produto();
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $cart = new Cart();
        $cart->addProduct($product);
        
        $this->assertEquals('Teste 12', $cart->getProducts()[0]->getName());
        $this->assertEquals(20, $cart->getProducts()[0]->getPrice());
        $this->assertEquals('teste-12', $cart->getProducts()[0]->getSlug());
    }

    public function test_it_should_be_able_count_all_products_in_a_cart(){
        $product = new Produto();
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');


        $cart = new Cart();
        $cart->addProduct($product);
        
        $this->assertEquals(1, $cart->countAllItems());
    }

    public function test_it_should_be_able_sum_all_items_and_verify_value(){
        $product = new Produto();
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $product2 = new Produto();
        $product2->setName('Teste 12');
        $product2->setPrice(20);
        $product2->setSlug('teste-12');


        $cart = new Cart();
        $cart->addProduct($product);
        $cart->addProduct($product2);
        
        $this->assertEquals(40, $cart->sumAllPrices());
    }
}