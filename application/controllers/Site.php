<?php


class Site extends CI_Controller
{
    public function index()
    {
        $this->load->view('site/welcome_message');
    }

}