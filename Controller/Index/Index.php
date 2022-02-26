<?php

namespace Jeet\Rock\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {

        echo "test"; exit;

        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}