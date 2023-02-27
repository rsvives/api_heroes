<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function getAllHeroes()
    {
        $heroes = Hero::all();
        return $heroes;
    }
    public function getHeroById($id)
    {
        $hero = Hero::where('id', $id)->get();
        return $hero;
    }
    public function newHero(Request $req)
    {
        return [
            "name" => $req->input('name'),
            "height" => $req->input('height'),
            "weight" => $req->input('weight'),
        ];
    }
}
