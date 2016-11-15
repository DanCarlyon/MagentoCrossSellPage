<?php
class Dc_Crosssells_Model_Observer
{
    public function controllerActionPredispatchCheckoutOnepageIndex(Varien_Event_Observer $observer)
    {
        Mage::app()->getResponse()->setRedirect(Mage::getBaseUrl() . 'before-you-checkout');
    }

}