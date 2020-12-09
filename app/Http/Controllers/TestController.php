<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request){

        return view('welcome');
    }

    public function datatables(){
        $query = DB::table('tests');

       

        return DataTables::queryBuilder($query)->toJson();
    }
}
