<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.03.2017
 * Time: 15:10
 */

namespace app\Http\Controllers;

//use app\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function show(){
        echo __METHOD__;
    }
}