<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('m_product');
	    $this->load->helper('url');

	}
	public function index()
	{
		$data['page_link'] = $this->m_product->show_data()->result();
		$this->load->view('page1',$data);
	}

	function add_link(){
		$page_link = $this->input->post('linkName');
		$nama = $this->input->post('nama');
 
		$data = array(
			'nama' => $nama,
			'page_link' => $page_link
			);
		$this->m_product->add_data($data,'page_link');
		redirect('product/index');
	}

	function list($id){
		$where = array('idPageLink' => $id);
		$data['page_link'] = $this->m_product->show_link($where,'page_link')->result();
		$this->load->view('page2',$data);
	}

	function delete($id){
		$where = array('idPageLink' => $id);
		$this->m_product->delete_data($where,'page_link');
		redirect('product/index');
	}
}
