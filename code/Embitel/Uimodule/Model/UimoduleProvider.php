<?php
namespace Embitel\Uimodule\Model;

use Magento\Framework\App\Request\DataPersistorInterface; 
use Magento\Ui\DataProvider\AbstractDataProvider; 
use Embitel\Uimodule\Model\ResourceModel\Uimodule\CollectionFactory;

/**
*Class UimoduleProvider
*
*Model
*/

class Uimodule extends AbstractDataProvider
{
	/**
	 *@var DataPersistorInterface
	 */
	 
	protected $dataPersistor;
	/**
	*@var array
	*/
		protected $loadedData;
	
	public function __construct(

		$name,
		$primaryFieldName,
		$requestFieldName,
		CollectionFactory $UimoduleCollectionFactory,
		array $meta =[],
		array $data =[]

	){
		$this->collection = $UimodulleCollectionFactory->create();
		parent:: __construct($name, $primaryFiledName, $requestFieldName, $meta, $data);
	} 
	public function getData()
	{
		$this->loadData = [];
		return $this->loadedData;
	}
}
	