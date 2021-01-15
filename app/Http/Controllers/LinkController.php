<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Auth;

class LinkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $links = Auth::user()->links()->get();

        return view('links.index', [
            'links' => $links
        ]);
    }

    public function create()
    {
        return view('links.create');
    }
}
