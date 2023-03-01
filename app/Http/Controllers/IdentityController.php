<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    public function getAllIdentities()
    {
        $identities = Identity::all();
        foreach ($identities as $i) {
            $i->hero;
        }
        return $identities;
    }
}
