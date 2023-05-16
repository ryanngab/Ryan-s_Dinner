<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.admin.index');
    }

    public function orderan()
    {
        $orderan = Transaction::latest()->paginate(5);

        return view('dashboard.admin.orderan', compact('orderan'));
    }
}
