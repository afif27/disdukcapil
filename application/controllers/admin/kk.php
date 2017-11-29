<?php
class kk extends Operator_Controller
{
    public $data = array(
        'halaman' => 'kk',
        'main_view' => 'admin/kk_list',
        'title' => 'Data KK',
    );

    public function index($offset = 0)
    {
        $pemohon = $this->kk->get_all_paged($offset);
        if ($pemohon) {
            $this->data['kk'] = $pemohon;
            $this->data['paging'] = $this->kk->paging('biasa', site_url('admin/kk/halaman/'), 4);
        } else {
            $this->data['kk'] = 'Tidak ada data .';
        }
        $this->load->view($this->layout, $this->data);
    }

    public function cari($offset = 0)
    {
        $pemohon = $this->kk->cari($offset);
        if ($pemohon) {
            $this->data['kk'] = $pemohon;
            $this->data['paging'] = $this->kk->paging('pencarian', site_url('admin/kk/cari/'), 4);
        } else {
            $this->data['kk'] = 'Data tidak ditemukan.'. anchor('admin/kk', ' Tampilkan semua data.', 'class="alert-link"');
        }
        $this->load->view($this->layout, $this->data);
    }

      public function edit($id)
    {
        // Pastikan data biodata ada.
        if (! $this->kk->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data tidak ada. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/biodata/error');
        }

        // Data untuk form.
        if (!$_POST) {    
            $kk= $this->kk->get($id);
            $this->data['values'] = (object) $kk;
        } else {
            $kk = $this->input->post(null, true);
            $this->data['values'] = (object) $kk;
        }

        // Validasi.
        if (! $this->kk->validate('form_rules')) {
            $this->data['main_view'] = 'dashboard/kk_form';
            $this->data['form_action'] = site_url('admin/kk/edit/'.$id);
            $this->load->view($this->layout, $this->data);
            return;
        }

        // Simpan biodata.
        if ($this->kk->simpan($kk)) {
            $this->session->set_flashdata('pesan', 'kk berhasil disimpan. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'kk tidak berhasil disimpan. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/error');
        }
    }

    public function cetak($id)
    {
        // Pastikan data peserta ada.
        $pemohon = $this->kk->get($id);
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data peserta tidak ada. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/kk_pdf', $data, true);
        // Nomor perserta (untuk nama file)
        $no_peserta = format_no_pemohon($id);

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('kk_'.$no_peserta.'.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/peserta', 'peserta.', 'class="alert-link"'));
            redirect('admin/peserta/error');
        }
    }

    public function cetak_laporan()
    {
        // Pastikan data peserta ada.
         $pemohon = $this->kk->get_all() ;
        if ( !$pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data KK tidak ada. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/error');
        }
        $data['pemohon'] = $pemohon;

        // Template untuk PDF, return view sbg string
        $html = $this->load->view('dashboard/laporan_kk_pdf', $data, true);
        // Nomor perserta (untuk nama file)

        // Cetak dengan html2pdf
        require(APPPATH."/third_party/html2pdf_4_03/html2pdf.class.php");
        try {
            $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
            $html2pdf->WriteHTML($html);
            $html2pdf->Output('kk.pdf');
        } catch (HTML2PDF_exception $e) {
            // echo $e;
            $this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/error');
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
            redirect('admin/kk/error');
        }

        // Pastikan data peserta ada.
        if (! $this->kk->get($id)) {
            $this->session->set_flashdata('pesan_error', 'Data akta tidak ada. Kembali ke halaman ' . anchor('admin/kk', 'ktp.', 'class="alert-link"'));
            redirect('admin/kk/error');
        }

        // Hapus
        if ($this->kk->delete($id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus. Kembali ke halaman '. anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/sukses');
        } else {
            $this->session->set_flashdata('pesan_error', 'Data gagal dihapus. Kembali ke halaman '. anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kka/error');
        }
    }

    // Ubah status verifikasi
    public function ubah_status_verifikasi($id)
    {
        // Pastikan data peserta ada.
        $pemohon = $this->kk->get($id);
        if (! $pemohon) {
            $this->session->set_flashdata('pesan_error', 'Data ktp tidak ada. Kembali ke halaman ' . anchor('admin/kk', 'ktp.', 'class="alert-link"'));
            redirect('admin/kk/error');
        }

        // Ubah status verifikasi
        if ($this->kk->ubah_status_verifikasi($id, $pemohon->status_verifikasi)) {
            $this->session->set_flashdata('pesan', 'Status verifikasi berhasil diubah. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/sukses');
        } else {
            $this->session->set_flashdata('pesan', 'Status verifikasi gagal diubah. Kembali ke halaman ' . anchor('admin/kk', 'kk.', 'class="alert-link"'));
            redirect('admin/kk/error');
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