<?php 

namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Store implements ResolverInterface{

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $store =[
            [
            'firstname' => 'Arwin',
            'lastname'  => 'Fer',
            'email'     => 'Arwin@embitel.com',
            'telephone'    => '1234567890',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],
        [
            'firstname' => 'Arwin',
            'lastname'  => 'Fer',
            'email'     => 'Arwin@embitel.com',
            'telephone'    => '1234567890',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],
        [
            'firstname' => 'Arwin',
            'lastname'  => 'Fer',
            'email'     => 'Arwin@embitel.com',
            'telephone'    => '1234567890',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],
    ];

    return [
        'total_count' => count($store),
        'items' => $store
    ];
     
    
    }
    }
?>