<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;

class ProductFacade extends Facade
{
    protected static function getFacadesAccessor()
    {
        return ProductService::class;
    }
}