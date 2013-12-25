<?php
class Mdl_Mdllookbook_Model_Mysql4_Mdllookbook extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('mdllookbook/mdllookbook', 'mdllookbook_id');
    }
}