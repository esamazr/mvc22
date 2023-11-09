<?php
// app/controllers/UserController.php
// namespace Usercontr;
class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $users = $this->model->getUsers();
        
        include 'app/views/user_list.php';
    }
    public function getUser(){
        $user = $this->model->getUser($_GET["id"]);
        include "./app/views/update_user.php";
    }
    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username=$_POST['email'];
            $email=$_POST['password'];
            $rule=$_POST['rule'];
            $data = [
                'email' =>$username ,
                'password' => $email ,
                'rule'=>$rule
            ];

            if ($this->model->addUser($data)) {
                echo "User added successfully!";
            } else {
                echo "Failed to add user.";
            }
        }
    }
    public function updateUser()
    {
        if (isset($_POST['ubdaet'])){
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if (!$id) {
            echo "Missing ID!";
            return;
        }
 
        $data = array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'rule' => $_POST['rule']
        );

        $result = $this->model->updateUser($id, $data);

        if ($result) {
            echo "User updated successfully!";
            header('location' . ESAM );
        } else {
            echo "Failed to update user!";
        }
        }
    }
    public function deleteUser()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if (!$id) {
            echo "Missing ID!";
            return;
        }
        
        $result = $this->model->deleteUser($id);

        if ($result) {
            echo "User deleted successfully!";
        } else {
            echo "Failed to delete user!";
        }
    }
}
?>




