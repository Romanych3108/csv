<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function doWelcom(Request $request)
    {
//        dd($status);
        if($request->csv){
            $count = count($request->csv);
//            dd($count);
            foreach($request->csv as $csv){
                $name = $csv[0];
                $qyt = $csv[1];
                $wh = $csv[2];

            }
//            dd($name);
        }
//        dd($request->csv);

        $data = [
            'csvArr' => $request->csv,
        ];
        return view('element/home', $data);
    }

    public function doUpload(Request $request)
    {
        $file = file($request->file('csv'));
        $csvArr = [];
        $count = 0;
        $str = "";

        $countArr = count($file);


        foreach($file as $f){
            if($count == 0){
                $count++;
                continue;
            }
            $count++;

            $csv = str_getcsv($f, ",");
            $str = $str.','.$csv[0];

            array_push($csvArr, $csv);

//            if($count == $countArr){
                $name = explode(',', $str);
                $result = '';

//                foreach ($name as $key => $value) {
////                    $result[$value] = $key;
//
//                  $result[$value][$key] = $key;
//                }
//                dd($result);
//                foreach ($result as $res){
//                    $countRes = count($res);
//                    echo $countRes.'<br>';
//
//                    if($countRes > 1){
////                        dd($res);
//                    }
//                }
//                foreach ($csvArr as $n){
//                    $search = array_search($n[0], $name);
//
//                }
//            }


        }
//        dd($csvArr);

        $data = [
            'csv' => $csvArr,
        ];

        return redirect()->action('ProductController@doWelcom', $data);
    }
}
