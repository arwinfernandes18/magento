<?php
namespace Embitel\Uimodule\Controller\Adminhtml\Uimodule;

use \Magento\Backend\App\Action;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\Registry;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Backend\Model\View\Result\ForwardFactory;

class index extends Action
{
    /**
     * Authorization level of a basic admin session
     * 
     * @see _isAllowed()
     */
     const ACTION_RESOURCE='Embitel_Uimodule::Uimodule';

    /**
     * Core Registry
     * @var Registry
     */
     protected $coreRegistry;
     
    /**
     * Result Page Factory
     * @var PageFactory
     */
   
     protected $resultPageFactory;
     
     /**
     * @var ForwardFactory
     */
   
     protected $resultresultFactory;
     /**
     *@param Registry $registry
     *@param PageFactory $resultPageFactory
     *@param ForwardFactory $resultForwardFactory
     *@param Context $context
     */
     
     public function _construct(
     
     Registry $registry,
     PageFactory $resultPageFactory,
     ForwardFactory $resultForwardFactory,
     Context $context)
     {
     $this->coreRegistry=$registry;
     $this->resultPageFactory=$resultPageFactory;
     $this->resultForwardFactory=$resultForwardFactory;
     parent::__construct($context);
     }
     /**
     *@return \magento\Framework\View\Result\Page
     */
     
     public function execute()
     {
        //die("dshgfsd");
     $resultPage = $this->resultPageFactory->create();
     $resultPage->addBreadcrumb(__("New Uimodule"), __("New Uimodule"));
     $resultPage->getConfig()->getTitle()->prepend(__("New Uimodule"));
return $resultPage;
     }
     }
     
     ?>
     
     
