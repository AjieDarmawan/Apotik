<?php

class MSatker extends Model {

    function MSatker() {
        parent::Model();
    }

    function getAllSatkerPagination($perPage, $uri) {
        $data = array();
        $this->db->select('*');
        $this->db->from('satker');
        $this->db->order_by('inst_satkerkd');
        $getData = $this->db->get('', $perPage, $uri);
        if ($getData->num_rows() > 0)
            return $getData->result_array();
        else
            return null;
    }

    function SearchResult($perPage, $uri, $isi) {
        $this->db->select('*');
        $this->db->from('satker');
        if (!empty($isi)) {
            $this->db->like('inst_nama', $isi);
        }
        $this->db->order_by('inst_satkerkd', 'asc');
        $getData = $this->db->get('', $perPage, $uri);

        if ($getData->num_rows() > 0)
            return $getData->result_array();
        else
            return null;
    }

}

/* End of file msatker.php */
/* Location: ./application/models/msatker.php */