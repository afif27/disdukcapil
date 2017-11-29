<?php
class Kk_model extends MY_Model
{
    protected $_tabel = 'tb_kk';
     protected $_per_page = 5;

     public function cari($offset)
    {
        $this->get_real_offset($offset);
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = get_no_peserta_value($kata_kunci);

        return $this->db->where("(no_kk LIKE '%$kata_kunci%' OR nama_kep LIKE '%$kata_kunci%')")
                        ->limit($this->_per_page, $this->_offset)
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->result();
    }

    public function cari_num_rows()
    {
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = get_no_peserta_value($kata_kunci);

        return $this->db->where("(no_kk LIKE '%$kata_kunci%' OR nama_kep LIKE '%$kata_kunci%')")
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->num_rows();
    }

    public function ubah_status_verifikasi($id, $status)
    {
        if ($status == '0') {
            $this->db->set('status_verifikasi', '1');
        } else {
            $this->db->set('status_verifikasi', '0');
        }
        $this->db->where('id', $id);
        return $this->db->update($this->_tabel);
    }

    public $form_rules = array(
        // Data Pribadi ----------------------------------------------------
        
        array(
            'field' => 'kelurahan',
            'label' => 'Kelurahan / Desaa',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'dusun',
            'label' => 'Nama Dusun',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_kep_laki',
            'label' => 'Nama Kepala Keluarga Laki-laki',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nik_kep_laki',
            'label' => 'NIK ',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'alamat_kep_laki',
            'label' => 'Alamat Kepala Keluarga Laki-laki',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_kep_perempuan',
            'label' => 'Nama Kepala Keuarga Perempuan',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'nik_kep_perempuan',
            'label' => 'Nik Kepala Keluarga Perermpuan ',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'alamat_kep_perempuan',
            'label' => 'Alamat Kepala Keluarga Perempuan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_laki_laki',
            'label' => 'Nama Laki-laki',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nik_laki_laki',
            'label' => 'Nik Laki-laki',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_perempuan',
            'label' => 'nik_perempuan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'no_surat_nikah',
            'label' => 'Nomor Surat Nikah',
            'rules' => 'trim|xss_clean|'
        ),
        
            );

public $default_values = array(

        'kelurahan'=>'',
        'dusun'=>'',
        'nama_kep_laki'=>'',
        'nik_kep_laki'=>'',
        'tanggal_lahir_kep_laki'=>'',
        'alamat_kep_laki'=>'',
        'nama_kep_perempuan'=>'',
        'tanggal_lahir_kep_perempuan'=>'',
        'nik_kep_perempuan'=>'',
        'alamat_kep_perempuan'=>'',
        'nama_laki_laki'=>'',
        'nik_laki_laki'=>'',
        'tanggal_lahir_laki'=>'',
        'nama_perempuan'=>'',
        'nik_perempuan'=>'',
        'tanggal_lahir_perempuan'=>'',
        'no_surat_nikah'=>'',
        
        
        
        
        
        
        
         );
       
    public function simpan($kk)
    {

       $kk = (object)$kk;
        

        // Set status aktal
       $nik = $this->session->userdata('nik');
       $kk->nik_pemohon = $nik;
       $kk->id=$nik;
       
         $kk->status_kk = '1';
        
        $kk->tanggal_lahir_kep_laki = date_to_en($kk->tanggal_lahir_kep_laki);
         $kk->tanggal_lahir_kep_perempuan= date_to_en($kk->tanggal_lahir_kep_perempuan);
         $kk->tanggal_lahir_laki= date_to_en($kk->tanggal_lahir_kep_laki);
         $kk->tanggal_lahir_perempuan = date_to_en($kk->tanggal_lahir_perempuan);
         
       

        return $this->update($kk->nik_pemohon, $kk);
    }
     public function tambah($kk)
    {
        $kk = (object) $kk;    
        $nik = $this->session->userdata('nik');
        $kk->nik_pemohon = $nik;
        $kk->status_kk = '1';
        $kk->id=$nik;
         
         $kk->tanggal_lahir_kep_laki = date_to_en($kk->tanggal_lahir_kep_laki);
         $kk->tanggal_lahir_kep_perempuan= date_to_en($kk->tanggal_lahir_kep_perempuan);
         $kk->tanggal_lahir_laki= date_to_en($kk->tanggal_lahir_kep_laki);
         $kk->tanggal_lahir_perempuan = date_to_en($kk->tanggal_lahir_perempuan);

        return $this->insert($kk);
       
         
    }
}