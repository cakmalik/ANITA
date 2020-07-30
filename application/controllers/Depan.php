<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Depan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->db->get_where('uji');
    }
}
