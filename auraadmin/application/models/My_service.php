<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_service extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function check_availability($categ){
    	$this->db->where('CATEGORY', $categ);
    	$query = $this->db->get('service_category');

        if($query->num_rows() != 0){
            $bool_ = true;
        } else {
            $bool_ = false;
        }

        return $bool_;
    }
    function service_category(){
    	$categ = $this->input->post('txtServiceCategory');
    	$desc_ = $this->input->post('txtDesc');

    	$data = array(
    		'CATEGORY' => $this->security->xss_clean($categ),
    		'DESC_' => $this->security->xss_clean($desc_),
            'STATUS'=> 1
    	);

    	if($this->check_availability($categ) == true){
    		$this->session->set_flashdata('allmessage', '<b>'.$categ."</b> category already exists");
    	} else {
            $query = $this->db->insert('service_category', $data);
            if($query == true){
                $this->session->set_flashdata('allmessage', "category successfully submitted.");
            } else {
                $this->session->set_flashdata('allmessage', "<span style='color:#ff0000'>something goes wrong. please try again.</span>");
            }
    	}
    }

    function UpdateCategory($categid){
        $categ = $this->input->post('txtServiceCategory');
        $desc_ = $this->input->post('txtDesc');

        $data = array(
            'CATEGORY' => $this->security->xss_clean($categ),
            'DESC_' => $this->security->xss_clean($desc_),
        );

        $this->db->where('CATEGORY', $categ);
        $this->db->where('CATEGID <>', $categid);
        $query = $this->db->get('service_category');

        if($query->num_rows() != 0){
            $this->session->set_flashdata('allmessage', '<b>'.$categ."</b> category already exists");
        } else {
            $this->db->where('CATEGID', $categid);
            $query = $this->db->update('service_category', $data);
            if($query == true){
                $this->session->set_flashdata('allmessage', "category successfully updated.");
            } else {
                $this->session->set_flashdata('allmessage', "<span style='color:#ff0000'>something goes wrong. please try again.</span>");
            }
        }
    }

    function deleteCategory($categid){
        $this->db->where('CATEGID', $categid);
        $this->db->delete('service_category');
    }

    function createServe(){
        $categid = $this->input->post('cmbServiceCategory');
        $service = $this->input->post('txtServe');
        $desc_ = $this->input->post('txtDesc');
        $status = 1;

        $this->db->where('SERVICE', $service);
        $query = $this->db->get('services');

        if($query->num_rows() != 0){
            $this->session->set_flashdata('allmessage', "[ ".$service." ] Service already exists.");
        } else {
            $data = array(
                'CATEGID' => $categid,
                'SERVICE' => $service,
                'DESC_' => $desc_,
                'STATUS' => $status
                );
            $query = $this->db->insert('services', $data);
            if($query == true){
                $this->session->set_flashdata('allmessage', "Service successfully submitted.");
            } else {
                $this->session->set_flashdata('allmessage', "<span style='color:#ff0000'>something goes wrong. please try again.</span>");
            }

        }

    }
    function updateServe($sid_){
        $categid = $this->input->post('cmbServiceCategory');
        $service = $this->input->post('txtServe');
        $desc_ = $this->input->post('txtDesc');

        $this->db->where('SERVICE', $service);
        $this->db->where('SID <>', $sid_);
        $query = $this->db->get('services');

        if($query->num_rows() != 0){
            $this->session->set_flashdata('allmessage', "[ ".$service." ] Service already exists.");
        } else {
            $data = array(
                'CATEGID' => $categid,
                'SERVICE' => $service,
                'DESC_' => $desc_,
                'STATUS' => $status
                );
            $this->db->where('SID', $sid_);
            $query = $this->db->update('services', $data);
            if($query == true){
                $this->session->set_flashdata('allmessage', "Service successfully updated.");
            } else {
                $this->session->set_flashdata('allmessage', "<span style='color:#ff0000'>something goes wrong. please try again.</span>");
            }
        }   
    }
    function deleteServe($sid_){
        $this->db->where('SID', $sid_);
        $this->db->delete('services');
    }
    function active_deactive($categid, $status){
        $data = array(
            'STATUS'=>$status
            );
        $this->db->where('CATEGID', $categid);
        $query = $this->db->update('service_category');
    }
    function getServicesCateg($categid = 'x'){
        if($categid != 'x'){
            $this->db->where('CATEGID', $categid);
        }
        $query = $this->db->get('service_category');

        if($categid != 'x'){
            return $query->row();
        } else {
            return $query->result();
        }
    }
    function getServices($sid = 'x'){
        $this->db->order_by('a.SID', 'desc');
        $this->db->select('a.*, b.CATEGORY');
        $this->db->from('services a');
        $this->db->join('service_category b', 'a.CATEGID = b.CATEGID');
        if($sid != 'x'){
            $this->db->where('SID', $sid);
        }
        $query = $this->db->get();

        if($sid != 'x'){
            return $query->row();
        } else {
            return $query->result();
        }
    }

    function fetchservices($categid='x'){
        if($categid != 'x'){
            $this->db->where('CATEGID', $categid);
        }
        $query = $this->db->get('services');
        
        return $query->result();
    }

    function do_upload_pic($id_, $alpha_, $picname) {
        $config = array(
            'upload_path' => './assets_/service_image',
            'allowed_types' => 'jpg|jpeg|png|gif',
            'overwrite' => TRUE,
            'max_size' => 2000,
            'file_name' => "_".$id_.$alpha_
        );
        
        $file_element_name = $picname;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {
            echo $this->upload->display_errors();
            echo " - " . $config['upload_path'] . " - "; 
            print_r($this->upload->data());
            $path_ = 'no-image.jpg';
        }
        return $path_;
    }

    function createServiceDetail(){
        $sid = $this->input->post('cmbService');
        $about = $this->input->post('txtAboutService');
        $define_ = $this->input->post('txtDefine');
        $includes = $this->input->post('txtIncludes');
        $benefits = $this->input->post('txtBenefits');
        $duration = $this->input->post('txtServiceDuration');
        $variety = $this->input->post('txtVareity');
        $time = $this->input->post('txtServiceTime');
        $fee = $this->input->post('txtServiceFee');
        $free = $this->input->post('txtServiceFree');
        $discount_ = $this->input->post('txtServiceDiscount');
        $pic1 = 'x';
        $pic2 = 'x';
        $status = 1;
        $date_ = date('Y-m-d H:i:s');

        $data = array(
            'SID' => $sid,
            'ABOUT'=>$about,
            '_DEFINE_'=>$define_,
            'INCLUDES'=>$includes,
            'BENEFITS'=>$benefits,
            'DURATION'=>$duration,
            'VAREITY'=>$variety,
            'TIME'=>$time,
            'FEE'=>$fee,
            'FREE_' => $free,
            'DISCOUNT_' => $discount_,
            'PIC1_PATH'=>$pic1,
            'PIC2_PATH'=>$pic2,
            'STATUS'=>$status,
            'DATE_'=>$date_
        );
        $query = $this->db->insert('service_detail', $data);

        if($query == true){
            $this->session->set_flashdata('allmessage', 'service detail successfully submitted.');       
        } else {
            $this->session->set_flashdata('allmessage', 'something goes wrong. please try again');
        }
    }

    function getServiceDetail($sdeid = 'x'){
        $this->db->order_by('SDEID', 'desc');
        $this->db->select('a.*, b.SERVICE, c.CATEGID, c.CATEGORY');
        $this->db->from('service_detail a');
        $this->db->join('services b', 'a.SID=b.SID');
        $this->db->join('service_category c', 'c.CATEGID=b.CATEGID');
        if($sdeid != 'x'){
            $this->db->where('SDEID', $sdeid);
        }
        $query = $this->db->get();

        if($sdeid != 'x'){
            return $query->row();
        } else {
            return $query->result();
        }
    }

    function updateServiceDetail($sdeid){
        $sid = $this->input->post('cmbService');
        $about = $this->input->post('txtAboutService');
        $_define_ = $this->input->post('txtDefine');
        $includes = $this->input->post('txtIncludes');
        $benefits = $this->input->post('txtBenefits');
        $duration = $this->input->post('txtServiceDuration');
        $variety = $this->input->post('txtVareity');
        $time = $this->input->post('txtServiceTime');
        $fee = $this->input->post('txtServiceFee');
        $free = $this->input->post('txtServiceFree');
        $discount_ = $this->input->post('txtServiceDiscount');
        $pic1 = 'x';
        $pic2 = 'x';
        $status = 1;
        $date_ = date('Y-m-d H:i:s');

        $data = array(
            'SID' => $sid,
            'ABOUT'=>$about,
            '_DEFINE_'=>$_define_,
            'INCLUDES'=>$includes,
            'BENEFITS'=>$benefits,
            'DURATION'=>$duration,
            'VAREITY'=>$variety,
            'TIME'=>$time,
            'FEE'=>$fee,
            'FREE_' => $free,
            'DISCOUNT_' => $discount_,
            'PIC1_PATH'=>$pic1,
            'PIC2_PATH'=>$pic2,
            'STATUS'=>$status,
            'DATE_'=>$date_
        );

        $this->db->where('SDEID', $sdeid);
        $query = $this->db->update('service_detail', $data);

        if($query == true){
            $this->session->set_flashdata('allmessage', 'service detail successfully updated.');
        } else {
            $this->session->set_flashdata('allmessage', 'something goes wrong. please try again');
        }
    }

    function deleteServcieDetail($sdeid){
        $this->db->where('SDEID', $sdeid);
        $query = $this->db->delete('service_detail');

        if($query == true){
            $this->session->set_flashdata('allmessage', 'service detail successfully deleted.');
        } else {
            $this->session->set_flashdata('allmessage', 'something goes wrong. please try again');
        }
    }

}