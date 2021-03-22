<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Spouse;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class HelloController extends Controller
{
    public function Index()
    {
    $variable = "hello from HelloController";

    return view("about");
    }
    public function Services()
    {
    $services = Employee::all();


    return view("services",compact('services'));
    }
}
