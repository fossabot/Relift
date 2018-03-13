<?php

namespace App\Http\Controllers\Tool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaingloryController extends Controller
{
    public function matches(){
        $response = \VGWrap::get('shards/cn/matches', [
            'query' => [
                'sort' => '-createdAt',
                'filter' => [
                    'playerNames' => 'relift',
                ],
                'page' => [
                    'limit'  => 1,
                ],
            ]
        ]);
        $player = json_decode($response->getBody()->getContents());
        dump($player);
    }

    public function player(){
        $response = \VGWrap::get('shards/cn/players', [
            'query' => [
                'filter' => [
                    'playerNames' => 'relift',
                ],
            ]
        ]);
        $player = json_decode($response->getBody()->getContents());
        dump($player);
    }
}
