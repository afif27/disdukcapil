<?php
class Jadwal extends Public_Controller
{
    public $data = array(
        'halaman' => 'syarat',
        'main_view' => 'syarat',
        'title' => 'Syarat-Syarat Pengurusan KTP, KK, Akta Kelahiran, Akta Kematian',
    );

    public function index()
    {
        $this->load->view($this->layout, $this->data);
    }
}