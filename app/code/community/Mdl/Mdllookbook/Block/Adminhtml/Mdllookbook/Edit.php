<?php

class Mdl_Mdllookbook_Block_Adminhtml_Mdllookbook_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'mdllookbook';
        $this->_controller = 'adminhtml_mdllookbook';
        
        $this->_updateButton('save', 'label', Mage::helper('mdllookbook')->__('Save Look-Book'));
        $this->_updateButton('delete', 'label', Mage::helper('mdllookbook')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('mdllookbook_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'mdllookbook_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'mdllookbook_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('mdllookbook_data') && Mage::registry('mdllookbook_data')->getId() ) {
            return Mage::helper('mdllookbook')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('mdllookbook_data')->getTitle()));
        } else {
            return Mage::helper('mdllookbook')->__('Add Look-Book');
        }
    }
}