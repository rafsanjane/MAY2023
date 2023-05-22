<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    private $books = [
        


        
    ]


    function books(){
        return $this->books();
    }

    function getBook($id){
        $bookId = $id - 1;
        return $this->books[]
    }
}
