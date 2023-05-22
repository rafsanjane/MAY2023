<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{


    function Home()
    {
        return view('index');
    }


    function resume()
    {
        return view('resume');
    }


    function services()
    {
        return view('services');
    }


    function contact()
    {
        return view('contact');
    }


    function Portfolio()
    {
        return view('portfolio');
    }


    function controler_practice()
    {
        return 'hello controler';
    }

    function DemoAction(Request $request): string
    {
        $name = $request->input("name");
        $age = $request->input("age");

        return "My Name is ${name} and My age ${age}";
    }

    function jsonAction(Request $request): array
    {
        $name = $request->name;
        $age = $request->age;
        $pin = $request->header("pin");
        $city = $request->input("city");
        $postcode = $request->input("postcode");


        // return "My Name is {$name} and My Age {$age} lives in {$city} zip is {$postcode}
        // Secrat Pin is {$pin}";
        // return array($name, $age, $pin, $city, $postcode);
        return array(
            "name" => $name,
            "age" => $age,
            "pin" => $pin,
            "city" => $city,
            "postcode" => $postcode
        );
    }
}
