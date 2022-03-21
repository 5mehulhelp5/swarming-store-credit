<?php
/**
 * Copyright © Swarming Technology, LLC. Covered by the 3-clause BSD license.
 */
namespace Swarming\StoreCredit\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb as ResourceModelAbstractDb;
use Swarming\StoreCredit\Api\Data\TransactionInterface;

class Transaction extends ResourceModelAbstractDb
{
    const TABLE_NAME = 'swarming_credit_transaction';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, TransactionInterface::TRANSACTION_ID);
    }
}
