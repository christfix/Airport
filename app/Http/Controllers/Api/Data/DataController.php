<?php
namespace App\Http\Controllers\Api;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: jiangminghui
 * Date: 2018/12/3
 * Time: 下午7:39
 */
class DataController extends BaseController
{
    public static function status(Request $request){
        return view('api.welcome');
    }
}