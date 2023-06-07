<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleOrderr.css">
    <link rel="shourtcut icon" href="assets/roglogoss.png">
    <title>Republic of Gamers || Struk Order</title>
</head>

<body>

    <?php
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    ?>
    <section id="form" style="padding-top: 90px;">
        <form method="post" action="order.php">
            <br><br><br><br><br><br><br>
            <h2>PRINT ORDER</h2>
            <p>Name</p>
            <input type="text" disabled name="nama" class="input" value="<? echo $nama; ?>" /><br />

            <p>Date</p>
            <input type="date" disabled name="tanggal" class="input" value="<? echo $tanggal; ?>" /><br />

            <p>Address</p>
            <input type="text" disabled name="alamat" class="input-alamat" value="<? echo $alamat; ?>" /><br />

            <p>The Type</p>
            <input type="text" disabled name="jenis" class="input-alamat" value="<? echo $jenis; ?>" /><br />

            <p>Price</p>
            <input type="text" disabled name="harga" class="input-alamat" value="<?php
                                                                                    if ($jenis == "ROGZEPHYRUSG14") {
                                                                                        $ROGZEPHYRUSG14 = 20000000;
                                                                                        echo "Rp. $ROGZEPHYRUSG14";
                                                                                    } elseif ($jenis == "ROGZEPHYRUSM16") {
                                                                                        $ROGZEPHYRUSM16 = 30000000;
                                                                                        echo "Rp. $ROGZEPHYRUSM16";
                                                                                    } elseif ($jenis == "ROGSTRIXSCAR") {
                                                                                        $ROGSTRIXSCAR = 40000000;
                                                                                        echo "Rp. $ROGSTRIXSCAR";
                                                                                    } elseif ($jenis == "ROGFLOWX13") {
                                                                                        $ROGFLOWX13 = 40000000;
                                                                                        echo "Rp. $ROGFLOWX13";
                                                                                    } ?>
            " /><br />
            <br />
            <div class="tombol">
                <br>
                <input type="button" name="submit" value="kembali" class="button" onclick="pindah('index.html')" />
            </div>
        </form>
    </section>


</body>
<script>
    alert("THANK YOU FOR ORDERED :D");

    function bayar() {
        var tenure = prompt("Inputkan Uang Anda");
        document.getElementById("msg").innerHTML = "Rp. " + tenure;
    }

    function pindah(url) {
        window.location = url;
    }
</script>

</html>