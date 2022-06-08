<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 1%;
            padding-left: 37%;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <h4>Register Account</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Your Name" />
            </div>

            <div class="form-group">
                <label for="name">Address</label>
                <input class="form-control" type="text" name="address" placeholder="Your Address" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>

            <div class="form-group">
                <label for="email">Angkatan</label>
                <input class="form-control" type="text" name="angkatan" placeholder="Angkatan" />
            </div>

            <div class="form-group">
                <label for="email">Jurusan</label>
                <input class="form-control" type="text" name="Jurusan" placeholder="Jurusan" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="Submit" value="Daftar" />

        </form>
            
        </div>

    </div>
</div>

<?php 
  include("koneksi.php");

  if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $angkatan = $_POST['angkatan'];
    $jurusan = $_POST['Jurusan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO alumni (name,address,email,angkatan,jurusan,username,password) VALUES ('$name','$address','$email','$angkatan','$jurusan','$username','$password')";
    $peserta = mysqli_query($conn, $sql);

        if ($peserta) {
          echo "Success";
          exit;
        }
    else {
      echo "Failed";
      exit;
    }
  }
  ?>

</body>
</html>