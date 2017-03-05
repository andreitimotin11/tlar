<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 05.03.2017
 * Time: 15:10
 */

namespace app\Http\Controllers;

use app\Http\Controllers\Controller;

class FirstController
{
    public function show($id){
//        echo __METHOD__;
        echo $id;
    }
}