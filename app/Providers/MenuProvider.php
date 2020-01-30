<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        dd(Request::re);
        View::composer('elements.menu', function ($view) {
            $menuItems[] = ['name' => 'Home', 'link' => '/'];

            $dbCategory = DB::table('category')
                ->select('category_name', 'code')
                ->where('active', true)
                ->get();

            $categoryes = Array();

            foreach ($dbCategory as $category) {
                $categoryes[] = ['name' => $category->category_name, 'link' => '/catalog/' . $category->code];
            }

            $menuItems[] = ['name' => 'Catalog', 'link' => '#', 'sub' => $categoryes];
            $menuItems[] = ['name' => 'News', 'link' => '#'];
            $menuItems[] = ['name' => 'Sales', 'link' => '#', 'sub' => $categoryes];
            $view->with(['menuItems' => $menuItems]);
        });
    }
}
