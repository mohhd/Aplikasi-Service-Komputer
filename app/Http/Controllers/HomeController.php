<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{
    public function dashboard()
    {
        $servisMasuk = Service::count();
        $servisSelesai = Service::where('status', 1)->count();
        $servisProses = Service::where('status', 0)->count();
        $servisBatal = Service::where('status', 2)->count();

        return view('home', compact('servisMasuk', 'servisSelesai', 'servisProses', 'servisBatal'));
    }
}
