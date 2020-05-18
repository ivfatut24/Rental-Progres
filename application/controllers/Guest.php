<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{

	public function index()
	{
		$this->load->view("guest/dashboard");
	}

	public function produk()
	{
		$this->load->view("guest/produk");
	}

	public function keranjang()
	{
		$this->load->view("guest/keranjang");
	}

	public function galery()
	{
		$this->load->view("guest/galery");
	}
	public function detail()
	{
		$this->load->view("guest/detailproduk");
	}

}

/* End of file Guest.php */
/* Location: ./application/controllers/Guest.php */
