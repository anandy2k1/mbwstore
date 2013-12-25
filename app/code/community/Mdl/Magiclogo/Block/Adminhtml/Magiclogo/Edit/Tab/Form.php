<?php
class Mdl_Magiclogo_Block_Adminhtml_Magiclogo_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('magiclogo_form', array('legend'=>Mage::helper('magiclogo')->__('Brand Logo information')));
      $object = Mage::getModel('magiclogo/magiclogo')->load( $this->getRequest()->getParam('id') );

     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('magiclogo')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('magiclogo')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
            

      $fieldset->addField('url', 'text', array(
          'name'      => 'url',
          'label'     => Mage::helper('magiclogo')->__('Url'),
          'title'     => Mage::helper('magiclogo')->__('Url'),
          'required'  => false,
          'class'     => 'validate-url',
      ));

		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('magiclogo')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('magiclogo')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('magiclogo')->__('Disabled'),
              ),
          ),
      ));
     
     
      if ( Mage::getSingleton('adminhtml/session')->getMagiclogoData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getMagiclogoData());
          Mage::getSingleton('adminhtml/session')->setMagiclogoData(null);
      } elseif ( Mage::registry('magiclogo_data') ) {
          $form->setValues(Mage::registry('magiclogo_data')->getData());
      }
      return parent::_prepareForm();
  }
}
