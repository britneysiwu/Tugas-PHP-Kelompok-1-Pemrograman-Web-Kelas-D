<?php

function upload() {

$file = $_FILES['berkas'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
$error = $file['error'];


if( $error === 4 ) {
    echo "<script>
            alert('Pilih file terlebih dahulu!');
        </script>";
        return false;
}

$ekstensiBerkasValid = ['jpg', 'jpeg', 'png', 'doc', 'pdf'];
$ekstensiBerkas = explode('.', $nama_file);
$ekstensiBerkas = strtolower(end($ekstensiBerkas));
if( !in_array($ekstensiBerkas, $ekstensiBerkasValid)) {
    echo "<script>
            alert('Maaf, file yang didukung hanya: jpg, jpeg, png, doc, pdf');
        </script>";
        return false;
} else {
    echo "<script>
            alert('File berhasil diupload');
        </script>";
}

move_uploaded_file($nama_tmp,$upload_dir.$nama_file);

}

upload();

?>