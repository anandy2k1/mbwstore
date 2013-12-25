<?php

class Mdlext_Mdloption_Model_Config_Headerbox 
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Header style 1')),
            array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('Header style 2')),
			array('value' => '3', 'label'=>Mage::helper('adminhtml')->__('Header style 3')),
        );
    }
}
?>