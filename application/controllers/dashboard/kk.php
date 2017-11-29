<?php
class Kk extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'kk',
        'main_view' => 'dashboard/kk_form',
        'title'=>'Form Pembuatan KK',
    );



    public function index()
     
     {

     $this->load->model('Pemohon_model','pemohon');
    $this->pemohon->get(1);
    $nik = $this->session->userdata('nik');
    $kk2= $this->kk->get(array('nik_pemohon' => $nik, 'status_kk' => '1'));
    if(! $kk2)
    {
         $this->session->set_flashdata('pesan', 'data akta belum ada silahkan lengkapi ' . anchor('dashboard/kk/tambah', 'kk.', 'class="alert-link"'));
                redirect('dashboard/kk-tambah');
            } 
   
        // Data input dari user.
       
       $kk = (object) $this->input->post(null, true);

        // Validasi.
        if ($this->kk->validate('form_rules')) {
            if ($this->kk->simpan($kk)) {
                $this->session->set_flashdata('pesan', 'akta berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/kk-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan biodata gagal. Coba ' . anchor('dashboard/kk', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/kk-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $nik2 = ($this->session->userdata('nik'));
             $this->data['values'] = (object) $this->kk->get('nik_pemohon',$nik2);  
        } else {
            $this->data['values'] = (object) $kk;
        }
        $this->data['form_action'] = site_url('dashboard/kk');
        $this->load->view($this->layout, $this->data);
    }

    public function tambah()
    {
        $this->data['main_view'] = 'dashboard/kk_form';
        $this->data['form_action'] = site_url('dashboard/kk/tambah');

        // Data untuk form.
        if (! $_POST) {
            $kk= $this->kk->default_values;
        } else {
            $kk = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->kk->validate('form_rules')) {
            $this->data['values'] = (object) $kk;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->kk->tambah($kk)) {
            $this->session->set_flashdata('pesan', 'kk berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/kk', 'kk.', 'class="alert-link"'));
            redirect('dashboard/kk/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'kk gagal disimpan. Kembali ke halaman ' . anchor('dashboard/kk', 'kk.', 'class="alert-link"'));
            redirect('dashboard/kk/error');
        }
    }
    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'kk Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'kk Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/kk_preview';
        $this->data['halaman'] = 'cetak-kk';

        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon = $this->kk->get(array('nik_pemohon' => $id, 'status_kk' => '1'));

        if ($pemohon) {
            $this->data['pemohon'] = $pemohon;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data akta Silakan melengkapi ' . anchor('dashboard/kk', 'akta.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/kk-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon= $this->kk->get(array('nik_pemohon' => $id, 'status_kk' => '1'));
        if (!$pemohon) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data. Silakan melengkapi ' . anchor('dashboard/kk', 'kk.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/kk-cetak-error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/kk_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $nik= $pemohon->nik_pemohon;

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'F4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('kk_'.$nik.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/kk-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/kk-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

  
}

   