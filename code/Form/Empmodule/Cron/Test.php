<?php

namespace Form\Empmodule\Cron;

class Test
{

	public function execute()
	{
      $current_date=("Ymd_his");
      $file_name='customer'.$current_date.'.csv';
      $header_info=array('firstname','lastname','Email','telephone');
      $header_info=array_combine($header_info, $header_info);
	
      $data=[];

      $data[]=$header_info;

      $data[]=[

            'firstname' =>'Arwin',
            'lastname'  =>'Fernandes',
            'Email'     =>'arwin@gmail.com',
            'Telephone' =>'9876543210'
         ];

         $data[]=[

            'firstname' =>'Rancy',
            'lastname'  =>'Fernandes',
            'Email'     =>'rancy@gmail.com',
            'Telephone' =>'1234567890'
         ];
        $fp=fopen('/var/www/html/magento2/var/export/'.$file_name, 'w');

        foreach($data as $fields){
            fputcsv($fp, $fields);
        }
}
}
