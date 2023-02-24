<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmiController extends Controller
{
    public function forma()
    {
        return view("kmi");
    }

    public function rezultatas(Request $request)
    {
        $weight = $request->weight;
        $height = $request->height;
        $bmiPass = $request->weight / (( $request->height / 100)**2);
        return view("rezultatas", [
            'weight'=>$weight,
            'height'=>$height,
            'bmiPass'=>$bmiPass
        ]);
    }
}
