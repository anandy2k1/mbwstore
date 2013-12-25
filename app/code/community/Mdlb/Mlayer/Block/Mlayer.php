<?php
class Mdlb_Mlayer_Block_Mlayer extends Mage_Core_Block_Template
{
	private $_display = '0';
	
	public function _prepareLayout()	{
		return parent::_prepareLayout();
	}
    
	public function getMlayer() { 
		if (!$this->hasData('mlayer')) {
			$this->setData('mlayer', Mage::registry('mlayer'));
		}
		return $this->getData('mlayer');			
	}
	
	public function setDisplay($display){
		$this->_display = $display;
	}
	
	public function getBannerCollection() {
		$collection = Mage::getModel('mlayer/mlayer')->getCollection()
			->addFieldToFilter('status',1)
			->addFieldToFilter('is_home',$this->_display);
		
		
		$current_store = Mage::app()->getStore()->getId();
		$banners = array();
		foreach ($collection as $banner) {
			$stores = explode(',',$banner->getStores());
			if (in_array(0,$stores) || in_array($current_store,$stores))
			//if ($banner->getStatus())
				$banners[] = $banner;
		}
		return $banners;
	}
	
	public function getDelayTime() {
		$delay = (int) Mage::getStoreConfig('mlayer/settings/time_delay');
		$delay = $delay * 1000;
		return $delay;
	}
	
	public function isShowDescription(){
		return (int)Mage::getStoreConfig('mlayer/settings/show_description');
	}
	public function getContentHeight(){
		return (int)Mage::getStoreConfig('mlayer/settings/select_banner_height');
	}
	public function getButtonText(){
		return Mage::getStoreConfig('mlayer/settings/select_btn_text');
	}
	public function getContentloder(){
		return (int)Mage::getStoreConfig('mlayer/settings/select_banner_loder');
	}
	public function getContentPage(){
		return (int)Mage::getStoreConfig('mlayer/settings/select_banner_pagi');
	}
	public function getContentHover(){
		return (int)Mage::getStoreConfig('mlayer/settings/select_banner_hover');
	}
    public function getBannerStatus(){
		return (int)Mage::getStoreConfig('mlayer/settings/bannerenable');
	}
	public function getEffectbanner(){
		return (int)Mage::getStoreConfig('mlayer/settings/banner-effect');
	}
	
	
}