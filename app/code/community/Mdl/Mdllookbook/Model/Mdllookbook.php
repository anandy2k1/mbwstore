<?php

class Mdl_Mdllookbook_Model_Mdllookbook extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('mdllookbook/mdllookbook');
    }
}