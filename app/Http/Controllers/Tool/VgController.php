<?php

namespace App\Http\Controllers\Tool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VgController extends Controller
{
	private $_re = ['cn', 'na', 'eu', 'sa', 'ea', 'sg'];

	public function index(){
		return view('theme::vg.vg');
	}

	private function player($name, $re){
		$response = \VGWrap::get('shards/'. $re .'/players', [
			'query' => [
				'filter' => [
					'playerNames' => $name
				]
			]
		]);
		$player = json_decode($response->getBody()->getContents());
		dump($player);
	}

	public function matches(Request $request){
		$name = $request->get('name');
		$re = $this->_re[$request->get('re')];
		$response = \VGWrap::get('shards/'. $re .'/matches', [
			'query' => [
				'sort' => 'sort=-createdAt',
				'filter' => [
					'playerNames' => $name
				],
				'page' => [
					'limit' => 1
				],
			]
		]);
		$matches = json_decode($response->getBody()->getContents());
		dump($matches);
		foreach ($matches->data as $key => $match){
			foreach ($match->relationships->rosters->data as $k => $v){
				$m[$key]['rosters'][$k] = $v->id;
			}
		}

		dump($m);
		return view('theme::vg.show');

	}

}
