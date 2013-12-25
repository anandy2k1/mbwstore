<?php

class Mdlext_Mdloption_Model_Config_Procount
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('2 Products')),
            array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('3 Products')),
			array('value' => '3', 'label'=>Mage::helper('adminhtml')->__('4 Products')),
			array('value' => '4', 'label'=>Mage::helper('adminhtml')->__('6 Products')),
        );
    }
}
?>