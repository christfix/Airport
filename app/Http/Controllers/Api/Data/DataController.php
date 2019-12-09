<?php
/**
 * Created by PhpStorm.
 * User: jiangminghui
 * Date: 2018/12/3
 * Time: 下午7:39
 */
namespace App\Http\Controllers\Api\Data;
use App\Http\Controllers\Controller;
use App\Http\Services\Api\DataServices;
use App\User;
class DataController extends Controller
{
    public static function status(){
        $data['time'] = DataServices::returnData();
        $user = User::find(2145);
        $data['id'] = $user->id;
        return view('api.welcome' , $data);
    }
}