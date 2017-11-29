<?php
class Pendaftaran_model extends MY_Model
{
    public $_tabel = 'tb_pemohon';



    public $form_rules = array(
        array(
            'field' => 'nik',
            'label' => 'NIK',
            'rules' => 'trim|xss_clean|required|exact_length[15]|is_unique[tb_pemohon.nik]'
        ),
        array(
            'field' => 'no_hp',
            'label' => 'NO HP',
            'rules' => 'trim|xss_clean|required|max_length[12]|is_unique[tb_pemohon.no_hp]'
        ),
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|xss_clean|required|max_length[64]'
        ),
        
        array(
            'field' => 'captcha',
            'label' => 'Captcha',
            'rules' => 'trim|xss_clean|required|exact_length[4]|callback__validate_captcha'
        ),
    );

    public $default_values = array(
        'nik' => '',
        'no_hp' => '',
        'nama' => '',
        'captcha' => '',
    );

    public function daftar($pemohon)
    {
        // Data captcha tidak perlu disimpan di DB.
        unset($pemohon->captcha);

        // Generate random string username dan password untuk login user.
        $pemohon->username = random_string('alnum', 8);
        $pemohon->password = random_string('alnum', 8);

        // Proses insert data ke tabel tb_peserta.
        $id = $this->insert($pemohon);
        if ($id) {
            $no_pemohon = format_no_pemohon($id);

            // Set data untuk ditampilkan.
            $data_session = array(
                'nomor_pemohon' => $no_pemohon,
                'username' => $pemohon->username,
                'password' => $pemohon->password,
                'no_hp' => $pemohon->no_hp,
                'nik' => $pemohon->nik,
            );
            $this->session->set_userdata($data_session);
            return true;
        }
        return false;
    }

    public function reset_peserta()
    {
        $data_session = array(
            'nomor_peserta' => '',
            'username'  => '',
            'password'  => '',
            'no_hp' => '',
        );
        $this->session->unset_userdata($data_session);
    }
}