<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Model_Keranjang', 'Model_Products']);
		
		$this->cekAksesCustomer();
	}

	public function index()
	{
		$this->load->view("customer/dashboard");
	}

	public function produk($id = '')
	{
		if (isPost()) {
			if($this->Model_Keranjang->insert()){
				echo '<script type="text/javascript">alert(\'success\');</script>';
			} else {
				echo '<script type="text/javascript">alert(\'failed\');</script>';
			}
		}

		if ($id == '') {
			$data['list_barang'] = $this->Model_Products->getAllBarang();			
			$this->load->view("customer/produk", $data);
		} else {
			$data['barang'] = $this->Model_Products->getProductById($id);
			$this->load->view("customer/detailproduk", $data);
		}
	}

	public function keranjang($action = '')
	{
		if (isPost()) {
			if ($action === 'delete') {
				if ($this->Model_Keranjang->delete()) {
					echo '<script type="text/javascript">alert(\'delete success\');</script>';
				} else {
					echo '<script type="text/javascript">alert(\'delete failed\');</script>';
				}
			}
			if ($action === 'checkout') {
				# code...
			}
		}
		$data['keranjang'] = $this->Model_Keranjang->get();
		$this->load->view("customer/keranjang", $data);
	}

	public function galery()
	{
		$this->load->view("customer/galery");
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */
