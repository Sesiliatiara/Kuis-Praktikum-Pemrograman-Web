<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 12%;
            padding-left: 33%;
        }
    </style>
</head>
<body>

<?php
echo "Selamat Datang user pada Hari ";
echo date("l, m-d-Y");

?>
<br>
<br>
<div>
<span><a href="pesanalumni.php" class="btn btn-secondary">INPUT PESAN ALUMNI</a></span>
<span><a href="cetakpesan.php" class="btn btn-success">LIHAT KESAN ALUMNI</a></span>
<span><a href="login.php" class="btn btn-danger">LOG OUT</a></span>
</div>

</body>
</html>