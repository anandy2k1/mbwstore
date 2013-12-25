<?php
class Mdl_Magiclogo_Block_Adminhtml_Magiclogo extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_magiclogo';
    $this->_blockGroup = 'magiclogo';
    $this->_headerText = Mage::helper('magiclogo')->__('Brand Logo Manager');
    $this->_addButtonLabel = Mage::helper('magiclogo')->__('Add Brand Logo');
    parent::__construct();
  }
}