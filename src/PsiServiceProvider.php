<?php
/**
 * Created by mamadou.
 * User: mamadou
 * Date: 9/10/2016
 * Time: 12:27 AM
 */

namespace Sulsira\Psi;

use Illuminate\Support\ServiceProvider;

class PsiServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('psi', function($app){
          return new Psi;
       });
    }


    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }
}