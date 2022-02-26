<?php

namespace Jeet\Rock\Controller\Adminhtml\Index;


class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        ehco "1234test2323232323conflict";exit;
        // adding code for conflict
        ehco "Jeet Hello";exit;
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
        echo "test";
        echo "123"; exit;
	}
}

?>