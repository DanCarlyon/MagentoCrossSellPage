<?php
class Dc_Crosssells_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout(array('default'));
        
        $block = $this->getLayout()->getBlock('before.you.buy')->getBlockHtml('before.you.buy');
        $this->getLayout()->getBlock('content')->append($block);
        $this->_initLayoutMessages('core/session');
        $this->renderLayout();
    }

}