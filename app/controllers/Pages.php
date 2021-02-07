<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

        public function __construct() {
            $this->pages= $this->model('Pages_');
        }

        public function index() {

            $data = [];
            
            $this->view('pages/index', $data);

        }

        public function blog() {

            $data = [
                'blog'=>$this->pages->getblog()
            ];
            
            $this->view('pages/blog', $data);

        }


        public function contact() {

            $data = [];
            
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                if($this->Pages_->addcontact($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['message'])) {
                    $data = [
                        'title' => "Contact added"
                    ];
                }
            } else {
                $data = [
                    'title' => "Please fill out your info below"
                ];
            }
            $this->view('pages/contact', $data);
        }

           

        public function portfolio() {

            $data = [
                'classes'=>$this->pages->getclasses()
            ];
            
            $this->view('pages/portfolio', $data);

        }

        public function about() {

            $data = [];
            
            $this->view('pages/about', $data);

        }

        public function hobby() {

            $data = [
                'hobbys'=>$this->pages->gethobbys()
            ];
            
            $this->view('pages/hobby', $data);

        }

        public function feedback() {

            $data = [
                'feedback'=>$this->pages->getfeedback()
            ];
            
            $this->view('pages/feedback', $data);

        }

    }

?>