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
		$player = json_decode($response->getBody()->getContents());
		dump($player);
	}

	public function matches($name){
		$response = \VGWrap::get('shards/cn/matches', [
			'query' => [
				'sort' => 'sort=-createdAt',
				'filter' => [
					'playerNames' => $name
				],
				'page' => [
					'limit' => 2
				],
			]
		]);
		$matches = json_decode($response->getBody()->getContents());
		dump(get_object_vars($matches));
		foreach ($matches->data as $key => $match){
			$m[$key]['blue']['all'] = $match->relationships->rosters->data[0]->id;
			$m[$key]['red']['all'] = $match->relationships->rosters->data[1]->id;
		}

		foreach ($matches->included as $key => $in){
			foreach ($m as $k => $v){
				if ($in->id == $v['blue']['all']){
					$m[$k]['blue']['data'] = $in->relationships->participants->data;
				}elseif ($in->id == $v['red']['all']){
					$m[$k]['red']['data'] = $in->relationships->participants->data;
				}


			}
		}
		dump($m);
		return view('theme::vg.show');

	}

}
