<?php
defined('BASEPATH') || exit('No direct script access allowed');

class CurriculoController extends CI_Controller
{

    public function VerPagina()
    {
        $this->load->view('CurriculoView');
    }
}