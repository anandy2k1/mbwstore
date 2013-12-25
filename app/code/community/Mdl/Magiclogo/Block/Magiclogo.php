<?php
class Mdl_Magiclogo_Block_Magiclogo extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getMagiclogo()     
     { 
        if (!$this->hasData('magiclogo')) {
            $this->setData('magiclogo', Mage::registry('magiclogo'));
        }
        return $this->getData('magiclogo');
        
    }
}