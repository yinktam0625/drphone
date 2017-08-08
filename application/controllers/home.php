<?php
    class Home extends CI_Controller {
        public function index() {
            $this->load->view("common/header.php");
            $this->load->view("homepage.php");
            $this->load->view("common/footer.php");
        }
    }
?>