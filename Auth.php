<?php 

class Auth extends CI_Controller
{
    public function login(){
      
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','password','required');

            if($this->form_validation->run() == True){
               //
            // echo 'form_validated';
            $email=$_POST['email'];
            $password=md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('email'=>$email, 'password'=>$password));
            $query =$this->db->get();
            $user= $query->row();
            
            }
        $this->load->view('login');
    }



    public function registration(){

        if(isset($_POST['registration'])){
            $this->form_validation->set_rules('username','username','required');
            $this->form_validation->set_rules('password','password','required');

            if($this->form_validation->run() == True){
                echo 'form_validated';

                 $data =array(

                    'username'=>$_POST('username'),
                    'email'=>$_POST('email'),
                    'password'=>md5($_POST('password')),
                    'mobile'=>$_POST('mobile'),
                    'state'=>$_POST('state'),
                    'gender'=>$_POST('gender')

                 );

                 $this->db->insert(users, $data);




            }
        }
        $this->load->view('registration');
    }

}