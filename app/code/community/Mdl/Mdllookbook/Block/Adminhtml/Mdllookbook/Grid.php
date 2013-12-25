<?php

class Mdl_Mdllookbook_Block_Adminhtml_Mdllookbook_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('mdllookbookGrid');
      $this->setDefaultSort('mdllookbook_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('mdllookbook/mdllookbook')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('mdllookbook_id', array(
          'header'    => Mage::helper('mdllookbook')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'mdllookbook_id',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('mdllookbook')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));

	  
      $this->addColumn('url', array(
			'header'    => Mage::helper('mdllookbook')->__('Url'),
			'width'     => '150px',
			'index'     => 'url',
      ));
	  

      $this->addColumn('status', array(
          'header'    => Mage::helper('mdllookbook')->__('Status'),
          'align'     => 'left',
          'width'     => '80px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      ));
	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('mdllookbook')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('mdllookbook')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('mdllookbook')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('mdllookbook')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('mdllookbook_id');
        $this->getMassactionBlock()->setFormFieldName('mdllookbook');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('mdllookbook')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('mdllookbook')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('mdllookbook/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('mdllookbook')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('mdllookbook')->__('Status'),
                         'values' => $statuses
                     )
             )
        ));
        return $this;
    }

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}