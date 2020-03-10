<?php namespace App\Http\Controllers;

use App\Business\TranslateBusiness;
use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function number(Request $request) 
    {
        $this->validate($request, ['number' => 'required']);
        //
        $translated = TranslateBusiness::kwegoToHinduArabic($request->input('number'));
        return response()->json($translated->toArray());
    }
}
