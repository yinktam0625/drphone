<?php
    class Maintenance extends CI_Controller {
        public function index() {
            $this->load->view("common/header.php");
            $this->load->view("maintenancepage.php");
            $this->load->view("common/footer.php");
        }
    }
?>