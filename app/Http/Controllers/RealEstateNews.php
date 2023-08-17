<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\RssItem;
use App\Models\RssSportItem;
use Illuminate\Http\Request;

class RealEstateNews extends Controller
{
    public function realestate(){
        $realestate_items = RssItem::paginate(10);
        return view('realestate',compact('realestate_items'));
    }

    public function sport_news(Request $request){
        $sport_item = RssSportItem::paginate(5);
        return view('sports', compact('sport_item'));
    }

    public function calculator(Request $request){
        return view('calculator');
    }

    public function airports(){
        $airports = Airport::where('country','like','%United States%')->select("id", "city", "country", "name")->get();
        return view('airports', compact('airports') );
    }

}
