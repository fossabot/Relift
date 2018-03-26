<?php

namespace App\Http\Controllers\Tool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VgController extends Controller
{
	//private $_re = ['cn', 'na', 'eu', 'sa', 'ea', 'sg'];

	public function index(){
		return view('theme::vg.vg');
	}

	private function player($name){
		$response = \VGWrap::get('shards/cn/players', [
			'query' => [
				'filter' => [
					'playerNames' => $name
				]
			]
		]);
		return $player = json_decode($response->getBody()->getContents());
	}

	public function matches($name){
		$response = \VGWrap::get('shards/cn/matches', [
			'query' => [
				//'sort' => 'sort=-createdAt',
				'filter' => [
                    //'createdAt-start' => '2017-01-01T08:25:30Z',
					'playerNames' => $name,
				],
				'page' => [
					'limit' => 1,
                    'offset' => 39,
				],
			]
		]);

		$matches = json_decode($response->getBody()->getContents());
		dump($matches);

		$player = $this->player($name);
        $p['data'] = $player->data[0];
		$tmp = [];
		$m = [];

		foreach ($matches->data as $key => $match){

			foreach ($matches->included as $k => $v) {

			    foreach ($match->relationships->rosters->data as $kk => $vv){
			        if ($v->type == 'roster'){
			            if ($v->id == $vv->id){
			                $tmp[$kk]['id'] = $vv->id;
			                $m[$key][$kk]['match'] = $match->attributes;
                        }
                    }
                }
            }
            foreach ($matches->included as $k => $v){
			    if ($v->id == $tmp[0]['id']){
                    $m[$key][0]['roster'] = $v->attributes;
                    $m[$key][0]['color'] = $v->attributes->stats->side;
                    foreach ($v->relationships->participants->data as $kk => $vv){
                        $tmp[0]['part_id'][$kk] = $vv->id;
                    }
                }elseif ($v->id == $tmp[1]['id']){
                    $m[$key][1]['roster'] = $v->attributes;
                    $m[$key][1]['color'] = $v->attributes->stats->side;
                    foreach ($v->relationships->participants->data as $kk => $vv){
                        $tmp[1]['part_id'][$kk] = $vv->id;
                    }
                }

               /* if ($v->type == 'participant'){
                    foreach ($v->)
                }*/
            }

            foreach ($matches->included as $k => $v){
			    foreach ($tmp[0]['part_id'] as $kk => $vv){
                    if ($v->id == $vv){
                        $m[$key][0]['part_data'][$kk] = $v->attributes;
                        $tmp[0]['player_id'][$kk] = $v->relationships->player->data->id;
                    }
                }
			    foreach ($tmp[1]['part_id'] as $kk => $vv){
                    if ($v->id == $vv){
                        $m[$key][1]['part_data'][$kk] = $v->attributes;
                        $tmp[1]['player_id'][$kk] = $v->relationships->player->data->id;
                    }
                }
            }

            foreach ($matches->included as $k => $v){
			    foreach ($tmp[0]['player_id'] as $kk => $vv){
                    if ($v->id == $vv){
                        $m[$key][0]['player_data'][$kk] = $v->attributes;
                    }
                }
			    foreach ($tmp[1]['player_id'] as $kk => $vv){
                    if ($v->id == $vv){
                        $m[$key][1]['player_data'][$kk] = $v->attributes;
                    }
                }
            }
		}

		dump($m);
		return view('theme::vg.show', compact('m', 'p'));

	}

}
