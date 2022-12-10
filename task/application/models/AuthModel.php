
<?php


class AuthModel extends CI_Model{




    public function insert_item($table,$data)
    {    
        
        return $this->db->insert($table, $data);
    }
    
    public function userLogin($data){ 

        $this->db->select('*');
        $this->db->from('user');

        $this->db->where($data);
        $query = $this->db->get();
        return $query->row_array();
    }
}?>
