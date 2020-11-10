<?phpclass Main_model extends CI_Model{
    function insert_data($data){
        $this->db->insert("c_app",$data);
    }
}