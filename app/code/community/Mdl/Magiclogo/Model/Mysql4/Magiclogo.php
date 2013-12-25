<?php
class Mdl_Magiclogo_Model_Mysql4_Magiclogo extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        $this->_init('magiclogo/magiclogo', 'magiclogo_id');
    }
}