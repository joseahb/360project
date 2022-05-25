<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->connect($this->request);
    }

    public function branches()
    {
        $this->connect($this->request);
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

        if (!empty($_SESSION['token'])) {
            $file = "test.xml";
            $fh = fopen($file, "w");
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$_SESSION['token']));
            curl_setopt($ch, CURLOPT_FILE, $fh);
            curl_exec($ch);
            $info = curl_getinfo($ch);
            if ($info['http_code'] == '401') {
                $this->getToken($url);
                echo 'Token Failed - $this->getToken() has been run!<br />';
            } elseif ($info['http_code'] == '200') {
                echo 'Token Worked - Success';
            }
            curl_close($ch);
            fclose($fh);
        } else {
            $this->getToken($url);
        }
    }
}
