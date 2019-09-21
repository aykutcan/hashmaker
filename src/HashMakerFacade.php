<?php

namespace HashMaker;

use Illuminate\Support\Facades\Facade;

class HashMaker extends Facade {
    protected static function getFacadeAccessor() {
        return 'HashMaker';
    }
}
