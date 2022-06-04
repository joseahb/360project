<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyFiles;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function marketing()
    {
        return view('marketing');
    }
    public function register()
    {
        return view('register');
    }
    public function contact()
    {
        return view('contact');
    }
    public function disclaimer()
    {
        return view('disclaimer');
    }
    public function previous()
    {
        return view('previous');
    }
    public function ebooks()
    {
        return view('ebooks');
    }
    public function new_developments()
    {
        $properties = DB::table('properties')
        ->join('property_details', 'properties.prop_id', '=', 'property_details.prop_id')
        ->join('property_addresses', 'properties.prop_id', '=', 'property_addresses.pro_id')
        ->get();
        foreach ($properties as $property ) {
            $file = PropertyFiles::where('prop_id','=',$property->prop_id)->first();
            $property->file = $file;
        }
        return view('recent-developments',['properties' => $properties]);
    }

    public function all_sites()
    {
        return view('all-sites');
    }
}
