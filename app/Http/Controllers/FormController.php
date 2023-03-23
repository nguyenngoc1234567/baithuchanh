<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(Request $request)
    {
        echo 'Name:' . $request->name . '. Age: ' . $request->age;
        $success = "Dữ liệu được xác thực thành công";
        return view('welcome', compact('success'));
    }

}
