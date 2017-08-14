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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        
        $data['serviceDetails'] = $this->mm->getServiceDetail($sid);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];

        $category = str_replace('-', ' ', $category);
        $data['page_name'] = 'Services - '.$category;
        $data['allservices'] = $this->mm->getServices($categid);
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['allresources'] = $this->mm->getServices(4);
        $data['menuActive'] = 3;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('services', $data);
        $this->load->view('templates/footer');
    }

    public function membership() {
        $categid = 7;
        $category_ = 'Special-Packages';

        $data_ = $this->my_library->heading_for_page(5);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['menuActive'] = 3;

        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['allresources'] = $this->mm->getServices(4);
        $data['allservices'] = $this->mm->getServices($categid);
        $data['categid'] = $categid;
        $data['category'] = $category_;

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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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
        $data['allresources'] = $this->mm->getServices(4);
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

   function contactus(){
        $this->email->set_mailtype("html");

        $msg = "Enquiry below:<br /><br />";
        $msg = $msg . $this->input->post('txtmessage');

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtname');

        $to_ = 'info@auraveda.in,info.auraveda@gmail.com';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);
        $this->email->bcc('ttchld@gmail.com');

        $this->email->subject('Enquiry from auraveda.in');
        $this->email->message($msg);

        if($this->email->send()){
            $this->session->set_flashdata('allmessage', 'Thanks for Contacting us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('allmessage', 'Something goes wrong. Please try again...');
        }

        redirect('wellness/contact');
   }

   function book_online(){
        $this->email->set_mailtype("html");

        $msg = "<h2>Online Booking below:</h2><br />";
        $msg = $msg . "<b>Date of Appointment needed</b>: " . $this->input->post('txtAppointmentDate') . "<br /><br />";
        $msg = $msg . "<b>Prefered Time</b>: " . $this->input->post('preTime') . "<br /><br />";
        $msg = $msg . "<b>Appointment Purpose</b>: " . $this->input->post('txtPurpose') . "<br /><br />";
        $msg = $msg . "<b>No. of Persons: </b><br> Male: " . $this->input->post('txtNoMales') .  "  FeMale: " . $this->input->post('txtNoFeMales') . "<br /><br />";
        $msg = $msg . "<b><u>Special Note</u></b>:<br /> " . $this->input->post('txtSpNotes') . "<br /><br />";

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtFirstName') . " " . $this->input->post('txtLastName') . "<br />";
        $msg = $msg . "Gender: " . $this->input->post('optGender') . "<br />";
        $msg = $msg . "<u><b>Address</b></u>:<br /> " . $this->input->post('txtAddress') . "<br />";
        $msg = $msg . $this->input->post('txtClientEmail') . "<br />";
        $msg = $msg . $this->input->post('txtClientMobile');

        $to_ = 'info.auraveda@gmail.com';
        //$to_ = 'navtewari@gmail.com';
        $from_ = $this->input->post('txtClientEmail');
        $name_ = 'Online Booking...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Online Appointment Booking from auraveda.in');
        $this->email->message($msg);

        if($this->email->send()){
            $this->session->set_flashdata('allmessage', 'Thank you for requesting an online appointment. You will receive a confirmation email from us within 24 hours. Please call +918527008995 or 011-45049180 for more details. ');
        } else {
            $this->session->set_flashdata('allmessage', 'Something goes wrong. Please try again...');
        }

        redirect('wellness/book');
   }

   function giftcard(){
        $data_ = $this->my_library->heading_for_page(15);

        $data['desc_'] = $data_['metadesc_'];
        $data['title'] = $data_['title'];
        $data['page_name'] = $data_['pagename'];
        $data['servicemenu'] = $this->mm->getserviceCategory();
        $data['allresources'] = $this->mm->getServices(4);
        $data['menuActive'] = 6;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('gift_card');
        $this->load->view('templates/footer');
   }

   function gift_a_card(){
        $this->email->set_mailtype("html");

        $msg = "<h2>Gift Cards for your loved ones:</h2><br />";

        $msg = $msg . "<b><font color='#ff0000'>Gift a card to</b>: " . $this->input->post('txtNameForGiftCard') . "</font><br /><br />";
        $msg = $msg . "<b>Date of Appointment needed</b>: " . $this->input->post('txtAppointmentDate') . "<br /><br />";
        $msg = $msg . "<b>Prefered Time</b>: " . $this->input->post('preTime') . "<br /><br />";
        $msg = $msg . "<b>Gifted Card</b>: " . $this->input->post('txtGift') . "<br /><br />";
        $msg = $msg . "<b>No. of Persons</b>: " . $this->input->post('txtNoPerson') . "<br /><br />";
        $msg = $msg . "<b><u>Special Note</u></b>:<br /> " . $this->input->post('txtSpNotes') . "<br /><br />";

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtName') . "<br />";
        $msg = $msg . "<u><b>Address</b></u>:<br /> " . $this->input->post('txtAddress') . "<br />";
        $msg = $msg . $this->input->post('txtClientEmail') . "<br />";
        $msg = $msg . $this->input->post('txtClientMobile');

        $to_ = 'info.auraveda@gmail.com';
        $from_ = $this->input->post('txtClientEmail');
        $name_ = 'Gifting Card...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Gifting Card from auraveda.in');
        $this->email->message($msg);

        if($this->email->send()){
            $this->session->set_flashdata('allmessage', 'Thank you for selecting this e-gift card. You will receive a confirmation email from us within 24 hours. Please call +918527008995 or 011-45049180 for more details');
        } else {
            $this->session->set_flashdata('allmessage', 'Something goes wrong. Please try again...');
        }

        redirect('wellness/giftcard');
   }

   function apply(){

            $config = array(
                'upload_path' => './assets_/resume',
                'allowed_types' => 'doc|docx|pdf',
            );
            $file_element_name = 'txtUploadResume';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload($file_element_name)) {
                $path_ji = $this->upload->data();
                $path_ = $path_ji['full_path'];
            } else {
                $path_ = 'x';
            }

        $this->email->set_mailtype("html");

        $msg = "<h2>Post Application below:</h2><br />";
        $msg = $msg . "<b>Post Applied for</b>: " . $this->input->post('txtPostAppliedFor') . "<br /><br />";
        $msg = $msg . "<b>Applicant Name</b>: " . $this->input->post('txtName') . "<br /><br />";
        $msg = $msg . "<b>Gender</b>: " . $this->input->post('optGender') . "<br /><br />";
        $msg = $msg . "<b>Experience</b>: " . $this->input->post('experienceYear') . " Year(s) " . $this->input->post('experienceMonth') . " Month(s) and " . $this->input->post('experienceDays') . " Days<br /><br />";
        $msg = $msg . "<b>Notice Period</b>: Joining Could be... " . $this->input->post('noticePeriod') . "<br /><br />";
        $msg = $msg . "<b>Prefered Location</b>: " . $this->input->post('preferredLocation') . "<br /><br />";
        $msg = $msg . "<b>Salary Expectation</b>: " . $this->input->post('salaryExpectation') . "<br /><br />";
        $msg = $msg . "<b><u>Resume</u></b>: " . "Please find attachment" . "<br /><br />";

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtName') . "<br />";
        $msg = $msg . "<u><b>Address</b></u>:<br /> " . $this->input->post('txtAddress') . "<br />";
        $msg = $msg . $this->input->post('txtClientEmail') . "<br />";
        $msg = $msg . $this->input->post('txtClientMobile');

        $to_ = 'info.auraveda@gmail.com';
        //$to_ = 'nitin.d12@gmail.com';
        $from_ = $this->input->post('txtClientEmail');
        $name_ = 'Post Application...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Post Application below from auraveda.in');
        $this->email->message($msg);
        $this->email->attach($path_);
        if($this->email->send()){
            $this->session->set_flashdata('allmessage', 'Thanks for your application. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('allmessage', 'Something goes wrong. Please try again...');
        }

        redirect('wellness/career');
   }
   
   function newsletter(){
        $page = $this->input->post('page');
       $this->email->set_mailtype("html");

        $msg = "Newsletter Subscription:<br /><br />";
        
        $msg = $msg . "From<br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtFirstName');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtEmail');

        $to_ = 'info@auraveda.in,info.auraveda@gmail.com';
        $from_ = $this->input->post('txtEmail');
        $name_ = 'Newsletter Subscription';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Newsletter Subscription from auraveda.in');
        $this->email->message($msg);

        if($this->email->send()){
            $this->session->set_flashdata('_msg_', 'We appreciate it and look forward to delivering authentic Ayurveda knowledge.');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }

        redirect($page);
   }

}
