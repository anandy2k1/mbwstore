<?php

class Mdlb_Mlayer_Model_System_Config_Contentloder
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Bar')),
			array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('Pie')),
        );
    }
}