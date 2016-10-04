<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ApiManager\GetModels;
use App\ApiManager\Method;

class ApiManagerController extends Controller
{
    public function show($model)
    {

        $methods = Method::where('model', $model)->get();
        // Todo: PASS THIS TO A CUSTOM QUERY
        if ($methods->isEmpty()) {
            $methods = [
              'index',
              'show',
              'store',
              'udpate',
              'delete'
            ];
        }
        return view('admin.dashboard', compact('model', 'methods'));
    }
}
