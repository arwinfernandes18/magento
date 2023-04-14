<?php
namespace Form\Empmodule\Model\ResourceModel;

class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
     /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('details_of_employee','entity_id');
    }
}
