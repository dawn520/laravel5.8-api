<?php
/**
 * Created by PhpStorm.
 * User: xixi
 * Date: 2020/6/19
 * Time: 17:03
 */

namespace App\Http\Controllers\Api\V1;


class HomeController
{
    public function index(){
        echo captcha_img();
    }

}
