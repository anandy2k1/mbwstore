<?php

class Mdlext_Mdloption_Model_Config_Upsellsettings 
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Upsell products only')),
            array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('Static block if Upsell products are not available')),
			array('value' => '3', 'label'=>Mage::helper('adminhtml')->__('Upsell products and Static block both')),
        );
    }
}
?>