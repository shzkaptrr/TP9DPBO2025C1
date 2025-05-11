<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class TampilMahasiswa implements KontrakView
{
	private $prosesmahasiswa; // Presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesmahasiswa = new ProsesMahasiswa();
	}

	function tampil()
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			$no = $i + 1;
			$id = $this->prosesmahasiswa->getId($i); // Ambil ID untuk data attribute
			
			$data .= "<tr data-id='" . $id . "'>
			<td>" . $no . "</td>
			<td>" . $this->prosesmahasiswa->getNim($i) . "</td>
			<td>" . $this->prosesmahasiswa->getNama($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTempat($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTl($i) . "</td>
			<td>" . $this->prosesmahasiswa->getGender($i) . "</td> 
			<td>" . $this->prosesmahasiswa->getEmail($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTelp($i) . "</td> 
			<td>
				<button class='btn btn-warning btn-edit'>Edit</button>
				<a href='index.php?action=delete&id=" . $id . "' class='btn btn-danger btn-delete' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
			</td>
			</tr>";
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	// fungsi untuk menambah data mahasiswa
	function tambahDataMahasiswa($data = null)
    {
        if ($data) {
            // Jika ada data, proses tambah data via Presenter
            return $this->prosesmahasiswa->tambahDataMahasiswa($data);
        } else {
            // Jika tidak ada data, tampilkan form
            $this->tpl = new Template("templates/form_tambah.html");
            $this->tpl->write();
        }
    }

	// edit
	function editDataMahasiswa($data)
	{
		// Proses edit data via Presenter
		return $this->prosesmahasiswa->updateDataMahasiswa($data);
	}
	
	// hapus
	function deleteDataMahasiswa($id)
	{
		// Proses hapus data via Presenter
		$success = $this->prosesmahasiswa->deleteDataMahasiswa($id);
		if ($success) {
			header("Location: index.php");
			exit();
		}
		return $success;
	}
}