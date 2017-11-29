<?php
class Ktp extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'ktp',
        'main_view' => 'dashboard/ktp_form',
        'title'=>'Form Pembuatan KTP',
    );



    public function index()
     
     {

     $this->load->model('Pemohon_model','pemohon');
    $this->pemohon->get(1);
    $nik = $this->session->userdata('nik');
    $ktp2 = $this->ktp->get(array('nik' => $nik, 'status_ktp' => '1'));;

    //pastikan ktp ada
    if(! $ktp2)
    {
         $this->session->set_flashdata('pesan', 'data ktp belum ada silahkan lengkapi ' . anchor('dashboard/ktp/tambah', 'ktp.', 'class="alert-link"'));
                redirect('dashboard/ktp-tambah');
            } 
   
        // Data input dari user.
       
       $ktp = (object) $this->input->post(null, true);


        // Validasi.
        if ($this->ktp->validate('form_rules')) {
            if ($this->ktp->simpan($ktp)) {
                $this->session->set_flashdata('pesan', 'ktp berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/ktp-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan biodata gagal. Coba ' . anchor('dashboard/ktp', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/ktp-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $nik2 =  ($this->session->userdata('nik'));
             $this->data['values'] = (object) $this->ktp->get('nik',$nik2);  
        } else {
            $this->data['values'] = (object) $ktp;
        }
        $this->data['form_action'] = site_url('dashboard/ktp');
        $this->load->view($this->layout, $this->data);
    }

    public function tambah()
    {
        $this->data['main_view'] = 'dashboard/ktp_form';
        $this->data['form_action'] = site_url('dashboard/ktp/tambah');

        // Data untuk form.
        if (! $_POST) {
            $ktp= $this->ktp->default_values;
        } else {
            $ktp = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->ktp->validate('form_rules')) {
            $this->data['values'] = (object) $ktp;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->ktp->tambah($ktp)) {
            $this->session->set_flashdata('pesan', 'Pengumuman berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/ktp', 'ktp.', 'class="alert-link"'));
            redirect('dashboard/ktp/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Pengumuman gagal disimpan. Kembali ke halaman ' . anchor('dashboard/ktp', 'ktp.', 'class="alert-link"'));
            redirect('dashboard/ktp/error');
        }
    }

        
    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Ktp Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Ktp Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/ktp_preview';
        $this->data['halaman'] = 'cetak-ktp';

        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon = $this->ktp->get(array('nik' => $id, 'status_ktp' => '1'));

        if ($pemohon) {
            $this->data['pemohon'] = $pemohon;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data ktp Silakan melengkapi ' . anchor('dashboard/ktp', 'ktp.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/ktp-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon= $this->ktp->get(array('nik' => $id, 'status_ktp' => '1'));
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data. Silakan melengkapi ' . anchor('dashboard/ktp', 'ktp.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/ktp-cetak-error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/ktp_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $nik= $pemohon->nik;

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('ktp_'.$nik.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/ktp-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/ktp-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

  
}

   