<?php

namespace Form\Empmodule\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\getTestPost;
use Magento\Customer\Model\GroupFactory;

class TestPost implements \Form\Empmodule\Api\Postapi
{
    protected $_group;

        public function __construct(
        GroupFactory $group)
        {
            $this->_group = $group;
        }
  
/**
 * set Data
 * 
 * @param string[] info
 * @return array
 * 
 */

public function setCustomerGroup($info){
    try{
        $stores = [
                'customer_group_code'=>$info['groupName'],
                'tax_class_id'=>3
        ];

        $group = $this->_group->create();
        $group->setData($stores);
        $group->save();

        $data_info=[
            'group_Id'=>"1",
            'group_Name'=>"abc"         
    ];

    return $data_info;

}   
    catch(\Throwable $th)
    {
        $th->getMessage();
    }
}
}

