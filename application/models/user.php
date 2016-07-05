<?php

class User extends CI_Model {

    private $_db;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->_db = $this->load->database('default', TRUE);
    }

    function create_user($data) {
        $this->_db->insert('users', $data);
        $this->session->set_userdata('email', $data['email']);
        $this->session->set_userdata('authenticated', TRUE);
        redirect(base_url());
    }

    function look_up($email) {
        $this->_db->where('email', $email);
        $query = $this->_db->get('users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

//    function verify_login($email, $password) {
//        $this->_db->select('id, email, password');
//        $this->_db->from('users');
//        $this->_db->where('email', $email);
//        $this->_db->where('password', crypt($password));
//        $this->_db->limit(1);
//        $query = $this->_db->get();
//        if(){
//            
//        }
//    }

    function get_name() {
        $query = $this->_db->query("SELECT name FROM users WHERE email LIKE '%{$this->session->userdata('email')}%' LIMIT 1");
        return $query->result();
    }

}
