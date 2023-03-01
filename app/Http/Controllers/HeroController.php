<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function getAllHeroes()
    {
        $heroes = Hero::all();
        foreach ($heroes as $h) {
            $h->identities;
        }
        return $heroes;
    }
    public function getHeroById($id)
    {
        $hero = Hero::where('id', $id)->first();
        // $identity = $hero->identity;
        return [
            $hero
        ];
    }
    public function newHero(Request $req)
    {
        // dd($req);
        $hero = new Hero();

        $hero->name = $req->input('name');
        $hero->height = $req->input('height');
        $hero->weight = $req->input('weight');

        // dd($hero);
        $hero->save();

        return [
            "message" => "hero saved successfully",
            "status" => 201,
            "saved_hero" => $hero

        ];
    }
    public function updateHero(Request $req, $id)
    {
        // dd($req, $id);
        $hero = Hero::find($id);

        $hero->name = $req->input('name');
        $hero->height = $req->input('height');
        $hero->weight = $req->input('weight');

        // dd($hero);
        $hero->save();

        return [
            "message" => "hero saved successfully",
            "status" => 201,
            "saved_hero" => $hero

        ];
    }
    public function deleteHero($id)
    {
        $hero = Hero::find($id);
        $hero->delete();
        // Hero::truncate();
        return [
            "message" => "hero deleted successfully",
            "status" => 200,
            "deleted_hero" => $hero
        ];
    }
}
