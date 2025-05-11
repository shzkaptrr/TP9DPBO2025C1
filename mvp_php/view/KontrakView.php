<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

interface KontrakView{
	public function tampil();
	// add mahasiswa
	public function tambahDataMahasiswa();
	// edit mahasiswa
	public function editDataMahasiswa($id);
	// delete mahasiswa
	public function deleteDataMahasiswa($id);
}
?>