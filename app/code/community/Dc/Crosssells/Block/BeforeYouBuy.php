<?php
class Dc_Crosssells_Block_BeforeYouBuy extends Mage_Core_Block_Template
{
    public function getCrossSellProductsFromCategory()
    {
        $category = Mage::getModel('catalog/category')->load(292);

        $products = Mage::getModel('catalog/product')->getCollection()
            ->addCategoryFilter($category)
            ->addAttributeToSelect('*');

        return $products;
    }
}