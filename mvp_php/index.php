<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("view/TampilMahasiswa.php");

// Handle Add
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $tp = new TampilMahasiswa();
      $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'tempat' => $_POST['tempat'],
        'tl' => $_POST['tl'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'telp' => $_POST['telp']
      ];
      $success = $tp->tambahDataMahasiswa($data);
      if ($success) {
        header("Location: index.php"); // Redirect untuk hindari resubmit
        exit();
      }
    }
}

// Handle Update
if (isset($_GET['action']) && $_GET['action'] == 'update') {
    // Ambil konten JSON dari request
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    // Pastikan data lengkap
    if (isset($data['id']) && isset($data['nim']) && isset($data['nama'])) {
        $tp = new TampilMahasiswa();
        $success = $tp->editDataMahasiswa($data);
        
        // Return JSON response
        header('Content-Type: application/json');
        if ($success) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap']);
    }
    exit();
}
  
// Handle Delete
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $tp = new TampilMahasiswa();
    $tp->deleteDataMahasiswa($id);
    exit();
}

// Default action - tampilkan daftar
$tp = new TampilMahasiswa();
$data = $tp->tampil();