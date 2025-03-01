<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_auth extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function cek_login($username, $password) {
        $result = $this->db->where('username', $username)
                           ->where('password', $password)
                           ->limit(1)
                           ->get('admin'); // Pastikan ini sesuai dengan nama tabel di database

        if ($result->num_rows() > 0) {
            return $result->row(); // Mengembalikan data pengguna
        } else {
            return false; // Login gagal
        }
    }
}
?>
