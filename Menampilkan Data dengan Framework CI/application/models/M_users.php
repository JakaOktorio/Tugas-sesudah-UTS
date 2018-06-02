<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_users extends CI_Model {

        private $id;
        private $name;
        private $alamat;

        public function get_users()
        {
                $query = $this->db->get('users');
                return $query->result();
        }
}