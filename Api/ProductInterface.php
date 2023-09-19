<?php

namespace Codilar\QueueExample\Api;

interface ProductInterface
{
    /**
     * @return string
     */
    public function getSku();

    /**
     * @param $sku
     * @return $this
     */
    public function setSku($sku);

}
