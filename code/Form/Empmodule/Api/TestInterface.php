<?php

namespace Form\Empmodule\Api;

interface TestInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return Form\Empmodule\Api\Data\TestInterface
     */
    public function getProfile();  
    
}