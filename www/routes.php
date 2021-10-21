<?php

return [

    [['GET'], '/', App\Website\Index::class],
    [['GET'], '/specification', App\Website\Specification::class],
    [['GET'], '/faq', App\Website\Faq::class],
    [['GET', 'POST'], '/generator', App\Website\Generator::class],
    [['GET', 'POST'], '/migration', App\Website\Migration::class],

];
