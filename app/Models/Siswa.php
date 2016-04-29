<?php
	namespace Models;
	use Resources;

	class Siswa {
		public function __construct(){
			$this->db = new Resources\Database;
			$this->tb = "siswa"; //nama tabel database
		}
		public function get_siswa()
		{
			$query = $this->db->results("SELECT * FROM ". $this->tb ."");
      		return $query;
		}
		public function get_where($id)
		{
			$query = $this->db->results("SELECT * FROM ". $this->tb ." WHERE siswa_id = '". $id ."' LIMIT 1");
			return $query;
		}
		public function delete_siswa($id)
		{
			$this->db->where('siswa_id', '=', $id);
			$query = $this->db->delete('siswa');
			return $query;
		}
		public function insert_siswa($data=array())
		{
			$query = $this->db->insert($this->tb, $data);
			return $query;
		}
		public function edit_siswa($data=array(), $id)
		{
			$this->db->where('siswa_id', '=', $id);
			$query = $this->db->update($this->tb, $data); 
			return $query;
		}
	}
?>