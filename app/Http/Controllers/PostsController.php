<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
        // Checker::allow($user, $post)

        // Checker => Get all the authorization
        //         => Get all validations
        //         => If you get any error throw response

        // Write Jobs and Events

        // Responser::throw($response)
        // Responser => Get an array on php and display a response
        //           => If you set a type of response it will configure
        //           =>
        return "method index from PostsController";
    }

    public function store()
    {
        return "method store from PostsController";
    }
}
