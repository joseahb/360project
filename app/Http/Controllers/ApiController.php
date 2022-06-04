<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Property;
use App\Models\BranchDetail;
use Illuminate\Http\Request;
use App\Models\PropertyFiles;
use App\Models\PropertyDetail;
use App\Models\PropertyAddresses;
use App\Models\PropertyStreetView;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApiController extends Controller
{
    private $username;
    private $password;
    private $datafeedID;
    private $url;
    private $token ;

    public function __construct()
    {
        Cache::put('token', 'WQEUGKHDLUDTGASYPPQLWAQUBNFCJXETBRCNCDXLXGHNNDBYMF', $seconds = 3600);
        $this->username = env('ALTO_USERNAME');
        $this->password = env('ALTO_PASSWORD');
        $this->datafeedID = env('ALTO_DATAFEEDID');
        $this->url = env('ALTO_URL').$this->datafeedID.'/'.env('ALTO_API_VERSION').'/branch';
        $this->token =base64_encode(Cache::get('token', ''));
        $this->authenticate();
    }

    public function initialize()
    {
        $this->branches();
        $this->branch();
        $this->properties();
        $this->property();
    }
    public function branches()
    {
        $response = $this->apiRequests($this->url);
        $array = $this->xmlToArray($response->body());

        $branch_exists = Branch::where('branchid', '=', $array['branch']['branchid'])->first();

        if ($branch_exists != null) {
            return 'done';
        }

        $branch = new Branch();
        $branch->name = $array['branch']['name'];
        $branch->firmid = $array['branch']['firmid'];
        $branch->branchid = $array['branch']['branchid'];
        $branch->url = $array['branch']['url'];
        $branch->save();

        return $branch;
    }
    public function branch($id = 40419)
    {
        $branches  = Branch::select('url')->get();
        $branch_details = [];

        foreach ($branches as $link) {
            $response = $this->apiRequests($link->url);
            $array = $this->xmlToArray($response->body());

            $detail_exists = BranchDetail::where('branchid', '=', $array['BranchID'])->first();

            if ($detail_exists != null) {
                continue;
            }

            $branch_detail = new BranchDetail();
            $branch_detail->create([
                'branchid'      =>  $array['BranchID'],
                'street'        =>  $array['street'],
                'town'          =>  implode(" ", $array['town']),
                'county'        =>  $array['county'],
                'postcode'      =>  $array['postcode'],
                'phone'         =>  $array['phone'],
                'email'         =>  $array['email'],
            ]);
        }
        return $branches;
    }
    public function properties($branch = 40419)
    {
        $branches = Branch::select('url')->get();
        foreach ($branches as $link) {
            $response = $this->apiRequests($link->url.'/property');
            $result = $this->xmlToArray($response->body());
            foreach ($result['property'] as $array) {
                $property_exists = Property::where('prop_id', '=', $array['prop_id'])->first();
                if ($property_exists != null) {
                    continue;
                }
                $property = new Property();
                $property->prop_id = $array['prop_id'];
                $property->lastchanged = $array['lastchanged'];
                $property->url = $array['url'];
                $property->save();
            }
        }
        return 'done';
    }
    public function property($branch = 40419, $id = 31488859)
    {
        $properties = Property::select('url','prop_id')->get();
        foreach ($properties as $link) {
            $response = $this->apiRequests($link->url);
            $result = $this->xmlToArray($response->body());
            $property_detail = PropertyDetail::create([
                    'prop_id'       =>    $link->prop_id,
                    'agents'        =>    $this->sanitizeArray($result['reference']['agents']),
                    'software'      =>    $result['reference']['software'],
                    'price'         =>    $result['price'],
                    'rentalfees'    =>    $this->sanitizeArray($result['rentalfees']),
                    'lettingsfee'   =>    $this->sanitizeArray($result['lettingsfee']),
                    'rm_qualifier'  =>    $result['rm_qualifier'],
                    'available'     =>    $result['available'],
                    'uploaded'      =>    $result['uploaded'],
                    'longitude'     =>    $result['longitude'],
                    'latitude'      =>    $result['latitude'],
                    'easting'       =>    $result['easting'],
                    'northing'      =>    $result['northing'],
                    'web_status'    =>    $result['web_status'],
                    'custom_status' =>    $this->sanitizeArray($result['custom_status']),
                    'comm_rent'     =>    $this->sanitizeArray($result['comm_rent']),
                    'premium'       =>    $this->sanitizeArray($result['premium']),
                    'service_charge'=>    $this->sanitizeArray($result['service_charge']),
                    'rateable_value'=>    $this->sanitizeArray($result['rateable_value']),
                    'type'          =>    $this->sanitizeArray($result['type']),
                    'area'          =>   $this->sanitizeArray($result['area']),
                    'furnished'     =>    $result['furnished'],
                    'rm_type'       =>    $result['rm_type'],
                    'let_bond'      =>    $result['let_bond'],
                    'rm_let_type_id'=>    $result['let_bond'],
                    'bedrooms'      =>    $result['bedrooms'],
                    "receptions"    =>    $result['bedrooms'],
                    "bathrooms"     =>    $result['bathrooms'],
                    "userfield1"    =>    $this->sanitizeArray($result['userfield1']),
                    "userfield2"    =>    $this->sanitizeArray($result['userfield2']),
                    "solddate"      =>    $this->sanitizeArray($result['solddate']),
                    "leaseend"      =>    $this->sanitizeArray($result['leaseend']),
                    "instructed"    =>    $this->sanitizeArray($result['instructed']),
                    "letdate"       =>    $this->sanitizeArray($result['letdate']),
                    "soldprice"     =>    $this->sanitizeArray($result['soldprice']),
                    "garden"        =>    $this->sanitizeArray($result['garden']),
                    "parking"       =>    $this->sanitizeArray($result['parking']),
                    "newbuild"     =>     $result['newbuild'],
                    "groundrent"   =>     $this->sanitizeArray($result['groundrent']),
                    "commission"   =>     $this->sanitizeArray($result['commission']),
                    "tenure"       =>     $result['tenure'],
                    "description"  =>     $result['description'],
                    "hip"          =>     $this->sanitizeArray($result['hip']),
                    "paragraphs"   =>     $this->sanitizeArray($result['paragraphs']),
                    "bullets"      =>     $this->sanitizeArray($result['bullets']),
                    "userfeatures" =>     $this->sanitizeArray($result['userfeatures']),
                    "adverts"      =>     $this->sanitizeArray($result['adverts']),
            ]);
            $addresses = PropertyAddresses::create([
                'pro_id'           =>    $link->prop_id,
                'name'             =>      $result['address']['name'],
                'street'           =>      $result['address']['street'],
                'locality'         =>      $this->sanitizeArray($result['address']['locality']),
                'town'             =>      $result['address']['town'],
                'county'           =>      $this->sanitizeArray($result['address']['county']),
                'postcode'         =>     $result['address']['postcode'],
                'custom_location'  =>     $this->sanitizeArray($result['address']['custom_location']),
                'display'          =>     $result['address']['display'],
            ]);
            $streetview = PropertyStreetView::create([
                'prop_id'         => $link->prop_id,
                'pov_latitude'    => $result['streetview']['pov_latitude'],
                'pov_longitude'   => $result['streetview']['pov_longitude'],
                'pov_pitch'       => $result['streetview']['pov_pitch'],
                'pov_heading'     => $result['streetview']['pov_heading'],
                'pov_zoom'        => $result['streetview']['pov_zoom']
            ]);

            foreach ($result['files']['file'] as $file) {
                PropertyFiles::create([
                    'prop_id'       => $link->prop_id,
                    'name'         => $file['name'],
                    'url'          => $file['url'],
                    'updated'      => $file['updated'],
                ]);
            }
        }
        return $properties;
    }

    public function sanitizeArray($payload)
    {
        return empty($payload) ? '' : json_encode($payload);
    }

    public function updateProperties()
    {
        $response = $this->apiRequests('http://webservices.vebra.com/export/360propertyapi/v11/property/2022/05/31/12/01/00');
        $xml = simplexml_load_string($response->body());
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $array;
    }

    public function changedFiles()
    {
        $response = $this->apiRequests('https://webservices.vebra.com/export/360propertyapi/v11/branch/40419');
        $xml = simplexml_load_string($response->body());
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $array;
    }

    public function getToken()
    {
        if (!empty($this->token)) {
            return $this->token;
        } else {
            $response = Http::withBasicAuth($this->username, $this->password)->get($this->url);
            $response->throwIf($response->failed());
            Cache::put('token', $response->header('Token'), $seconds = 3600);
            $this->token = base64_encode(Cache::get('token'));
            return $this->token;
        }
    }

    public function apiRequests($url)
    {
        return $response = Http::withToken($this->getToken())->get($url);
    }

    public function authenticate()
    {
        $response = Http::withToken($this->getToken())->get($this->url);
        $response->throwIf($response->failed());
    }

    public function xmlToArray($payload)
    {
        $xml = simplexml_load_string($payload);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        return $array;
    }
}
