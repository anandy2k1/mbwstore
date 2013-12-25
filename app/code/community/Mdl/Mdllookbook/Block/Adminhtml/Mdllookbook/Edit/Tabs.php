<?php

class Mdl_Mdllookbook_Block_Adminhtml_Mdllookbook_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('mdllookbook_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('mdllookbook')->__('Look-Book Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('mdllookbook')->__('Look-Book Information'),
          'title'     => Mage::helper('mdllookbook')->__('Look-Book Information'),
          'content'   => $this->getLayout()->createBlock('mdllookbook/adminhtml_mdllookbook_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}