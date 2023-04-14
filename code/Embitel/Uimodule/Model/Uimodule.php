<?php
namespace Embitel\Uimodule\Model;

use Magento\Framework\Model\AbstractModel; 

class Uimodule extends AbstractModel
{
	/**
	 *Initialise resource model
	 *@codingStandardsIgnoreStart
	 * @return void
	 */
	protected function _construct()
	{
		//@codingStandardsIgnoreStart
		$this->_init(Embitel\Uimodule\Model\ResourceModel\Uimodule::class);
	}
}

