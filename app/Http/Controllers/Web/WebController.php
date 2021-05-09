<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = "#f8f9fa";
        $background = "#1c3faa";
        $mobilbackground = "#fcb800";
        $mobilcolor = "#000";
        $categories = Category::all();
        $tag1 = "asdasd";

        return view('web.home.index', compact('color', 'background', 'mobilbackground', 'mobilcolor', 'categories' ) );
    }




}
