<?php
class Mdlb_Mlayer_Model_System_Config_BannerContentPos
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label'=>Mage::helper('adminhtml')->__('Left')),
			array('value' => '2', 'label'=>Mage::helper('adminhtml')->__('Right')),
			array('value' => '3', 'label'=>Mage::helper('adminhtml')->__('Center')),
        );
    }
}