<?php

namespace Jeet\Rock\Controller\Adminhtml\Index;


class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        ehco "test23232323232";exit;
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
        echo "test";
        echo "123"; exit;
	}
}

?>