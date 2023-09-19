<?php

namespace Codilar\QueueExample\Api;

interface ProductImportInterface
{
    /**
     * @param ProductInterface $product[]
     * @return mixed
     */
    public function update(ProductInterface $product);
}
