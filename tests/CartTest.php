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
    private $cart;
    private $product;

    //Executa antes de cada teste
    public function setUp(): void
    {

        $this->cart = new Cart();
        $this->product = new Produto();
    }
    // executa após o fim de cada teste
    public function tearDown(): void
    {
        unset($this->cart);
        unset($this->product);
    }

    // public function test_if_cart_class_exists()
    // {

    //     $checkClass = class_exists('\\Code\\Cart');

    //     $this->assertTrue($checkClass);
    // }

    // executa antes dos testes e deve retornar true ou false
    public function assertPreConditions(): void
    {

        $checkClass = class_exists('\\Code\\Cart');

        $this->assertTrue($checkClass);
    }

    public function assertPostConditions(): void
    {
    }

    public function test_it_should_be_able_add_product_in_cart()
    {
        $product =    $this->product;
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $cart =  $this->cart;
        $cart->addProduct($product);

        $this->assertIsArray($cart->getProducts());
        $this->assertInstanceOf('\\Code\\Produto', $cart->getProducts()[0]);
    }

    public function test_it_should_be_able_verify_correct_products_in_a_cart()
    {
        $product =    $this->product;
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $cart =  $this->cart;
        $cart->addProduct($product);

        $this->assertEquals('Teste 12', $cart->getProducts()[0]->getName());
        $this->assertEquals(20, $cart->getProducts()[0]->getPrice());
        $this->assertEquals('teste-12', $cart->getProducts()[0]->getSlug());
    }

    public function test_it_should_be_able_count_all_products_in_a_cart()
    {
        $product =    $this->product;
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');


        $cart =  $this->cart;
        $cart->addProduct($product);

        $this->assertEquals(1, $cart->countAllItems());
    }

    public function test_it_should_be_able_sum_all_items_and_verify_value()
    {
        $product =    $this->product;
        $product->setName('Teste 12');
        $product->setPrice(20);
        $product->setSlug('teste-12');

        $product2 =    $this->product;
        $product2->setName('Teste 12');
        $product2->setPrice(20);
        $product2->setSlug('teste-12');


        $cart =  $this->cart;
        $cart->addProduct($product);
        $cart->addProduct($product2);

        $this->assertEquals(40, $cart->sumAllPrices());
    }

    public function test_incomplete()
    {
        $this->markTestIncomplete('Teste não completo');
    }
/**
 * @requires  PHP == 5.3
 */
    public function test_specific_php_version()
    {
        // if (PHP_VERSION != 5.3) $this->markTestSkipped('Apenas para versão abaixo de 7');

        $this->assertTrue(true);
    }
}