<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 7/30/16
 * Time: 11:31 AM
 */

namespace Home\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BaseController extends Controller
{
    const SUCCESS_STATUS = 1;
    const FAIL_STATUS = 2;
    const PARAM_ERROR_STATUS = 3;
    const LOAN_REJECT_STATUS = 4;

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function __construct()
    {
//        if(isset($_COOKIE['lang'])){
//            $lang = $_COOKIE['lang'];
//            App::setLocale($lang);
//        }
        /*if ($lang = session('lang')) {
            App::setLocale($lang);
        }

        if (Gate::denies('login')) {
            abort(403);
        }*/

    }

    public function sendResponse($statusCode, $message, $data = [])
    {
        $response = [
            'code' => (int)$statusCode,
            'msg' => $message,
            'data' => $data,
        ];
        echo $response = json_encode($response);
    }
}