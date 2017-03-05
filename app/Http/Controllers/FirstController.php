<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.03.2017
 * Time: 15:10
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function show($id){
//        echo __METHOD__;
        echo $id;
    }
}