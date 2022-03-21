<?php
/**
 * Copyright © Swarming Technology, LLC. Covered by the 3-clause BSD license.
 */
namespace Swarming\StoreCredit\Model\Config\Source;

class ExpirationRepeats implements \Magento\Framework\Option\ArrayInterface
{
    const ONCE = 'once';
    const EACH_DAY = 'each_day';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::ONCE, 'label' => __('Once')],
            ['value' => self::EACH_DAY, 'label' => __('Each day')]
        ];
    }
}
