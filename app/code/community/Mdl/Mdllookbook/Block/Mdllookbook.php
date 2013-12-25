<?php
class Mdl_Mdllookbook_Block_Mdllookbook extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getMdllookbook()     
     { 
        if (!$this->hasData('mdllookbook')) {
            $this->setData('mdllookbook', Mage::registry('mdllookbook'));
        }
        return $this->getData('mdllookbook');
        
    }
}