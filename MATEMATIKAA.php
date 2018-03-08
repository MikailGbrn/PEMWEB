<?php 
    @$alas = $_REQUEST['alas'];
    @$tinggi = $_REQUEST['tinggi'];
    @$sisi = $_REQUEST['sisi'];
    @$tinggi_prisma = $_REQUEST['tinggi_prisma'];
    @$luas_alas_segitiga = 1/2 * $alas * $tinggi;
    @$volume_prisma_segitiga = $luas_alas_segitiga * $tinggi_prisma;
    @$luas_alas_persegi = $sisi * $sisi;
    @$volume_prisma_persegi = $luas_alas_persegi * $tinggi_prisma;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>VOLUME PRISMA BUNGA</title>
    </head>
    <body bgcolor=#f7e78a>
        <p class="judul">MENCARI LUAS ALAS DAN VOLUME PRISMA</p>
        <style type="text/css">
  .center{
      text-align: center;
  }
  .warna{
    color: #ef8be7;
    font-size: 20px;
    font-family: arial ; 
    font-weight: bold;
  }
  .judul{
    color: #84b1f9;
    text-align: center;
    font-size: 30px;
    font-family: arial ; 
    font-weight: bold;
  }
</style>
        <form class="center warna" method="REQUEST">
            <table>
                <p class="center warna">
                    <p1>Alas</p1>
                    <p1>=</p1>
                    <p1><input type="text" name="alas" value="<?php echo $alas; ?>"/>cm<br/></p1>

                    <p2>Tinggi</p2>
                    <p2>=</p2>
                    <p2><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></p2>

                    <p3>Tinggi Prisma</p3>
                    <p3>=</p3>
                    <p3><input type="text" name="tinggi_prisma" value="<?php echo $tinggi_prisma; ?>"/>cm<br/></p3>
               
                    <p4>Sisi</p4>
                    <p4>=</p4>
                    <p4><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></p4>
                </p>
            </table>
            <input type="submit" name="HITUNG" value="HITUNG"/><br/><br/>
            <?php
                echo "Luas Alas Prisma Segitiga= ".$luas_alas_segitiga." cm²<br/>";
                echo "Volume Prisma Segitiga = ".$volume_prisma_segitiga." cm³<br/><br/>";
                echo "Luas Alas Prisma Persegi = ".$luas_alas_persegi." cm²<br/>";
                echo "Volume Prisma Persegi = ".$volume_prisma_persegi." cm³<br/>";
            ?>
        </form>
    </body>
</hmtl>