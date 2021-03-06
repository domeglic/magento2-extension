<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Wizard\InstallationEbay;

use Ess\M2ePro\Controller\Adminhtml\Wizard\InstallationEbay;

/**
 * Class \Ess\M2ePro\Controller\Adminhtml\Wizard\InstallationEbay\ListingSynchronization
 */
class ListingSynchronization extends InstallationEbay
{
    public function execute()
    {
        return $this->_redirect('*/ebay_listing_create', ['step' => 4, 'wizard' => true]);
    }
}
