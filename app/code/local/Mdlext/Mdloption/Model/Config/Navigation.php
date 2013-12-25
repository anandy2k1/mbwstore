<?php

class Mdlext_Mdloption_Model_Config_Navigation 
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Mega-menu')),
            array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('jQuery Superfish Menu')),
        );
    }
}
?>