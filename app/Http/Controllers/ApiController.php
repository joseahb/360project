<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    private $username = "360property";
    private $password = "2dO4jK4wN2mD1vJ";
    private $datafeedID = "360propertyapi";
    private $request = "http://webservices.vebra.com/export/360propertyapi/v11/branch";

    public function __construct()
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
            return $array['branch']['url'];
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

    public function getToken($url)
    {
        $file = "headers.txt";
        $fh = fopen($file, "w");
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$this->username:$this->password");
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FILE, $fh);
        curl_exec($ch);
        curl_close($ch);
        fclose($fh);
        $headers = file('headers.txt', FILE_SKIP_EMPTY_LINES);
        dd($headers);
        foreach ($headers as $headerLine) {
            $line = explode(':', $headerLine);
            $header = $line[0];
            $value = trim($line[1]);
            if ($header == "Token") {
                $tokenStart = time();
                $tokenExpire = $tokenStart + 60*60;
                $_SESSION['token'] = base64_encode($value);
                $file = "tokens.txt";
                $fh = fopen($file, "a+");
                $newLine = "'".$_SESSION['token']."','".date('d/m/Y H:i:s', $tokenStart)."','".date('d/m/Y H:i:s', $tokenExpire)."'"."\n";
                fwrite($fh, $newLine);
                fclose($fh);
            }
        }

        if (!empty($_SESSION['token'])) {
            connect($url);
        } else {
            echo '<br />There is still an active Token, you must wait for this token to expire before a new one can be requested!<br />';
        }
    }

    public function connect($url)
    {
        if (!empty(session('token'))) {
            $response = Http::withToken(base64_encode(session('token')))->get($url);
            if ($response->failed()) {
                $this->getToken($url);
                return 'Token Failed - $this->getToken() has been run!<br />';
            } elseif ($response->successful()) {
                return true;
            }
        } else {
            $this->getToken($url);
        }
    }
}
