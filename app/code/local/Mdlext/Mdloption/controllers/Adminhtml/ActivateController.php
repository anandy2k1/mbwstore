<?php
class Mdlext_Mdloption_Adminhtml_ActivateController extends Mage_Adminhtml_Controller_Action
{

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')
            ->isAllowed('mdlext/mdlp/activate');
    }

    protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mdlext/mdlp/activate')
            ->_addBreadcrumb(Mage::helper('mdloption')->__('Activate Theme'),
                Mage::helper('mdloption')->__('Activate Theme'));

        return $this;
    }

	public function indexAction()
	    {
	        $this->_initAction();
	        $this->_title($this->__('Mdlext'))
	            ->_title($this->__('Mdlp'))
	            ->_title($this->__('Activate Theme'));

	        $this->_addContent($this->getLayout()->createBlock('mdloption/adminhtml_activate_edit'));
	        $block = $this->getLayout()->createBlock('core/text', 'activate-desc')
	                ->setText('<big><b>Activate will update following settings:</b></big><p> Go to the following path:</p><p>System > Configuration > Design > and set current package name default to le-santana. After click on web tab and set default pages name Le-Santana - Home Page.</p>
	                       
	                        ');
	        $this->_addLeft($block);

	        $this->renderLayout();
	    }

	public function activateAction()
    {
        $stores = $this->getRequest()->getParam('stores', array(0));
        $setup_cms = $this->getRequest()->getParam('setup_cms', 0);
        
        try {

	        if ($setup_cms) {
                Mage::getModel('mdloption/settings')->setupCms();
	        }

		    Mage::getSingleton('adminhtml/session')->addSuccess(
                Mage::helper('mdloption')->__('Theme has been activated.<br/>
                Please clear cache (System > Cache management) if you do not see changes in storefront.<br/>
                To update currencies rates please go to System -> Manage Currency Rates. Press import.
                Wait for message "All rates were fetched..." and press save.<br/>
                <b>IMPORTANT !!!. Log out from magento admin panel ( if you logged in ). This step is required to reset magento
                access control cache and avoid 404 message on theme options page</b>
                '));
        }
        catch (Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('mdloption')->__('An error occurred while activating theme. '.$e->getMessage()));
        }

        $this->getResponse()->setRedirect($this->getUrl("*/*/"));
    }


}