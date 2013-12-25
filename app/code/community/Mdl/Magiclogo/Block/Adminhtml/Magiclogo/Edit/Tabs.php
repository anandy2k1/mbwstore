<?php

class Mdl_Magiclogo_Block_Adminhtml_Magiclogo_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('magiclogo_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('magiclogo')->__('Brand Logo Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('magiclogo')->__('Brand Logo Information'),
          'title'     => Mage::helper('magiclogo')->__('Brand Logo Information'),
          'content'   => $this->getLayout()->createBlock('magiclogo/adminhtml_magiclogo_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}