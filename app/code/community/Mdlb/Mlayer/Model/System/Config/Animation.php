<?php

class Mdlb_Mlayer_Model_System_Config_Animation
{
    public function toOptionArray()
    {
        return array(
            array(
                  'value'     => '1',
                  'label'     => Mage::helper('adminhtml')->__('random'),
              ),

              array(
                  'value'     => '2',
                  'label'     => Mage::helper('adminhtml')->__('simpleFade'),
              ),
			  array(
                  'value'     => '3',
                  'label'     => Mage::helper('adminhtml')->__('curtainTopLeft'),
              ),
			   array(
                  'value'     => '4',
                  'label'     => Mage::helper('adminhtml')->__('curtainTopRight'),
              ),
			   array(
                  'value'     => '5',
                  'label'     => Mage::helper('adminhtml')->__('curtainBottomLeft'),
              ),
			   array(
                  'value'     => '6',
                  'label'     => Mage::helper('adminhtml')->__('curtainBottomRight'),
              ),
			   array(
                  'value'     => '7',
                  'label'     => Mage::helper('adminhtml')->__('curtainSliceLeft'),
              ),
			   array(
                  'value'     => '8',
                  'label'     => Mage::helper('adminhtml')->__('curtainSliceRight'),
              ),
			   array(
                  'value'     => '9',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainTopLeft'),
              ),
			   array(
                  'value'     => '10',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainTopRight'),
              ),
			   array(
                  'value'     => '11',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainBottomLeft'),
              ),
			   array(
                  'value'     => '12',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainBottomRight'),
              ),
			   array(
                  'value'     => '13',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainSliceBottom'),
              ),
			   array(
                  'value'     => '14',
                  'label'     => Mage::helper('adminhtml')->__('blindCurtainSliceTop'),
              ),
			   array(
                  'value'     => '15',
                  'label'     => Mage::helper('adminhtml')->__('stampede'),
              ),
			   array(
                  'value'     => '16',
                  'label'     => Mage::helper('adminhtml')->__('mosaic'),
              ),
			   array(
                  'value'     => '17',
                  'label'     => Mage::helper('adminhtml')->__('mosaicReverse'),
              ),
			   array(
                  'value'     => '18',
                  'label'     => Mage::helper('adminhtml')->__('mosaicRandom'),
              ),
			   array(
                  'value'     => '19',
                  'label'     => Mage::helper('adminhtml')->__('mosaicSpiral'),
              ),
			   array(
                  'value'     => '20',
                  'label'     => Mage::helper('adminhtml')->__('mosaicSpiralReverse'),
              ),
			   array(
                  'value'     => '21',
                  'label'     => Mage::helper('adminhtml')->__('topLeftBottomRight'),
              ),
			   array(
                  'value'     => '22',
                  'label'     => Mage::helper('adminhtml')->__('topLeftBottomRight'),
              ),
			   array(
                  'value'     => '23',
                  'label'     => Mage::helper('adminhtml')->__('bottomRightTopLeft'),
              ),
			   array(
                  'value'     => '24',
                  'label'     => Mage::helper('adminhtml')->__('bottomLeftTopRight'),
              ),
			   array(
                  'value'     => '25',
                  'label'     => Mage::helper('adminhtml')->__('bottomLeftTopRight'),
              ),
        );
    }
}