<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fivaa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('fivaa');
	}

	public function generateNumber()
	{
		$n = $this->input->post('number');
		for($x = $n; $x > 0; $x--)
		{
			for($y = 0; $y < 2; $y++)
			{
				echo $x-1;
			}
			for($z = 0; $z < $x; $z++)
			{
				echo $x+1;
			}
			echo "<br>";
		}
		$this->load->view('fivaa');
	}
}
?>
