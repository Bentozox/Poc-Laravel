<?php

namespace App\Http\Controllers;

use App\Client;


class ClientController extends Controller
{


    public function __construct()
    {
    }


    public function find($name) {
        return Client::where("name", $name)->get();
    }

    public function create($name) {
        $client = array("name" => $name);
        Client::insert($client);
        return self::fetchAll();
    }

    public function fetchAll() {
        return Client::all();
    }



    public function delete($name) {
        Client::all()->where("name", $name)->each(function($client) {
            $client->delete();
        });
        return self::fetchAll();
    }


}
