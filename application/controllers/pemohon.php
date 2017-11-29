<?php
class Pemohon extends Public_Controller
{
    public $data = array(
        'halaman' => 'pemohon',
        'main_view' => 'pemohon_list',
    );

	public function index($offset = null)
	{ 
        $peserta = $this->pemohon->get_all_paged($offset);
        if ($pemohon) {
            $this->data['pemohon'] = $pemohon;
            $this->data['paging'] = $this->pemohon->paging('biasa', site_url('pemohon/halaman/'), 3);
        } else {
            $this->data['pemohon'] = 'Tidak ada data peserta.';
        }
        $this->data['form_action'] = site_url('pemohon/cari');
        $this->load->view($this->layout, $this->data);
	}

    public function cari($offset = 0)
    {
        $peserta = $this->pemohon->cari($offset);
        if ($peserta) {
            $this->data['pemohon'] = $pemohon;
            $this->data['paging'] = $this->pemohon->paging('pencarian', site_url('pemohon/cari/'), 3);
        } else {
            $this->data['pemohon'] = 'Data tidak ditemukan.'. anchor('peserta', ' Tampilkan semua peserta.', 'class="alert-link"');
        }
        $this->data['form_action'] = site_url('pemohon/cari');
        $this->load->view($this->layout, $this->data);
    }    
}