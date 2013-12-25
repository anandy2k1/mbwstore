<?php

class Mdl_Mdllookbook_Model_Mysql4_Mdllookbook_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('mdllookbook/mdllookbook');
    }
}