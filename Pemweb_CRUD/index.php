<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#FDD4FF">
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1 style="color:black;">SMK Coding</h1>
    </header>
    <div class="formContainer" style="margin-top: auto; margin-bottom: auto;">
        <div class="d-flex justify-content-center">
            <a href="form-daftar.php"><button class="mr-3 btn btn-primary"> Daftar Baru</button></a>
            <a href="list-siswa.php"><button class="btn btn-primary">Pendaftar</button></a>
        </div>

        <?php if (isset($_GET['status'])) : ?>
            </br>
            </br>
            </br>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<h3>Pendaftaran siswa baru berhasil!</h3>";
                    } else {                            
                        echo "<br><br><h3>Pendaftaran gagal!</h3>";
                    }
                    ?>
                </p>
        <?php endif; ?>
    </div>

    </body>
</html>