<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function get($id = null){
        $this->db->from('users');
        $this->db->join('kelas', 'kelas.id_kelas = users.kelas_id', 'left');
        $this->db->join('status', 'status.id_status = users.status_id', 'left');
        $this->db->where('level', 'siswa');
        // $this->db->where('status_id', '1');
        if($id != null){
            $this->db->where('id',$id);
        }
        return $this->db->get();
    }
      public function getAktif()
    {
        $this->db->join('kelas', 'kelas.id_kelas = users.kelas_id', 'left');
        $this->db->join('status', 'status.id_status = users.status_id', 'left');
        $this->db->where('level', 'siswa');
        $this->db->where('status_id', '1');
        return $this->db->get('users');
    }
    public function getMutasi()
    {
        $this->db->join('kelas', 'kelas.id_kelas = users.kelas_id', 'left');
        $this->db->join('status', 'status.id_status = users.status_id', 'left');
        $this->db->where('level', 'siswa');
        $this->db->where('status_id', '2');
        return $this->db->get('users');
    }
    public function getAlumni()
    {
        $this->db->join('kelas', 'kelas.id_kelas = users.kelas_id', 'left');
        $this->db->join('status', 'status.id_status = users.status_id', 'left');
        $this->db->where('level', 'siswa');
        $this->db->where('status_id', '3');
        return $this->db->get('users');
    }
  
    public function add($post)
    {
        $created_by = $this->session->userdata('id');
        $created = date('Y-m-d H:i:s');
        $params = array(
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => sha1($post['username']),
            'nmr_induk' => $post['nmr_induk'],
            'alamat' => $post['alamat'],
            'nmr_telp' => $post['nomor'],
            'kelas_id' => $post['kelas'],
            'level' => 'siswa',
            'status_id' => 1,
            'date_created' => $created,
            'created_by' => $created_by
        );
        $this->db->insert('users', $params);
    }
    public function edit($post)
    {
        $modifBy = $this->session->userdata('id');
        $modified = date('Y-m-d H:i:s');
          $params = array(
            'nama' => $post['nama'],
            'username' => $post['username'],
            'password' => !empty($post['password']) ? sha1($post['password']) : null,
            'nmr_induk' => $post['nmr_induk'],
            'alamat' => $post['alamat'] != "" ? $post['alamat'] : null,
            'nmr_telp' => $post['nomor'],
            'level' => 'siswa',
            'status_id' => $post['status'],
            'kelas_id' => $post['kelas'],
            'modified_by' => $modifBy,
            'modified_created' => $modified 
        );

        $this->db->where('id', $post['id']);
        $this->db->update('users', $params);
    }
    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
