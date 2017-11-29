<?php
class Ktp_model extends MY_Model
{
    protected $_tabel = 'tb_ktp';     
    protected $_per_page = 5;

     public function cari($offset)
    {
        $this->get_real_offset($offset);
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = get_no_peserta_value($kata_kunci);

        return $this->db->where("(id = '$id' OR nik LIKE '%$kata_kunci%' OR nama LIKE '%$kata_kunci%')")
                        ->limit($this->_per_page, $this->_offset)
                        ->order_by('id', 'ASC')
                        ->get($this->_tabel)
                        ->result();
    }

    public function cari_num_rows()
    {
        $kata_kunci = $this->input->get('kata_kunci', true);
        $id = get_no_peserta_value($kata_kunci);

        return $this->db->where("(id = '$id' OR nik LIKE '%$kata_kunci%' OR nama LIKE '%$kata_kunci%')")
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
            'field' => 'provinsi',
            'label' => 'Pemerintah Provinsi',
            'rules' => 'trim|xss_clean|required|max_length[64]|'
        ),
        array(
            'field' => 'kabupaten',
            'label' => 'Pemerintah Kabupatan',
            'rules' => 'trim|xss_clean|required|max_length[64]|'
        ),
        array(
            'field' => 'kecamatan',
            'label' => 'Kecamatan',
            'rules' => 'trim|xss_clean|required|'
        ),
        array(
            'field' => 'kelurahan',
            'label' => 'Kelurahan',
            'rules' => 'trim|xss_clean|max_length[32]|'
        ),
        array(
            'field' => 'permohonan',
            'label' => 'Permohonan',
            'rules' => 'trim|xss_clean|required|'
        ),
         array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|xss_clean|required|max_length[16]|'
        ),
          array(
            'field' => 'no_kk',
            'label' => 'No_kk',
            'rules' => 'trim|xss_clean|required|max_length[16]|'
        ),
        array(
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|xss_clean|required|max_length[255]|'
        ),
        array(
            'field' => 'RT',
            'label' => 'Rt',
            'rules' => 'trim|xss_clean|required|max_length[4]|'
        ),
        array(
            'field' => 'RW',
            'label' => 'Rw',
            'rules' => 'trim|xss_clean|required|max_length[3]|'
        ),
        array(
            'field' => 'kode_pos',
            'label' => 'Kode_Pos',
            'rules' => 'trim|xss_clean|required|max_length[5]|'
            )
       
    );


    public $default_values = array(
        'provinsi' =>'Provinsi Riau',
        'kabupaten' =>'Kabupaten Rohul',
        'kecamatan'=>'Kecamatan Tambusai',
        'kelurahan'=>'',
        'permohonan'=>'',
        'nama'=>'',
        'no_kk'=>'',
        'alamat'=>'',
        'RT'=>'',
        'RW'=>'',
        'kode_pos'=>'',
         );

    public function simpan($ktp)
    {
        $ktp = (object) $ktp;
       
       $nik= $this->session->userdata('nik');
        // Set status biodata.
        $ktp->status_ktp = '1';
        $ktp->nik=$nik;
        
           
     return $this->update($ktp->no_kk, $ktp);
       
    }

     public function tambah($ktp)
    {
        $nik= $this->session->userdata('nik');
        // Set status biodata.
        $ktp = (object) $ktp;        
        $ktp->status_ktp='1';
        $ktp->nik =$nik;
        return $this->insert($ktp);
    }
}