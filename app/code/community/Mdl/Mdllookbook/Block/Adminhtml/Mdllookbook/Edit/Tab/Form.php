<?php
class Mdl_Mdllookbook_Block_Adminhtml_Mdllookbook_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('mdllookbook_form', array('legend'=>Mage::helper('mdllookbook')->__('Look-Book information')));
      $object = Mage::getModel('mdllookbook/mdllookbook')->load( $this->getRequest()->getParam('id') );

     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('mdllookbook')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('mdllookbook')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
            

      $fieldset->addField('url', 'text', array(
          'name'      => 'url',
          'label'     => Mage::helper('mdllookbook')->__('Url'),
          'title'     => Mage::helper('mdllookbook')->__('Url'),
          'required'  => false,
          'class'     => 'validate-url',
      ));

	  $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('mdllookbook')->__('Content'),
          'title'     => Mage::helper('mdllookbook')->__('Content'),
          'style'     => 'width:280px; height:100px;',
          'wysiwyg'   => false,
          'required'  => false,
      ));
	  	
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('mdllookbook')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('mdllookbook')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('mdllookbook')->__('Disabled'),
              ),
          ),
      ));
     
     
      if ( Mage::getSingleton('adminhtml/session')->getMdllookbookData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getMdllookbookData());
          Mage::getSingleton('adminhtml/session')->setMdllookbookData(null);
      } elseif ( Mage::registry('mdllookbook_data') ) {
          $form->setValues(Mage::registry('mdllookbook_data')->getData());
      }
      return parent::_prepareForm();
  }
}
