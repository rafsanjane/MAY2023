<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    function UserIp(Request $request): bool
    {

        //$ip = $request->ip();

        if ($request->accepts("application/json")) {

            return true;
        } else {
            return false;
        }

        //return $request->getAcceptableContentTypes();
    }

    function FileData(Request $request): bool
    {

        $photo = $request->file('photo');


        $photo->storeAs("uploads", $photo->getClientOriginalName());
        $photo->move(public_path("upload"), $photo->getClientOriginalName());


        return  true;
    }


    function FormData(Request $request): array
    {
        $data = $request->input();
        $photo = $request->file('photo');
        $fileSize = filesize($photo);
        $fileType = filetype($photo);
        $fileOrginalName = $photo->getClientOriginalName();
        $tempFileName = $photo->getfilename();
        $fileExtension = $photo->getExtension();

        return  array(
            "data" => $data,
            "fileSize" => $fileSize,
            "fileType" => $fileType,
            "fileOrginalName" => $fileOrginalName,
            "tempFileName" => $tempFileName,
            "fileExtension" => $fileExtension
        );
    }


    function DemoAction(Request $request): array
    {
        $name = $request->input("name");
        $age = $request->input("age");
        $page = $request->query('page', null);
        $userAgent = $request->header('User-Agent');
        $city = $request->input("city");
        $postcode = $request->input("postcode");

        // return "My Name is ${name} and My age ${age} 
        // Living City {$city} Zip {$postcode}  
        // Pages x{$page} User-Agent {$userAgent}";

        return array(
            "name" => $name,
            "age" => $age,
            "pin" => $userAgent,
            "city" => $city,
            "postcode" => $postcode,
            "page" => $page
        );
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
}
