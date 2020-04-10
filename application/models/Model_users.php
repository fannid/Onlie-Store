<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {
/*mengecek proses login dengan mencocokan data username dan password.
Jika data valid maka proses login berhasil dan dapat masuk ke menu selanjutnya.*/
	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');

		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');

		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

}
