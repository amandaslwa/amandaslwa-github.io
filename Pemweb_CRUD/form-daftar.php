<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Akun Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#FDD4FF">
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <div class=formContainer>
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>

            <table cellspacing="1" align="center" cellpadding="10" border="0">
            <tr>
                <td> <label for="nama">Nama: </label> </td>
                <td> <input type="text" name="nama" placeholder="Nama Lengkap" minlength="3" maxlength="50" size="100"> </td>
            </tr>
            <tr>
                <td> <label for="alamat">Alamat: </label> </td> 
                <td> <textarea name="alamat"></textarea> </td> 
            </tr>
            <tr>
            <td> <label for="jenis_kelamin">Jenis Kelamin: </label> </td> 
            <td> <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label> </br>
                 <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </td> 
            </tr>
            <tr>
                <td> <label for="agama">Agama: </label> </td> 
                <td> 
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select> 
                </td> 
            </tr>
            <tr>
                <td> <label for="sekolah_asal">Sekolah Asal: </label> </td> 
                <td> <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" /> </td> 
            </tr>
            <tr>
                <td> <button name="daftar" type="submit" class="btn btn-primary" style="margin-top: 20px;">Daftar</button> </td> 
            </tr>

            </fieldset>

        </form>
    </div>
    </body>
</html>