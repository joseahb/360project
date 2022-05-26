<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public $username;
    public $password;
    public $datafeedId;
    public $url;

    public function __construct()
    {
        $this->username = env('ALTO_USERNAME');
        $this->password = env('ALTO_PASSWORD');
        $this->datafeedId = env('ALTO_DATAFEEDID');
        $this->url = "http://webservices.vebra.com/export/".$this->datafeedId."/v11/branch";
    }
    public function authenticate()
    {
        $this->connect($this->url);
    }
    //Function to authenticate self to API and return/store the Token
    public function getToken($url) {
        //Overwiting the response headers from each attempt in this file (for information only)
        $file = "headers.txt";
        $fh = fopen($file, "w");

        //Start curl session
        $ch = curl_init($url);
        //Define Basic HTTP Authentication method
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        //Provide Username and Password Details
        curl_setopt($ch, CURLOPT_USERPWD, "$this->username:$this->password");
        //Show headers in returned data but not body as we are only using this curl session to aquire and store the token
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        //write the output (returned headers) to file
        curl_setopt($ch, CURLOPT_FILE, $fh);
        //execute curl session
        curl_exec($ch);
        // close curl session
        curl_close($ch);
        //close headers.txt file
        fclose($fh);

        //read each line of the returned headers back into an array
        $headers = file('headers.txt', FILE_SKIP_EMPTY_LINES);
        dd($headers);
        //for each line of the array explode the line by ':' (Seperating the header name from its value)
        foreach ($headers as $headerLine) {

            $line = explode(':', $headerLine);
            $header = $line[0];
            $value = trim($line[1]);

            //If the request is successful and we are returned a token
            if($header == "Token") {
                    //save token start and expire time (roughly)
                    $tokenStart = time();
                    $tokenExpire = $tokenStart + 60*60;
                    //save the token in a session variable (base 64 encoded)
                    $_SESSION['token'] = base64_encode($value);

                    //For now write this new token, its start and expiry datetime into a .txt (appending not overwriting - this is for reference in case you loose your session data)
                    $file = "tokens.txt";
                    $fh = fopen($file, "a+");
                    //write the line in
                    $newLine = "'".$_SESSION['token']."','".date('d/m/Y H:i:s', $tokenStart)."','".date('d/m/Y H:i:s', $tokenExpire)."'"."\n";
                    fwrite($fh, $newLine);
                    //Close file
                    fclose($fh);
                }

        }

        //If we have been given a token request XML from the API authenticating using the token
        if (!empty($_SESSION['token'])) {
            connect($url);
        } else {
            //If we have not been given a new token its because we already have a live token which has not expired yet (check the tokens.txt file)
            echo '<br />There is still an active Token, you must wait for this token to expire before a new one can be requested!<br />';
        }
    }

    //Function to connect to the API authenticating ourself with the token we have been given
    public function connect($url) {

        //If token is not set skip to else condition to request a new token
        if(!empty($_SESSION['token'])) {

            //Set a new file name and create a new file handle for our returned XML
            $file = "test.xml";
            $fh = fopen($file, "w");

            //Initiate a new curl session
            $ch = curl_init($url);
            //Don't require header this time as curl_getinfo will tell us if we get HTTP 200 or 401
            curl_setopt($ch, CURLOPT_HEADER, 0);
            //Provide Token in header
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$_SESSION['token']));
            //Write returned XML to file
            curl_setopt($ch, CURLOPT_FILE, $fh);
            //Execute the curl session
            curl_exec($ch);

            //Store the curl session info/returned headers into the $info array
            $info = curl_getinfo($ch);

            //Check if we have been authorised or not
            if($info['http_code'] == '401') {
                $this->getToken($url);
                echo 'Token Failed - getToken() has been run!<br />';
            } elseif ($info['http_code'] == '200') {
                echo 'Token Worked - Success';
            }

            //Close the curl session
            curl_close($ch);
            //Close the open file handle
            fclose($fh);

        } else {

            //Run the getToken function above if we are not authenticated
            $this->getToken($url);

        }

    }
}
