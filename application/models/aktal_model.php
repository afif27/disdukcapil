<?php
class aktal_model extends MY_Model
{
    protected $_tabel = 'tb_aktal';
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
            'label' => 'Pemerintah Desa',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan',
            'label' => 'Pemerintah Kecamatan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten',
            'label' => 'Pemerintah Kabupaten',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_kep',
            'label' => 'Nama Kepala Keluarga',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'no_kk',
            'label' => 'Nomor Kartu Keluarga',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'nama_anak',
            'label' => 'Nama Anak',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenkel_anak',
            'label' => 'Jenis Kelamin Anak',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tempat_dilahirkan',
            'label' => 'Tempat Dilahirkan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tempat_lahir',
            'label' => 'Tempat Kelahir',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tanggal_lahir',
            'label' => 'Tanggal Kelahiran',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'pukul_lahir',
            'label' => 'Pukul',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenis_kelahiran',
            'label' => 'Jenis Kelahiran',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kelahiran_ke',
            'label' => 'Kelahiran ke',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'penolong_kelahiran',
            'label' => 'Penolong Kelahiran',
            'rules' => 'trim|xss_clean|max_length[32]|required|'
        ),
        array(
            'field' => 'berat_bayi',
            'label' => 'Alamat Tinggal',
            'rules' => 'trim|xss_clean|required|numeric|max_length[3]|greater_than[0]|'
        ),
        array(
            'field' => 'panjang_bayi',
            'label' => 'Panajang Bayi',
            'rules' => 'trim|xss_clean|required|numeric|max_length[3]|greater_than[0]|'
        ),
        // data ibu
        array(
            'field' => 'nik_ibu',
            'label' => 'NIK Ibu',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'nama_ibu',
            'label' => 'Nama Lengkap Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),

        array(
            'field' => 'tanggal_lahir_ibu',
            'label' => 'Tanggal Lahir Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_ibu',
            'label' => 'Umur Ibu',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'pekerjaan_ibu',
            'label' => 'Pekerjaan Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'alamat_ibu',
            'label' => 'Alamat Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kelurahan_ibu',
            'label' => 'Desa',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan_ibu',
            'label' => 'Kecamatan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_ibu',
            'label' => 'kabupaten_ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'provinsi_ibu',
            'label' => 'Provinsi',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kewarganegaraan_ibu',
            'label' => 'Kewarganegaraan Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kebangsaan_ibu',
            'label' => 'Kebangsaan Ibu',
            'rules' => 'trim|xss_clean|required|'
        ),
        
        array(
            'field' => 'tanggal_kawin',
            'label' => 'Tgl Pencatatan Perkawinan',
            'rules' => 'trim|xss_clean|required|'
        ),
        //daya ayah........
        array(
            'field' => 'nik_ayah',
            'label' => 'Nik Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_ayah',
            'label' => 'Nama Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tanggal_lahir_ayah',
            'label' => 'Tanggal Lahir Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_ayah',
            'label' => 'Umur Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'pekerjaan_ayah',
            'label' => 'Pekerjaan Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'alamat_ayah',
            'label' => 'Alamat Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kelurahan_ayah',
            'label' => 'Desa',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan_ayah',
            'label' => 'Kecamatan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_ayah',
            'label' => 'Kabupaten',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'provinsi_ayah',
            'label' => 'Provinsi',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kewarganegaraan_ayah',
            'label' => 'Kewarganegaraan Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kebangsaan_ayah',
            'label' => 'Kebangsaaan Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        // data Pelapor
        array(
            'field' => 'nik_pelapor',
            'label' => 'Nik Pelapor',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'nama_pelapor',
            'label' => 'Nama Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_pelapor',
            'label' => 'Umur Ayah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenkel_pelapor',
            'label' => 'Jenis Kelamin Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'pekerjaan_pelapor',
            'label' => 'Pekaerjaan Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'alamat_pelapor',
            'label' => 'Alamat Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
          array(
            'field' => 'kelurahan_pelapor',
            'label' => 'Kelurahan Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan_pelapor',
            'label' => 'Kecamatan Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_pelapor',
            'label' => 'Kabupaten Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'provinsi_pelapor',
            'label' => 'Provinsi Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        // data saksi 1
         array(
            'field' => 'nik_saksi_satu',
            'label' => 'Nik Saksi 1',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'nama_saksi_satu',
            'label' => 'Nama Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_saksi_satu',
            'label' => 'Umur Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenkel_saksi_satu',
            'label' => 'Jenis Kelamin Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'pekerjaan_saksi_satu',
            'label' => 'Pekaerjaan Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'alamat_saksi_satu',
            'label' => 'Alamat saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
          array(
            'field' => 'kelurahan_saksi_satu',
            'label' => 'Kelurahan Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan_saksi_satu',
            'label' => 'Kecamatan Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_saksi_satu',
            'label' => 'Kabupaten Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'provinsi_saksi_satu',
            'label' => 'Provinsi Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
    //data saksi 2
            array(
            'field' => 'nik_saksi_dua',
            'label' => 'Nik Saksi 2',
            'rules' => 'trim|xss_clean|required|numeric|'
        ),
        array(
            'field' => 'nama_saksi_dua',
            'label' => 'Nama Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_saksi_dua',
            'label' => 'Umur Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenkel_saksi_dua',
            'label' => 'Jenis Kelamin Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'pekerjaan_saksi_dua',
            'label' => 'Pekaerjaan Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'alamat_saksi_dua',
            'label' => 'Alamat saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'kelurahan_saksi_dua',
            'label' => 'Kelurahan Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kecamatan_saksi_dua',
            'label' => 'Kecamatan Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_saksi_dua',
            'label' => 'Kabupaten Saksi 1',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'provinsi_saksi_dua',
            'label' => 'Provinsi saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
    );

public $default_values = array(

        'kelurahan'=>'',
        'kecamatan'=>'Kecamatan Tambusai',  
        'kabupaten'=>'Kabupaten Rokan Hulu',
        'nama_kep'=>'',
        'no_kk'=>'',
        'nama_anak'=>'',
        'jenkel_anak'=>'',
        'tempat_dilahirkan'=>'',
        'tempat_lahir'=>'',
        'tanggal_lahir'=>'',
        'pukul_lahir'=>'',
        'jenis_kelahiran'=>'',
        'kelahiran_ke'=>'',
        'penolong_kelahiran'=>'',
        'berat_bayi'=>'',
        'panjang_bayi'=>'',
        'nik_ibu'=>'',
        'nama_ibu'=>'',
        'tanggal_lahir_ibu'=>'',
        'umur_ibu'=>'',
        'pekerjaan_ibu'=>'',
        'alamat_ibu'=>'',
        'kelurahan_ibu'=>'',
        'kecamatan_ibu'=>'',
        'kabupaten_ibu'=>'',
        'provinsi_ibu'=>'',
        'kewarganegaraan_ibu'=>'',
        'kebangsaan_ibu'=>'',
        'tanggal_kawin'=>'',
        'nik_ayah'=>'',
        'nama_ayah'=>'',
        'tanggal_lahir_ayah'=>'',
        'umur_ayah'=>'',
        'pekerjaan_ayah'=>'',
        'alamat_ayah'=>'',
        'kelurahan_ayah'=>'',
        'kecamatan_ayah'=>'',
        'kabupaten_ayah'=>'',
        'provinsi_ayah'=>'',
        'kewarganegaraan_ayah'=>'',
        'kebangsaan_ayah'=>'',
        'nik_pelapor'=>'',
        'nama_pelapor'=>'',
        'umur_pelapor'=>'',
        'jenkel_pelapor'=>'',
        'pekerjaan_pelapor'=>'',
        'alamat_pelapor'=>'',
        'kelurahan_pelapor'=>'',
        'kecamatan_pelapor'=>'',
        'kabupaten_pelapor'=>'',
        'provinsi_pelapor'=>'',
        'nik_saksi_satu'=>'',
        'nama_saksi_satu'=>'',
        'umur_saksi_satu'=>'',
        'jenkel_saksi_satu'=>'',
        'pekerjaan_saksi_satu'=>'',
        'alamat_saksi_satu'=>'',
        'kelurahan_saksi_satu'=>'',
        'kecamatan_saksi_satu'=>'',
        'kabupaten_saksi_satu'=>'',
        'provinsi_saksi_satu'=>'',
        'nik_saksi_dua'=>'',
        'nama_saksi_dua'=>'',
        'umur_saksi_dua'=>'',
        'jenkel_saksi_dua'=>'',
        'pekerjaan_saksi_dua'=>'',
        'alamat_saksi_dua'=>'',
        'kelurahan_saksi_dua'=>'',
        'kecamatan_saksi_dua'=>'',
        'kabupaten_saksi_dua'=>'',
        'provinsi_saksi_dua'=>'' , 
         );
       
    public function simpan($aktal)
    {
        $aktal = (object)$aktal;
        $nik = $this->session->userdata('nik');
        $aktal->nik_pemohon=$nik;

        // Set status aktal
       
         $aktal->status_aktal = '1';
         $aktal->tanggal_lahir = date_to_en($aktal->tanggal_lahir);
         $aktal->tanggal_lahir_ayah = date_to_en($aktal->tanggal_lahir_ayah);
         $aktal->tanggal_lahir_ibu = date_to_en($aktal->tanggal_lahir_ibu);
         $aktal->tanggal_kawin = date_to_en($aktal->tanggal_kawin);
         


        return $this->update($aktal->no_kk, $aktal);
    }

      public function tambah($aktal)
    {
        $aktal = (object) $aktal;   
        $nik = $this->session->userdata('nik');
        $aktal->nik_pemohon=$nik;     
        $aktal->status_aktal='1';
        $aktal->tanggal_lahir = date_to_en($aktal->tanggal_lahir);
        $aktal->tanggal_lahir_ayah = date_to_en($aktal->tanggal_lahir_ayah);
        $aktal->tanggal_lahir_ibu = date_to_en($aktal->tanggal_lahir_ibu);
        $aktal->tanggal_kawin = date_to_en($aktal->tanggal_kawin);
         
        return $this->insert($aktal);
    }
}