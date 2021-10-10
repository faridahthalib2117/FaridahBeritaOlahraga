<?php

namespace App\Http\Controllers;
use App\Models\Tunggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class singleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single()
    {
        return view('single');
    }

}
