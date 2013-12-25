<?php

class Mdl_Magiclogo_Block_Adminhtml_Magiclogo_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('magiclogoGrid');
      $this->setDefaultSort('magiclogo_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('magiclogo/magiclogo')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('magiclogo_id', array(
          'header'    => Mage::helper('magiclogo')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'magiclogo_id',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('magiclogo')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));

	  
      $this->addColumn('url', array(
			'header'    => Mage::helper('magiclogo')->__('Url'),
			'width'     => '150px',
			'index'     => 'url',
      ));
	  
      
      $this->addColumn('status', array(
          'header'    => Mage::helper('magiclogo')->__('Status'),
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
                'header'    =>  Mage::helper('magiclogo')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('magiclogo')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('magiclogo')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('magiclogo')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('magiclogo_id');
        $this->getMassactionBlock()->setFormFieldName('magiclogo');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('magiclogo')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('magiclogo')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('magiclogo/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('magiclogo')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('magiclogo')->__('Status'),
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