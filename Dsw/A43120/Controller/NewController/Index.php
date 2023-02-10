<?php

namespace Dsw\A43120\Controller\NewController;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;


class Index implements ActionInterface
{
    /**
     * @param JsonFactory $jsonFactory
     */
    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        return $this->jsonFactory->create()
            ->setHeader('Content-Type', 'application/json')
            ->setData([
                'dowolna' => 'wartosc',
                'ten numer to klopoty' => '997'

            ]);
    }
}
