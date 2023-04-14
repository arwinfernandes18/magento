<?php

namespace Embitel\Uimodule\Model\ResourceModel\Uimodule;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
	/**
	 *@var string
	 *@codingStandardsIgnoreStart
	 */
	 protected $_idFieldName='uimodule_id';
	
	 /**
	 *Collection initialisation
	 */
	 
	 protected function _construct()
	 {
	 	 //@codingStandardsIgnoreStart
		$this-> init(
			\Embitel\Uimodule\Model\Uimodule::class,
			\Embitel\Uimodule\Model\ResourceModel\Uimodule::class
		);
	}	
}
