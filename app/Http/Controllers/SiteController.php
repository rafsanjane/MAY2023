<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class SiteController extends Controller
{

    function CookieAction()
    {
        $name = "token";
        $value = "123XYZ";
        $minutes = 120;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response("Hi")->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }

    function Redirect(Request $request): string
    {

        return redirect("/home");
    }

    function Json(Request $request): JsonResponse
    {
        $code = 201;
        $content = array('name' => 'Rafsan', 'city' => "Dhaka");
        return response()->json($content, $code);
    }

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


    function SessionPut(Request $request): bool
    {
        $email = $request->email;
        $request->session()->put('userEmail', $email);
        return true;
    }

    function SessionPull(Request $request): string
    {

        return  $request->session()->pull('userEmail', 'default');
    }

    function SessionForget(Request $request): bool
    {

        $request->session()->forget('userEmail');

        return true;
    }

    function SessionFlush(Request $request): string
    {

        $request->session()->flush();

        return true;
    }

    // -------------- MiddleWare practice ----------------------

    function DemoMiddlewareAction(): string
    {
        return "MiddleWare Run";
    }
}
