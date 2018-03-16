<?php

namespace App\Http\Controllers\Tool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaingloryController extends Controller
{
    private  $api_url = 'https://api.dc01.gamelockerapp.com/shards/';
    private  $api_key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiI1NDc4MGVjMC1mMjJkLTAxMzUtMDE4ZC0wYTU4NjQ2MDBlMDUiLCJpc3MiOiJnYW1lbG9ja2VyIiwiaWF0IjoxNTE4NDQ1MDI3LCJwdWIiOiJzZW1jIiwidGl0bGUiOiJ2YWluZ2xvcnkiLCJhcHAiOiJ0eXJhbnQiLCJzY29wZSI6ImNvbW11bml0eSIsImxpbWl0IjoxMH0.ALfZMp5JblxXmdzyja77C0-Eo2AcGFSXsaakuw93WqE';
    private  $re = ['cn', 'na', 'eu', 'sa', 'ea', 'sg'];
    private  $gameMode = ['aral' => '乱斗', 'blitz' => '闪电战', 'blitz_rounds' => 'blitz_rounds', 'casual' => '匹配', 'casual_5v5' => '5v5匹配' , 'ranked' => '排位'];
    private  $headers;
    private  $options;

    public function __construct()
    {
        $this->headers = [
            'Accept: application/json',
            'X-TITLE-ID: semc-vainglory',
            'Authorization: Bearer ' . $this->api_key,
            ];

        $this->options = [
            'http' => [
                'method' => 'GET',
                'header' => implode("\r\n", $this->headers),
            ],
        ];
    }

    public function getReName(Request $request){
        $name = $request->get('name');
        $re = $this->re[$request->get('re')];
        $player_info = $this->getPlayerByName($re,$name);
        $player_id = $player_info['data'][0]['id'];
        $player_data = $player_info['data'][0]['attributes'];

        $matches_info = $this->getMatches($re, $name, 1);
        $matches_data = $matches_info['data']['0']['attributes'];

        foreach ($matches_info['included'] as $key => $value){
            static $i = 0; static $j = 2; static $k = 8;
            if ($value['type'] == 'roster') {
                $m[$i] = $value;
                $i++;
            }else if ($value['type'] == 'participant'){
                $m[$j] = $value;
                $j++;
            }else if ($value['type'] == 'player'){
                $m[$k] = $value;
                $k++;
            }
        }

        /*$m['gameMode'] = $this->gameMode[$matches_data['gameMode']];
        $m['duration'] = $matches_data['duration'];
        $m['res'] = ['victory' => '胜利', 'surrender' => '失败'][$matches_data['stats']['endGameReason']];*/
        dump($m);

        return view('home.player', ['player_data' => $player_data, 'matches_data' => $matches_data]);
    }

    private function getPlayerById($player_region, $player_id){
        $prefix = 'players';
        $player_query = [
            'id' => $player_id,
            'region' => $player_region,
        ];
        $player_request_uri = $this->api_url . $player_query['region'] . '/' . $prefix . '/' . $player_query['id'];
        if ($player_return_obj = file_get_contents($player_request_uri, false, stream_context_create($this->options))) {
            $player_arr = json_decode($player_return_obj, true);
            dump($player_arr);
        }
    }

    private function getPlayerByName($player_region, $player_name){
        $prefix = 'players';
        $player_query = [
            'region' => $player_region,
            'player_name' => $player_name,
            'filter' => 'filter[playerNames]=' . $player_name,
        ];
        $player_request_uri = $this->api_url . $player_query['region'] . '/' . $prefix . '?' . $player_query['filter'];
        if ($player_return_obj = file_get_contents($player_request_uri, false, stream_context_create($this->options))) {
            $player_arr = json_decode($player_return_obj, true);
            return $player_arr;
        }
    }

    private function getMatches($matches_region, $matches_player_name, $matches_count = 1) {
            $prefix = 'matches';
            $matches_query = array(
                'region' => $matches_region,
                'sort' => 'sort=-createdAt',
                'filter' => 'filter[playerNames]=' . $matches_player_name,
                'per_page' => 'page[limit]=' . $matches_count,
            );
            $matches_request_uri = $this->api_url . $matches_query['region'] . '/' . $prefix . '/?' . $matches_query['sort'] . '&' . $matches_query['filter'] . '&' . $matches_query['per_page'];
            if ($matches_return_obj = file_get_contents($matches_request_uri, false, stream_context_create($this->options))) {
                $matches_arr = json_decode($matches_return_obj, true);
                return $matches_arr;
            }
    }

    private function getByUrl($url){
        if ($return_obj = file_get_contents($url, false, stream_context_create($this->options))) {
            $arr = json_decode($return_obj, true);
            return $arr;
        }
    }
}
