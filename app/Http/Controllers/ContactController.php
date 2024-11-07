<?php

namespace App\Http\Controllers;
use App\Http\Response;

class ContactController
{
    public function index(){
        echo "Contact Page";
        return new Response("Contact");
    }
    public function cualquiercosa(){
        echo "Cualquier cosa page";
        return new Response("El metodo raro");
    }
}



