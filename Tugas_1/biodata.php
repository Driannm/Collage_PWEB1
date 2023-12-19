<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
</head>
<body>

<?php

// Fungsi untuk menampilkan form input biodata
function tampilkan_form_input_biodata() {
  echo '
  <form method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="umur">Umur:</label>
    <input type="number" name="umur" required><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select><br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" rows="5" cols="30"></textarea><br>

    <label for="no_hp">Nomor HP:</label>
    <input type="number" name="no_hp" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="hobi">Hobi:</label>
    <input type="text" name="hobi" required><br>

    <label for="cita_cita">Cita-cita:</label>
    <input type="text" name="cita_cita" required><br>

    <input type="submit" value="Submit">
  </form>';
}
function tampilkan_biodata($data_biodata) {
    echo '
    <h2>Biodata:</h2>
    <p><strong>Nama:</strong> ' . $data_biodata['nama'] . '</p>
    <p><strong>Umur:</strong> ' . $data_biodata['umur'] . '</p>
    <p><strong>Jenis Kelamin:</strong> ' . $data_biodata['jenis_kelamin'] . '</p>
    <p><strong>alamat:</strong> ' . $data_biodata['alamat'] . '</p>
    <p><strong>No Hp:</strong> ' . $data_biodata['no_hp'] . '</p>
    <p><strong>Email:</strong> ' . $data_biodata['email'] . '</p>
    <p><strong>Hobi:</strong> ' . $data_biodata['hobi'] . '</p>
    <p><strong>Cita Cita:</strong> ' . $data_biodata['cita_cita'] . '</p>
    ';
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data_biodata = array(
    'nama' => $_POST['nama'],
    'umur' => $_POST['umur'],
    'jenis_kelamin' => $_POST['jenis_kelamin'],
    'alamat' => $_POST['alamat'],
    'no_hp' => $_POST['no_hp'],
    'email' => $_POST['email'],
    'hobi' => $_POST['hobi'],
    'cita_cita' => $_POST['cita_cita']
  );

  tampilkan_biodata($data_biodata);
} else {
  tampilkan_form_input_biodata();
}

?>

</body>
</html>
