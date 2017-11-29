<?php
class Akmat_model extends MY_Model
{
    protected $_tabel = 'tb_akmat';
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
            'field' => 'nik_jenazah',
            'label' => 'Nik Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'nama_jenazah',
            'label' => 'Nama Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'jenkel_jenazah',
            'label' => 'Jenis Kelamin Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tanggal_lahir_jenazah',
            'label' => 'Tanggal Lahir Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_jenazah',
            'label' => 'Umur Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tempat_lahir_jenazah',
            'label' => 'Tempat Lahir',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'agama_jenazah',
            'label' => 'Agama Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'pekerjaan_jenazah',
            'label' => 'Pekerjaan Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'alamat_jenazah',
            'label' => 'Alamat Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kewarganegaraan_jenazah',
            'label' => 'Kewarganegaraan Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'keturunan_jenazah',
            'label' => 'Keturuanan Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kebangsaan_jenazah',
            'label' => 'Kebangsaan Jenazah',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'anak_ke',
            'label' => 'Anak Ke',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'tanggal_kematian',
            'label' => 'Tanggal Kematian',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'pukul_kematian',
            'label' => 'Pukul Kematian',
            'rules' => 'trim|xss_clean|required|'
        ),
          array(
            'field' => 'sebab_kematian',
            'label' => 'Sebab Kematian',
            'rules' => 'trim|xss_clean|required|'
        ),
           array(
            'field' => 'tempat_kematian',
            'label' => 'Tempat_kematian',
            'rules' => 'trim|xss_clean|required|'
        ),
           array(
            'field' => 'yang_menerangkan',
            'label' => 'Yang Menerangkan',
            'rules' => 'trim|xss_clean|required|'
        ),

        // data ayah
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
        //data ibu

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
            'rules' => 'trim|xss_clean|max_length[32]|required|'
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
            'field' => 'tanggal_lahir_pelapor',
            'label' => 'Tanggal Lahir Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_pelapor',
            'label' => 'Umur Pelapor',
            'rules' => 'trim|xss_clean|required|'
        ),

        array(
            'field' => 'pekerjaan_pelapor',
            'label' => 'Pekerjaan Pelapor',
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
            'rules' => 'trim|xss_clean|required'
        ),
        array(
            'field' => 'tanggal_lahir_saksi_satu',
            'label' => 'Tanggal Lahir Saksi Satu',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_saksi_satu',
            'label' => 'Umur Saksi 1',
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
            'field' => 'tanggal_lahir_saksi_dua',
            'label' => 'Tanggal Lahir Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'umur_saksi_dua',
            'label' => 'Umur Saksi 2',
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
            'label' => 'Kecamatan Saksi 2',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kabupaten_saksi_dua',
            'label' => 'Kabupaten Saksi 2',
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
        'nik_jenazah'=>'',
        'nama_jenazah'=>'',
        'jenkel_jenazah'=>'',
        'tanggal_lahir_jenazah'=>'',
        'umur_jenazah'=>'',
        'tempat_lahir_jenazah'=>'',
        'agama_jenazah'=>'',
        'pekerjaan_jenazah'=>'',
        'alamat_jenazah'=>'',
        'kewarganegaraan_jenazah'=>'',
        'keturunan_jenazah'=>'',
        'kebangsaan_jenazah'=>'',
        'anak_ke'=>'',
        'tanggal_kematian'=>'',
        'pukul_kematian'=>'',
        'sebab_kematian'=>'',
        'tempat_kematian'=>'',
        'yang_menerangkan'=>'',
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
        'tanggal_lahir_pelapor'=>'',
        'umur_pelapor'=>'',
        'pekerjaan_pelapor'=>'',
        'alamat_pelapor'=>'',
        'kelurahan_pelapor'=>'',
        'kecamatan_pelapor'=>'',
        'kabupaten_pelapor'=>'',
        'provinsi_pelapor'=>'',
        'nik_saksi_satu'=>'',
        'nama_saksi_satu'=>'',
        'tanggal_lahir_saksi_satu'=>'',
        'umur_saksi_satu'=>'',
        'pekerjaan_saksi_satu'=>'',
        'alamat_saksi_satu'=>'',
        'kelurahan_saksi_satu'=>'',
        'kecamatan_saksi_satu'=>'',
        'kabupaten_saksi_satu'=>'',
        'provinsi_saksi_satu'=>'',
        'nik_saksi_dua'=>'',
        'nama_saksi_dua'=>'',
        'tanggal_lahir_saksi_dua'=>'',
        'umur_saksi_dua'=>'',
        'pekerjaan_saksi_dua'=>'',
        'alamat_saksi_dua'=>'',
        'kelurahan_saksi_dua'=>'',
        'kecamatan_saksi_dua'=>'',
        'kabupaten_saksi_dua'=>'',
        'provinsi_saksi_dua'=>'' , 
         );
       
    public function simpan($akmat)
    {

       $akmat = (object)$akmat;
        $nik = $this->session->userdata('nik');
        $akmat->nik_pemohon=$nik;

        // Set status aktal
       
         $akmat->status_akmat = '1';
         $akmat->tanggal_lahir_jenazah = date_to_en($akmat->tanggal_lahir_jenazah);
         $akmat->tanggal_kematian = date_to_en($akmat->tanggal_kematian);
         $akmat->tanggal_lahir_ayah = date_to_en($akmat->tanggal_lahir_ayah);
         $akmat->tanggal_lahir_ibu = date_to_en($akmat->tanggal_lahir_ibu);
         $akmat->tanggal_lahir_pelapor = date_to_en($akmat->tanggal_lahir_pelapor);
         $akmat->tanggal_lahir_saksi_satu = date_to_en($akmat->tanggal_lahir_saksi_satu);
         $akmat->tanggal_lahir_saksi_dua = date_to_en($akmat->tanggal_lahir_saksi_dua);
         
       

        return $this->update($akmat->no_kk, $akmat);
    }
     public function tambah($akmat)
    {
        $aktal = (object) $akmat;  
         $nik = $this->session->userdata('nik');  
        $akmat->nik_pemohon=$nik;    
         $akmat->status_akmat = '1';
         $akmat->tanggal_lahir_jenazah = date_to_en($akmat->tanggal_lahir_jenazah);
         $akmat->tanggal_kematian = date_to_en($akmat->tanggal_kematian);
         $akmat->tanggal_lahir_ayah = date_to_en($akmat->tanggal_lahir_ayah);
         $akmat->tanggal_lahir_ibu = date_to_en($akmat->tanggal_lahir_ibu);
         $akmat->tanggal_lahir_pelapor = date_to_en($akmat->tanggal_lahir_pelapor);
         $akmat->tanggal_lahir_saksi_satu = date_to_en($akmat->tanggal_lahir_saksi_satu);
         $akmat->tanggal_lahir_saksi_dua = date_to_en($akmat->tanggal_lahir_saksi_dua);
         
       

        return $this->insert($akmat);
       
         
    }
}