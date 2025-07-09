<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $services_cuisine = Service::where('categorie_id', operator: 1)
            // ->whereHas('color', function($query) {
            //     $query->groupBy('cat');
            // })
            ->get();
        if ($services_cuisine) {
            $arr = [];
            foreach ($services_cuisine as $service) {
                if ($service->color) {
                    $cat = $service->color->cat;
                    if (!isset($arr[$cat])) {
                        $arr[$cat] = [];
                    }
                    $arr[$cat][] = $service;
                }
            }
        }

         $services_inter = Service::where('categorie_id', operator: 2) 
            ->get();
        // dd($arr);
        return view('index', [
            'services_cuisine' => $arr,
            'services_inter' => $services_inter,
        ]);
    }
}
