<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MyTestController extends Controller
{
    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select('*');
            return DataTables::of($users)
                ->make(true);
        }

        return view('y-dataTables');
    }
}
