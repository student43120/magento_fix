<?php
namespace Dsw\A43120\Block;

use Dsw\A43120\Model\Main;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class Index extends Template
{
    /**
     * @var Main
     */
    protected Main $main;

    public function __construct(Context $context, Main $main, array $data = [])
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }
    public function getMain(): Main
    {
        return $this->main;
    }

}
