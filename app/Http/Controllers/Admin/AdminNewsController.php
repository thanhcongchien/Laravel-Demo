<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->select('*');
        $news = $news->get();

        $pageName = 'Tên Trang - News';

        return view('/admin/news', compact('news', 'pageName'));
    }
}
