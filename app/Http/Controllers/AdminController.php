<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function initialize()
    {

    }
    public function authenticate()
    {
        session(['token' => 'EPLSWQXAHEDHPQKYHUWEDXNIRQXRYLBQFURMHTVWQTSRSPBPYH']);
        return $this->connect($this->request);
    }

    public function branches()
    {
        session(['token' => 'EPLSWQXAHEDHPQKYHUWEDXNIRQXRYLBQFURMHTVWQTSRSPBPYH']);
        $api_connection = $this->connect($this->request);
        if ($api_connection == true) {
            $response = Http::withToken(base64_encode(session('token')))->get('https://webservices.vebra.com/export/360propertyapi/v11/branch');
            $xml = simplexml_load_string($response->body());
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            return $array['branch'];
        }
    }
    public function branch()
    {
        session(['token' => 'EPLSWQXAHEDHPQKYHUWEDXNIRQXRYLBQFURMHTVWQTSRSPBPYH']);
        $api_connection = $this->connect($this->request);
        if ($api_connection == true) {
            $response = Http::withToken(base64_encode(session('token')))->get('https://webservices.vebra.com/export/360propertyapi/v11/branch/40419');
            $xml = simplexml_load_string($response->body());
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            return $array['branch']['url'];
        }
    }
    public function properties()
    {
        session(['token' => 'EPLSWQXAHEDHPQKYHUWEDXNIRQXRYLBQFURMHTVWQTSRSPBPYH']);
        $api_connection = $this->connect($this->request);
        if ($api_connection == true) {
            $response = Http::withToken(base64_encode(session('token')))->get('https://webservices.vebra.com/export/360propertyapi/v11/branch/40419/property');
            $xml = simplexml_load_string($response->body());
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            return $array;
        }
    }
    public function property()
    {
        session(['token' => 'EPLSWQXAHEDHPQKYHUWEDXNIRQXRYLBQFURMHTVWQTSRSPBPYH']);
        $api_connection = $this->connect($this->request);
        if ($api_connection == true) {
            $response = Http::withToken(base64_encode(session('token')))->get('https://webservices.vebra.com/export/360propertyapi/v11/branch/40419/property/31519353');
            $xml = simplexml_load_string($response->body());
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            return $array;
        }
    }
}
