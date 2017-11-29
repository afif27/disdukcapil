<?php
class Akmat extends Dashboard_Controller
{
    public $data = array(
        'halaman' => 'akmat',
        'main_view' => 'dashboard/akmat_form',
        'title'=>'Form Pembuatan KTP',
    );



    public function index()
     
     {

     $this->load->model('Pemohon_model','pemohon');
    $this->pemohon->get(1);
    $nik = $this->session->userdata('nik');
     $akmat2= $this->akmat->get(array('nik_pemohon' => $nik, 'status_akmat' => '1'));
    if(! $akmat2)
    {
         $this->session->set_flashdata('pesan', 'data akta belum ada silahkan lengkapi ' . anchor('dashboard/akmat/tambah', 'aktal.', 'class="alert-link"'));
                redirect('dashboard/akmat-tambah');
            } 
   
        // Data input dari user.
       
       $akmat = (object) $this->input->post(null, true);

        // Validasi.
        if ($this->akmat->validate('form_rules')) {
            if ($this->akmat->simpan($akmat)) {
                $this->session->set_flashdata('pesan', 'akta berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/home', 'home.', 'class="alert-link"'));
                redirect('dashboard/akmat-sukses');
            } else {
                $this->session->set_flashdata('pesan_error', 'Maaf, penyimpanan biodata gagal. Coba ' . anchor('dashboard/akmat', 'ulangi', 'class="alert-link"') .' beberapa saat lagi.');
                redirect('dashboard/akmat-error');
            }
        }

        // Data untuk form.
        if (!$_POST) {
            $nik2 = intval ($this->session->userdata('nik'));
             $this->data['values'] = (object) $this->akmat->get('nik_pemohon',$nik2);  
        } else {
            $this->data['values'] = $akmat;
        }
        $this->data['form_action'] = site_url('dashboard/akmat');
        $this->load->view($this->layout, $this->data);
    }

    public function tambah()
    {
        $this->data['main_view'] = 'dashboard/akmat_form';
        $this->data['form_action'] = site_url('dashboard/akmat/tambah');

        // Data untuk form.
        if (! $_POST) {
            $akmat= $this->akmat->default_values;
        } else {
            $akmat = $this->input->post(null, true);
        }

        // Validasi.
        if (! $this->akmat->validate('form_rules')) {
            $this->data['values'] = (object) $akmat;
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan ke DB.
        if ($this->akmat->tambah($akmat)) {
            $this->session->set_flashdata('pesan', 'akta berhasil disimpan. Kembali ke halaman ' . anchor('dashboard/akmat', 'akta.', 'class="alert-link"'));
            redirect('dashboard/akmat/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'akta gagal disimpan. Kembali ke halaman ' . anchor('dashboard/akmat', 'akta.', 'class="alert-link"'));
            redirect('dashboard/akmat/error');
        }
    }
    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'akmat Sukses';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'akmat Error';
        $this->load->view($this->layout, $this->data);
    }

    public function preview()
    {
        $this->data['main_view'] = 'dashboard/akmat_preview';
        $this->data['halaman'] = 'cetak-akmat';

        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon = $this->akmat->get(array('nik_pemohon' => $id, 'status_akmat' => '1'));

        if ($pemohon) {
            $this->data['pemohon'] = $pemohon;
            $this->load->view($this->layout, $this->data);
        } else {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data akta Silakan melengkapi ' . anchor('dashboard/akmat', 'akta.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/akmat-preview-error');
        }
    }

    public function cetak()
    {
        // Cek status biodata untuk no_peserta yang ada sedang login ini (session)
        $id = $this->session->userdata('nik');
        $pemohon= $this->akmat->get(array('nik_pemohon' => $id, 'status_akmat' => '1'));
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Anda belum melengkapi data. Silakan melengkapi ' . anchor('dashboard/akmat', 'akmat.', 'class="alert-link"') . ' dahulu!');
            redirect('dashboard/akmat-cetak-error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/akmat_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $nik= $pemohon->nik_pemohon;

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'F4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('akmat_'.$nik.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/akmat-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
            redirect('dashboard/akmat-cetak-error');
        }
    }

    // -------------------------------------------------------------------------
    // Fungsi Callback
    // -------------------------------------------------------------------------

  
}

   