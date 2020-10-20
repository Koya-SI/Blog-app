<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show(){
        $blog = new Blog();
        return $blog->show();
    }
}