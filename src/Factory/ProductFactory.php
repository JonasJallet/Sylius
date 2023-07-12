<?php

namespace App\Factory;

use DateTime;
use Sylius\Component\Product\Factory\ProductFactoryInterface as BaseProductFactoryInterface;
use Sylius\Component\Product\Model\ProductInterface;

class ProductFactory implements ProductFactoryInterface
{

    /** @var BaseProductFactoryInterface */
    private BaseProductFactoryInterface $baseFactory;
    public function __construct(BaseProductFactoryInterface $baseFactory)
    {
        $this->baseFactory = $baseFactory;
    }

    public function createNew()
    {
        return $this->baseFactory->createNew();
    }

    public function createTShirt(): ProductInterface
    {
        $product = $this->createWithVariant();
        $product->setCode('T_SHIRT_'.(new DateTime())->format('d_m_Y_H_i_s'));
        $product->setName('T-Shirt *');

        return $product;
    }

    public function createWithVariant(): ProductInterface
    {
        return $this->baseFactory->createWithVariant();
    }
}
