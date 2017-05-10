<?php

namespace App\Http\Controllers;

use App\AddressType;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $shareAddressTypes;

    public function __construct()
    {
//        $this->middleware(function ($request, $next) {
//            $this->$shareAddressTypes = AddressType::with('id', 'name')->get();
//            view()->share('shareAddressTypes', $this->$shareAddressTypes);
//
//            return $next($request);
//        });
    }
}
