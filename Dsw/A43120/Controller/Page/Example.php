<?php

namespace Dsw\A43120\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Example extends Action implements HttpGetActionInterface
{

    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

    }
}
