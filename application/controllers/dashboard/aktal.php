<?php
class Aktal extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'aktal',
        'main_view' => 'dashboard/aktal_form',
        'title'=>'Form Pembuatan akta',
    );



    public function index()
     
     {

     $this->load->model('Pemohon_model','pemohon');
    $this->pemohon->get(1);
    $nik = $this->session->userdata('nik');
    $aktal2 = $this->aktal->get(array('nik_pemohon' => $nik, 'status_aktal' => '1'));

     if(! $aktal2)
    {
         $this->session->set_flashdata('pesan', 'data akta belum ada silahkan lengkapi ' . anchor('dashboard/aktal/tambah', 'aktal.', 'class="alert-link"'));
                redirect('dashboard/aktal-tambah');
            } 
   
   
        // Data input dari user.

       
       $aktal = (object) $this->input->post(null, true);

        // Validasi.
        if ($this->aktal->validate('form_rules')) {
            if ($this->aktal->simpan($aktal)) {
                $this->session->set_flashdata('pesan', 'Akta berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/aktal-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan akta  gagal. Coba ' . anchor('dashboard/aktal', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/aktal-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $nik2 = intval ($this->session->userdata('nik'));
             $this->data['values'] = (object) $this->aktal->get('nik_pemohon', $nik2);  
        } else {
            $this->data['values'] =  (object) $aktal;
        }
        $this->data['form_action'] = site_url('dashboard/aktal');
        $this->load->view($this->layout, $this->data);
    }

     public function tambah()
    {
        $this->data['main_view'] = 'dashboard/aktal_form';
        $this->data['form_action'] = site_url('dashboard/aktal/tambah');

        // Data untuk form.
        if (! $_POST) {
            $aktal= $this->aktal->default_values;
        } else {
            $aktal = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->aktal->validate('form_rules')) {
            $this->data['values'] = (object) $aktal;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->aktal->tambah($aktal)) {
            $this->session->set_flashdata('pesan', 'Pengumuman berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/aktal', 'akta.', 'class="alert-link"'));
            redirect('dashboard/aktal/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Pengumuman gagal disimpan. Kembali ke halaman ' . anchor('dashboard/aktal', 'akta.', 'class="alert-link"'));
            redirect('dashboard/aktal/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Aktal Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Akta Kelahiran Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/aktal_preview';
        $this->data['halaman'] = 'cetak-aktal';

        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon = $this->aktal->get(array('nik_pemohon' => $id, 'status_aktal' => '1'));

        if ($pemohon) {
            $this->data['pemohon'] = $pemohon;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data akta Silakan melengkapi ' . anchor('dashboard/aktal', 'aktal.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/aktal-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon= $this->aktal->get(array('nik_pemohon' => $id, 'status_aktal' => '1'));
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data. Silakan melengkapi ' . anchor('dashboard/aktal', 'aktal.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/aktal-cetak-error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/aktal_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $nik= $pemohon->nik_pemohon;

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'F4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('aktalahir.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/aktal-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/aktal-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

  
}

   