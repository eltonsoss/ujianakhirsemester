<?php require 'includes/header.php'; ?>
             <div id="div2" style="background-color:#352E31;height:51px;">
                <a href="index.php"><button>HOME</button></a>
                <a href="galeri.php"><button>GALLERY</button></a>
                <a href="about.php"><button>ABOUT</button></a>
                <p>
            </div>
            </center>
            <p></p>
        
        <div class="row">
    <div class="small-2 large-4 columns"><b><u>Ini Kolom Pertama</u></b><br>
    <b><u>Menggunakan "printf"</u></b><br><br>
        <?php


            $name = "Elton Sostenes. S";
            $npm = 4514210021;
            print ("Halo <br>");
            printf("Nama Saya Adalah : %s dan <br> NPM Saya : %d", $name, $npm);
        ?>
    </div>
            
    <div class="small-4 large-4 columns"><b><u>Ini Kolom Kedua</u></b><br>
        <br>PHP disebut bahasa pemrograman server side karena PHP diproses pada komputer server. Hal ini berbeda dibandingkan dengan bahasa pemrograman client-side seperti JavaScript yang diproses pada web browser (client).</div>
            
    <div class="small-6 large-4 columns"><b><u>Ini Kolom Ketiga</u></b><br>
        <b><u>Menggunakan "sscanf"</u></b><br><br>
        <?php

        sscanf("Oktober 14, 2015", "%s %[^,], %d", $month, $day, $year);
        
        print ("Tanggal :<br>");
        echo $day;  print ("<br>");
        echo $month;  print ("<br>");
        echo $year;

        ?>
    </div>
    

        <div class="row">
  <div class="large-11 columns"><br>Kemudahan dan kepopuleran PHP sudah menjadi standar bagi programmer web di seluruh dunia. Menurut wikipedia pada februari 2014, sekitar 82% dari web server di dunia menggunakan PHP. PHP juga menjadi dasar dari aplikasi CMS (Content Management System) populer seperti Joomla, Drupal, dan WordPress.</div>
</div>
          
          
    </body>
<?php require 'includes/footer.php'; ?>