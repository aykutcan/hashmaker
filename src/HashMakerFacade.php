<?php

namespace HashMaker;

use Illuminate\Support\Facades\Facade;

class HashMakerFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'HashMaker';
    }
}
