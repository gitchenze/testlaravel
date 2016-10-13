<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class IndexController extends Controller{
    public function index() {
//        echo config('app.name');
        echo config('testconfig.name');
        echo 'no git push';
//        echo date('Y-m-d H:i:s');
    }
}