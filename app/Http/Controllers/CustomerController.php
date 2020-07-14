<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Yajra\Datatables\Datatables; 
// use DataTables;


class CustomerController extends Controller
{

    public function index(){

        return view('datatable');

    }

    public function getData(){

        $customers = Customers::get();

        return Datatables::of($customers)->make(true);

    }
}
