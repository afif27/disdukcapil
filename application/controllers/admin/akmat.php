<?php
class Akmat extends Operator_Controller
{
    public $data = array(
        'halaman' => 'akmat',
        'main_view' => 'admin/akmat_list',
        'title' => 'Data Akta',
    );

    public function index($offset = 0)
    {
        $pemohon = $this->akmat->get_all_paged($offset);
        if ($pemohon) {
            $this->data['akmat'] = $pemohon;
            $this->data['paging'] = $this->akmat->paging('biasa', site_url('admin/akmat/halaman/'), 4);
        } else {
            $this->data['aktal'] = 'Tidak ada data .';
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $pemohon = $this->akmat->cari($offset);
        if ($pemohon) {
            $this->data['akmat'] = $pemohon;
            $this->data['paging'] = $this->aktal->paging('pencarian', site_url('admin/akmat/cari/'), 4);
        } else {
            $this->data['akmat'] = 'Data tidak ditemukan.'. anchor('admin/akmat', ' Tampilkan semua data.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

      public function edit($id)
    {
        // Pastikan data biodata ada.
        if (! $this->akmat->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data tidak ada. Kembali ke halaman ' . anchor('admin/aktal', 'akta.', 'class="alert-link"'));
            redirect('admin/biodata/error');
        }

        // Data untuk form.
        if (!$_POST) {    
            $akmat= $this->akmat->get($id);
            $this->data['values'] = (object) $akmat;
        } else {
            $akmat = $this->input->post(null, true);
            $this->data['values'] = (object) $akmat;
        }

        // Validasi.
        if (! $this->akmat->validate('form_rules')) {
            $this->data['main_view'] = 'dashboard/akmat_form';
            $this->data['form_action'] = site_url('admin/akmat/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan biodata.
        if ($this->akmat->simpan($akmat)) {
            $this->session->set_flashdata('pesan', 'akta berhasil disimpan. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Biodata berhasil disimpan. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
    }

    public function cetak($id)
    {
        // Pastikan data peserta ada.
        $pemohon = $this->akmat->get($id);
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data peserta tidak ada. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/akmat_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_peserta = format_no_pemohon($id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('akmat_'.$no_peserta.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/error');
        }
    }

    public function cetak_laporan()
    {
        // Pastikan data peserta ada.
         $pemohon = $this->akmat->get_all() ;
        if ( !$pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data Akta tidak ada. Kembali ke halaman ' . anchor('admin/akmat', 'akmat.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/laporan_akmat_pdf', $data, true);
        // Nomor perserta (untuk nama file)

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('ktp.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/akmat', 'akmat.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
    }

    public function sukses()
    {
        $this->data['main_view'] = 'sukses';
        $this->data['title'] = 'Data Peserta';
        $this->load->view($this->layout, $this->data);
    }

    public function error()
    {
        $this->data['main_view'] = 'error';
        $this->data['title'] = 'Data Peserta';
        $this->load->view($this->layout, $this->data);
    }

    public function hapus($id)
    {
        // Pastikan hanya admin yang bisa menghapus data kontak.
        if ($this->session->userdata('user_level') != 'administrator') {
            $this->session->set_flashdata('pesan_error', 'Anda tidak berhak menghapus data peserta. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }

        // Pastikan data peserta ada.
        if (! $this->akmat->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data akta tidak ada. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }

        // Hapus
        if ($this->akmat->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_verifikasi($id)
    {
        // Pastikan data peserta ada.
        $pemohon = $this->akmat->get($id);
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data akta tidak ada. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/aktal/error');
        }

        // Ubah status verifikasi
        if ($this->akmat->ubah_status_verifikasi($id, $pemohon->status_verifikasi)) {
            $this->session->set_flashdata('pesan', 'Status verifikasi berhasil diubah. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status verifikasi gagal diubah. Kembali ke halaman ' . anchor('admin/akmat', 'akta.', 'class="alert-link"'));
            redirect('admin/akmat/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_seleksi($id)
    {
        // Pastikan data peserta ada.
        $pemohon = $this->ktp->get($id);
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data ktp tidak ada. Kembali ke halaman ' . anchor('admin/ktp', 'ktp.', 'class="alert-link"'));
            redirect('admin/ktp/error');
        }

        // Pastikan data sudah diverifikasi.
        if (! $pemohon->status_verifikasi) {
            $this->session->set_flashdata('pesan_error', 'Data siswa <strong>belum diverifikasi</strong>. Untuk menentukan hasil-seleksi, data siswa harus diverifikasi dahulu. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/error');
        }

        // Ubah status seleksi
        if ($this->ktp->ubah_status_seleksi($id, $ktp->status_seleksi)) {
            $this->session->set_flashdata('pesan', 'Status seleksi berhasil diubah. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status seleksi gagal diubah. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_pendaftaran($id)
    {
        // Pastikan data peserta ada.
        $peserta = $this->peserta->get($id);
        if (! $peserta) {
            $this->session->set_flashdata('pesan_error', 'Data peserta tidak ada. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/error');
        }

        // Ubah status verifikasi
        if ($this->peserta->ubah_status_pendaftaran($id, $peserta->status_pendaftaran)) {
            $this->session->set_flashdata('pesan', 'Status pendaftaran berhasil diubah. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status pendaftaran gagal diubah. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/error');
        }
    }
}