<?php

namespace Codilar\QueueExample\Publisher;

use Magento\Framework\MessageQueue\PublisherInterface;

class ProductImport implements PublisherInterface
{

    const TOPIC_NAME = "productImport.topic";
    private PublisherInterface $publisher;

    public function __construct(
        PublisherInterface $publisher
    )
    {
        $this->publisher = $publisher;
    }

    public function publish($topicName, $data)
    {
         return $this->publisher->publish(self::TOPIC_NAME , json_encode($data));
    }
}
