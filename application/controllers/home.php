<?php
//error_reporting(0);
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller {

    private $user;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User');
        $this->user = new User();
    }

    public function index() {
        $this->main();
    }

    private function render($name, $title, $page_info, $content, $web_title) {
        $page['page_name'] = $name;
        $page['page_info'] = $page_info;
        $page['content'] = $content;
        $page['web_title'] = $web_title;

        $page['name'] = $this->user->get_name();
        
        $data['page_title'] = $title;
        $data["sub_menu"] = $this->load->view("site/submenu", $page, true);
        $data['main_content'] = $this->load->view("site/main_page", $page, true);

        $this->load->view("site/main", $data);
    }

    public function main() {
        $content = $this->load->view("site/homepage", "", TRUE);
        $this->render("Wysiwyg.com", "Wysiwyg.com", "Information Here..", $content, "Information Here..");
    }

    public function sign_up() {
        if ($this->input->post('submit')) {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => crypt($this->input->post('password')),
                'name' => $this->input->post('name'),
                'permission' => 0
            );

            $this->user->create_user($data);
        }
    }
    
    public function logout(){
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->main();
    }

    public function check_email_exist() {
        $email = mysql_real_escape_string($this->input->post('email'));
        $result = $this->user->look_up($email);
        if ($result) {
            echo "false";
        } else {
            echo "true";
        }
    }
    
    public function login($_email = FALSE, $_pass = FALSE){
        if($this->input->post('login')){
            $email = ($this->input->post('email') ? mysql_escape_string($this->input->post('email')) : $_email);
            $pass = ($this->input->post('password') ? mysql_escape_string($this->input->post('password')) : $_pass);
            $result = $this->user->verify_login($email, $pass);
            
            if($result){
                $sess_array = array();
                foreach($result AS $row){
                    $sess_array = array(
                        //'id' => $row->id,
                        'email' => $row->email
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return TRUE;
            }
            
        }
    }
}
