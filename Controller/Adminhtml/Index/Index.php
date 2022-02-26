<?php

namespace Jeet\Rock\Controller\Adminhtml\Index;


class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        ehco "test232";exit;
        // adding code for conflict
        ehco "Jeet Hello";exit;
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
	}
}

?>