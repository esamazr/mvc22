<?php
namespace gg;
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUsers() {
        return $this->db->get('user');
    }
    public function getUser($id){
        $this->db->where("id",$id);
        return $this->db->get("user");
    }
    public function addUser($data) {
        return $this->db->insert('user', $data);
    }
    public function updateUser($id, $data) {
        return $this->db->where('id', $id)->update('user', $data);
    }
    
    public function deleteUser($id) {
        return $this->db->where('id', $id)->delete('user');
    }
    // public function deleUser()
}
?>













































