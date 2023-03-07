$string =  '<!DOCTYPE html>'.
'<html lang="en">'.
'<head>'.
'    <meta charset="UTF-8">'.
'    <meta http-equiv="X-UA-Compatible" content="IE=edge">'.
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'    <link rel="stylesheet" href="style.css">'.
'    <title>Document</title>'.
'</head>'.
'<body>'.
<?php
 $nama = "Muhamad Wahyu Anugrahan";
?>
<?php
 $TempatTanggalLahir = "Surabaya 14 Oktober 2002";
?>
<?php
 $NPM = "21081010318";
?>
<?php
 $Alamat = "Jl Kalianak Timur Gg Rahmad Jaya No. 35";
?>
<?php
 $Email = "wahyu.anugrahan14@gmail.com";
?>
<?php
 $Nohandphone = "0859183987118";
?>
'    <div class="container">'.
'        <div class="box">'.
'            <h1>BIODATA</h1>'.
'            <center>'.
'                <img src="wahyu.jpeg" alt="Foto diri">'.
'            </center>'.
'            <table style="text-align: left; margin-left: 225px;" >'.
'                <tr>'.
'                    <td>'.
'                        '.
'                    </td>'.
'                    <td>'.
    <?php echo $nama ?> '.
'                    </td>'.
'                </tr>'.
'                <tr>'.
'                    <td>'.
'   <?php echo $TempatTanggalLahir ?> '.
'                    </td>'.
'                    <td>'.
'   <?php echo $NPM ?>'.
'                    </td>'.
'                </tr>'.
'                <tr>'.
'                    <td>'.
'   <?php echo $TempatTanggalLahir'.
'                    </td>'.
'                    <td>'.
'                        '.
'                    </td>'.
'                <tr>'.
'                    <td>'.
'                        Alamat'.
'                    </td>'.
'                    <td>'.
'                    : Jl. Kalianak Timur Gg Rahmad Jaya No 35'.
'                    </td>    '.
'                </tr>'.
'                <tr>'.
'                    <td>'.
'                        Email'.
'                    </td>'.
'                    <td>'.
'                        : wahyu.anugrahan14@gmail.com'.
'                    </td>'.
'                </tr>'.
'                <tr>'.
'                    <td>'.
'                        No.Handphone'.
'                    </td>'.
'                    <td>'.
'                        : 0859183987118'.
'                    </td>'.
'                </tr>'.
'            </table>'.
'        </div>'.
'    </div>'.
'    '.
'    </body>'.
'    </html>';

 echo $string; 