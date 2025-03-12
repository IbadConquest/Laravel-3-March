<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
   function home()
{
    $names = ["Ali", "Hassan", "Hamid", "Usman"];
    $status = "active"; // Set a default status

    return view('home', ['data' => $names, 'status' => $status]);
}

    function about()
    {
        return view('about');
    }

    function status($status)
    {
        switch ($status) {
            case 'active':
                return "The user is active.";
            case 'inactive':
                return "The user is inactive.";
            case 'suspended':
                return "The user is suspended.";
            default:
                return "Unknown status.";
        }
    }
}

