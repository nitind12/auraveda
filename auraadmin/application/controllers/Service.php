<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Service extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('My_service', 'mm');
        if (! $this->session->userdata('ussr_')) {
            redirect(__BACKTOSITE__);
        }
	}

	function index(){
		$data['user___'] = $this->session->userdata('ussr_');
		$data['folder_'] = 'service';
		$data['page__'] = 'category';

		//$data['existing'] = $this->mm->get_all_categories();
        
        $data['page_head'] = 'Manage Service Category';
        //$data['view1'] = 'Updategallery';
		$this->load->view('templates/header');
		$this->load->view('inner', $data);
		$this->load->view('templates/footer');
	}
	function callpage($folder_ = 'x', $page__ = 'x', $id_ = 'x'){
		$data['user___'] = $this->session->userdata('ussr_');
		
		$data['folder_'] = $folder_;
		$data['page__'] = $page__;

		if($page__ == 'category'){
			$data['categories'] = $this->mm->getServicesCateg();
			$data['page_head'] = 'Manage Service Category';
			if($id_ != 'x'){
				$data['editcategory'] = $this->mm->getServicesCateg($id_);
			}
		} else if($page__ == 'serve'){
			$data['page_head'] = 'Manage Service';
			$data['categories'] = $this->mm->getServicesCateg();
			$data['services_'] = $this->mm->getServices();
			if($id_ != 'x'){
				$data['editserve'] = $this->mm->getServices($id_);
			}
		} else if($page__ == 'service'){
			$data['categories'] = $this->mm->getServicesCateg();
			$data['services_'] = $this->mm->getServices();
			$data['serviceDetail'] = $this->mm->getServiceDetail();
			$data['page_head'] = 'Manage Services';
			if($id_ != 'x'){
				$data['editservicedetail'] = $this->mm->getServiceDetail($id_);
			}
		} else {
			$data['categories'] = $this->mm->getServicesCateg();
			$data['page_head'] = 'Manage Service Category';
		}

		$this->load->view('templates/header');
		$this->load->view('inner', $data);
		$this->load->view('templates/footer');	
	}
	function createCategory(){
		$this->mm->service_category();
		redirect('service/callpage/service/category');
	}
	function active_inactive_category($categid, $status){
		$this->mm->active_deactive($categid, $status);
		//redirect('service/callpage/service/category');
	}
	function UpdateCategory($categid){
		$this->mm->UpdateCategory($categid);
		redirect('service/callpage/service/category');
	}
	function deleteCategory($categid){
		$this->mm->deleteCategory($categid);
		redirect('service/callpage/service/category');	
	}

	function createServe(){
		$this->mm->createServe();
		redirect('service/callpage/service/serve');
	}
	function UpdateServe($sid_){
		$this->mm->updateServe($sid_);
		redirect('service/callpage/service/serve');	
	}
	function deleteServe($sid_){
		$this->mm->deleteServe($sid_);
		redirect('service/callpage/service/serve');
	}
	function fetchServices(){
		$categid =  $this->input->post('categid');

		$res_ = $this->mm->fetchservices($categid);
		
	    echo "<option value=''>Select</option>";
		foreach($res_ as $item){
			echo "<option value='".$item->SID."'>".$item->SERVICE."</option>";
		}
	}
	
	function createServiceDetail(){
		$this->mm->createServiceDetail();
		redirect('service/callpage/service/service');
	}

	function UpdateServiceDetail($id_){
		$this->mm->updateServiceDetail($id_);
		redirect('service/callpage/service/service');
	}

	function deleteServcieDetail($id_){
		$this->mm->deleteServcieDetail($id_);
		redirect('service/callpage/service/service');	
	}

}