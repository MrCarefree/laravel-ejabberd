<?php
/**
 * Created by PhpStorm.
 * User: kibichii
 * Date: 7/3/2018
 * Time: 8:37 AM
 */

namespace Ejabberd\Providers;


use Ejabberd\Ejabberd;
use Illuminate\Support\ServiceProvider;

class EjabberdServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function provides()
    {
        return [
            Ejabberd::class
        ];
    }
}