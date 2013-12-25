<?php
class Mdl_Mdllookbook_Block_Adminhtml_Mdllookbook extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_mdllookbook';
    $this->_blockGroup = 'mdllookbook';
    $this->_headerText = Mage::helper('mdllookbook')->__('Lookbook Manager');
    $this->_addButtonLabel = Mage::helper('mdllookbook')->__('Add Lookbook');
    parent::__construct();
  }
}