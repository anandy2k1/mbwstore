<?php

class Magicart_Ajax_Model_Mysql4_Ajax extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('ajax/ajax', 'ajax_id');
    }
}