<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    public function test1(){
    	$good_info=[
    		'goods_id'=>12345,
    		'goods_name'=>'IPhonex',
    		'price'=>80000,
    		'add_time'=>12345131
    	];
    	$key='goods_12345';
    	redis::hmset($key,$goods_info);
    }

    public function list(){
        
    }

}

