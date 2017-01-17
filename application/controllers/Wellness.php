<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wellness extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }
    public function index() {
        $data_ = $this->my_library->heading_for_page(1);
        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 1;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    public function auraveda_at_glance() {
        $data_ = $this->my_library->heading_for_page(2);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    public function photo_gallery() {
        $data_ = $this->my_library->heading_for_page(3);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('gallery');
        $this->load->view('templates/footer');
    }

    public function services_we_offer($category, $categid, $sid) {
        $data_ = $this->my_library->heading_for_page(4);
        
        $service = $data['service_'] = $this->mm->getServiceformenu($sid);
        $data['category'] = $category;
        $data['categid'] = $categid;
        //$categid = $this->mm->getServiceCategoryID($category);
        $data['serviceDetails'] = $this->mm->getServiceDetail($sid);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];

        $category = str_replace('-', ' ', $category);
        $data['page_name'] = 'Services - '.$category;
        $data['allservices'] = $this->mm->getServices($categid);
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 3;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('services', $data);
        $this->load->view('templates/footer');
    }

    public function membership() {
        $data_ = $this->my_library->heading_for_page(5);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 3;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('membership_offer');
        $this->load->view('templates/footer');
    }

    public function ayurveda_basic_principles() {
        $data_ = $this->my_library->heading_for_page(6);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('basic_principles');
        $this->load->view('templates/footer');
    }

    public function ayurvedic_methodology() {
        $data_ = $this->my_library->heading_for_page(7);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('methodology');
        $this->load->view('templates/footer');
    }

    public function panchakarma_role() {
        $data_ = $this->my_library->heading_for_page(8);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('role');
        $this->load->view('templates/footer');
    }

    public function rejuvenation_concept() {
        $data_ = $this->my_library->heading_for_page(9);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('concept');
        $this->load->view('templates/footer');
    }

    public function therapies_types($page) {
        $data_ = $this->my_library->heading_for_page(10);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;
        $data['pagiActive'] = $page;
                
        $page='therapies_types' . $page;
        
        if ( ! file_exists(FCPATH.'application/views/'.$page.'.php'))
        {
            // yet to code error page to show
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view($page);
        $this->load->view('templates/therapies_pagination');
        $this->load->view('templates/footer');
    }

    public function ayurveda_medicines() {
        $data_ = $this->my_library->heading_for_page(11);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 5;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('medicines');
        $this->load->view('templates/footer');
    }

    public function book() {
        $data_ = $this->my_library->heading_for_page(12);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 6;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('booknow');
        $this->load->view('templates/footer');
    }

    public function career() {
        $data_ = $this->my_library->heading_for_page(13);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 7;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('career');
        $this->load->view('templates/footer');
    }

    public function contact() {
        $data_ = $this->my_library->heading_for_page(14);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 8;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('location');
        $this->load->view('templates/footer');
    }
    
    public function pagination($page)
    {
        $data_ = $this->my_library->heading_for_page(10);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['menuActive'] = 4;

        $page='therapies_types' . $page;
        
        if ( ! file_exists(FCPATH.'application/views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            //show_404();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view($page);
        $this->load->view('templates/footer');
   }
}
