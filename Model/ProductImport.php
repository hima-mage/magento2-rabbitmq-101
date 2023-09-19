<?php

namespace Codilar\QueueExample\Model;

use Codilar\QueueExample\Api\ProductImportInterface;
use Codilar\QueueExample\Api\ProductInterface;

class ProductImport implements  ProductImportInterface
{

    private \Codilar\QueueExample\Publisher\ProductImport $publisher;

    public function __construct(
        \Codilar\QueueExample\Publisher\ProductImport $publisher
    )
    {
        $this->publisher = $publisher;
    }

    public function update(ProductInterface $product)
    {
        $this->publisher->publish("productImport.topic" , [$product->getSku()]);
    }
}
