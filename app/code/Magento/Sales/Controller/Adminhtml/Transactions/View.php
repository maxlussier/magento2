<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Controller\Adminhtml\Transactions;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;

class View extends \Magento\Sales\Controller\Adminhtml\Transactions
{
    /**
     * View Transaction Details action
     *
     * @return Page
     */
    public function execute()
    {
        $txn = $this->_initTransaction();
        if (!$txn) {
            return;
        }
        /** @var Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magento_Sales::sales_transactions');
        $resultPage->getConfig()->getTitle()->prepend(__('Transactions'));
        $resultPage->getConfig()->getTitle()->prepend(sprintf("#%s", $txn->getTxnId()));

        return $resultPage;
    }
}
