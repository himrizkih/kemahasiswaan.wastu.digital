<?php
class m_crud extends CI_Model{
function cek_login($table,$where){
return $this->db->get_where($table,$where);
}
// Fungsi CRUD
// fungsi untuk mengambil data dari database
public function get_data($table){
return $this->db->get($table);
}
// fungsi untuk menginput data ke database
public function insert_data($data,$table){
$this->db->insert($table,$data);
}
// fungsi untuk mengedit data
public function edit_data($where,$table){
return $this->db->get_where($table,$where);

}
public function edit_data_v2($table){
return $this->db->get($table);
}
// fungsi untuk menghapus data dari database
public function delete_data($where,$table){
$this->db->delete($table,$where);
}
// fungsi untuk mengupdate atau mengubah data di database
public function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);

}
public function update_data_v2($table){
return $this->db->get($table);
}
public function get_pengguna_login($id){
	$hsl=$this->db->query("SELECT * FROM user where id_user='$id'");
	return $hsl;
}

public function getUserDataByApproval($verificationCode){
	$query = $this->db->query("select * from verification  
    left join user 
        on user.id_user=verification.user_id where verification.code = '{$verificationCode}'");
	return $query->row();
}

// Akhir fungsi CRUD

}
?>