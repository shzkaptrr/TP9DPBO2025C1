<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

// Kelas yang berisikan tabel dari mahasiswa
class TabelMahasiswa extends DB
{
	function getMahasiswa()
	{
		// Query mysql select data mahasiswa
		$query = "SELECT * FROM mahasiswa";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	// fungsi untuk menambah data mahasiswa
	public function insertMahasiswa($nim, $nama, $tempat, $tl, $gender, $email, $telp) {
		$query = "INSERT INTO mahasiswa (nim, nama, tempat, tl, gender, email, telp) 
				  VALUES ('$nim', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		return $this->execute($query);
	  }

	// edit
	public function updateMahasiswa($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp) {
		$query = "UPDATE mahasiswa SET 
		  nim = '$nim', 
		  nama = '$nama', 
		  tempat = '$tempat', 
		  tl = '$tl', 
		  gender = '$gender', 
		  email = '$email', 
		  telp = '$telp' 
		  WHERE id = $id";
		return $this->execute($query);
	  }
	  // delete
	  public function deleteMahasiswa($id) {
		$query = "DELETE FROM mahasiswa WHERE id = $id";
		return $this->execute($query);
	  }
}
