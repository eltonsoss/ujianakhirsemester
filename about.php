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
    <b><u>Menggunakan "preg_match"</u></b><br><br>
        <?php
                $string = array('0341-000123', '0311231231',
                  '021999999', '041321321', '031-12332');
                foreach($string as $s) {
                  if(preg_match("/^(0341|031|021)-?[\d]{6,7}$/", $s)) {
                    echo 'Nomer '.$s.' sesuai<br />';
                  } else {
                    echo 'Nomer '.$s.' tidak sesuai<br />';
                  }
                }
        ?>
        </div>
            
    <div class="small-4 large-4 columns">
    <b><u>Ini Kolom Kedua</u></b><br>
    <b><u>Mengambil Data dari BMKG</u></b><br><br>
        <?php
                $url = "http://data.bmkg.go.id/propinsi_16_1.xml"; // from http://data.bmkg.go.id/ sesuaikan dengan lokasi yang diinginkan
                $sUrl = file_get_contents($url, False);
                $xml = simplexml_load_string($sUrl);
                for ($i=0; $i<sizeof($xml->Isi->Row); $i++) {
                    $row = $xml->Isi->Row[$i];
                    if(strtolower($row->Kota) == "blitar") {// blitar merupakan contoh kota yang diambil data cuacanya dari bmkg
                        echo "<b>" . strtoupper($row->Kota) . "</b><br/>";
                        echo "<img src='http://www.bmkg.go.id/ImagesStatus/" . $row->Cuaca . ".gif' alt='" . $row->Cuaca . "'><br/>";
                        echo "Cuaca : " . $row->Cuaca . "<br/>";
                        echo "Suhu : " . $row->SuhuMin . " - ".$row->SuhuMax . " &deg;C<br/>";
                        echo "Kelembapan : " . $row->KelembapanMin . " - " . $row->KelembapanMax . " %<br/>";
                        echo "Kecepatan Angin : " . $row->KecepatanAngin . " (km/jam)<br/>";
                        echo "Arah Angin : " . $row->ArahAngin . "<br/>";
                        break;
                    }
                }
        ?>
        </div>
            
    <div class="small-6 large-4 columns"><b><u>Ini Kolom Ketiga</u></b><br>
    <b><u>Menggunakan "preg_match"</u></b><br><br>
        <?php
            $string = 'abcdefghijk';
            if(preg_match("/fgh/", $string)) {
              echo 'String berisi pola fgh';
            } else {
              echo 'Tidak ada pola fgh dalam string';
            }
        ?>
    </div>
    

</div>
          
          
    </body>
<?php require 'includes/footer.php'; ?>