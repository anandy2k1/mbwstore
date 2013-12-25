<?php

class Mdlext_Mdloption_Model_Config_Footerbox 
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Footer style 1')),
            array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('Footer style 2')),
			array('value' => '3', 'label'=>Mage::helper('adminhtml')->__('Footer style 3')),
        );
    }
}
?>