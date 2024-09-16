<?php

class Home extends Controller{

    public function index(){


        $this->view('home/index');
    }
    public function contact(){


        if($_POST){
            $index = $this->model('Index');

            $index->name = $_POST['name'];
            $index->email = $_POST['email'];
            $index->phone = $_POST['phone'];
            $index->message = $_POST['message'];
            $index->company = $_POST['company'];

            setcookie("name",$index->name,time()+5);
            setcookie("email",$index->email,time()+5);
            setcookie("phone",$index->phone,time()+5);
            setcookie("message",$index->message,time()+5);
            setcookie("company",$index->message,time()+5);

            if (empty($index->name) || empty($index->email) || empty($index->phone) || empty($index->message) || empty($index->company) )
            {
                $error= 'Boş alan bırakılamaz. Lütfen tekrar deneyin.';
            }else{
                $mailPosts= $index->sendEmail($index->name, $index->email, $index->phone, $index->message, $index->company);
            }

            header('Location: '.URL . LANGUAGE .'/home/contact');

        }else{
            $this->view('home/contact');
        }



    }

}