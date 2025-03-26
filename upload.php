<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['gambar'])) {
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
    
    $file_name = uniqid() . '.' . pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
    $file_path = $upload_dir . $file_name;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $file_path)) {
        $domain = $_SERVER['HTTP_HOST'];
        echo "File berhasil diunggah! Link: <a href='https://$domain/$file_path'>https://$domain/$file_path</a>";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>
