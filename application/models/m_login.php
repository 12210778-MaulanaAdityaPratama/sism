<?php 
// Model
class m_login extends CI_Model {

    public function cek_login($table, $where) {
        // Validasi parameter
        if (empty($table) || !is_array($where)) {
            // Handle error, misalnya throw exception atau log pesan kesalahan
            return false;
        }

        // Pastikan parameter aman sebelum menjalankan query
        $this->db->from($table)->where($where);

        return $this->db->get()->row_array();
    }
}
