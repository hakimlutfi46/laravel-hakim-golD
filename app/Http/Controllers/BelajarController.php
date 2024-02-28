<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class BelajarController extends Controller
{
    public function index(Request $req)
    {
        $url = $req->url();
        $word2 = "Ini data text dari controller";
        return view(
            'pages.data',
            [
                'word2' => $word2,
                'query' => $url
            ]
        );
    }
}
