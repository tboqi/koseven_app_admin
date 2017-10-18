<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

	protected $show_header = false;

	public function action_index() {
		$this->tpl = 'welcome/index';

		$session = Session::instance();
		$data = $session->as_array();
		$this->data = $data;
	}

	public function action_main() {
		die('Welcome/main');
	}
	public function action_indexdata() {
		$tree = [
			[
				"text" => '工具集',
				"isexpand" => true,
				"children" => [
					["url" => URL::site('tools/json2arr'), "text" => "json2arr"],
					["url" => URL::site('tools/serialize'), "text" => "反序列化"],
					["url" => URL::site('tools/md5'), "text" => "md5"],
				],
			],
		];
		$data = [
			'tree1' => $tree,
			'adminTree' => [],
		];
		die('var indexdata = ' . json_encode($data));
	}
} // End Welcome
