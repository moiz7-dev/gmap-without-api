<!-- INSERT INTO `employee` (`id`, `name`, `latitude`, `longitude`) VALUES ('1', 'john', '22.69407956684596', '75.83933962535919');
 -->
<?php
    class Gmap_model extends CI_Model{
        public function insert($data){
            $this->db->insert('employees', $data);
        }

        public function retrieve(){
            return $this->db->get('employees')->result_array();
        }

        public function show($id){
            $this->db->select('latitude, longitude');
            $this->db->where('id', $id);
            return $this->db->get('employees')->result_array();
        }

        public function delete($id){
            $this->db->where('id', $id);
            $this->db->delete('employees');
        }
    }