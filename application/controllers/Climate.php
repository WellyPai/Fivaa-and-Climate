<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Climate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('climate');
	}

	public function weather()
	{
		$city = $this->input->post('city');
		$parameters = http_build_query([
			'q' => $city,
			'cnt' => 5,
			'units' => 'metric',
			'APPID'=>'481e3bc28e5264e5607c2b65b449bfc1'
		]);
		$url = "api.openweathermap.org/data/2.5/forecast/daily?".$parameters;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$ce = curl_exec($ch);
		curl_close($ch);
		$ce = json_decode($ce, TRUE);
		
		$this->load->view('weatherTable', $ce);
	}
}
?>
