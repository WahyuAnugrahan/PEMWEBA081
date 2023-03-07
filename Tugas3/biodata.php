<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
      $nama = "Muhamad Wahyu Anugrahan";
      $tempattanggallahir = "Surabaya 14 Oktober 2002";
      $NPM = "21081010318";
      $alamat = "Jl Kalianak Timur Gg Rahmad No 35";
      $email = "wahyu.anugrahan14@gmail.com";
      $nohandphone = "0859183987118";
    ?>
    <div class="container">
        <div class="box">
            <h1>BIODATA</h1>
            <center>
                <img src="wahyu.jpeg" alt="Foto diri">
            </center>
            <table style="text-align: left; margin-left: 225px;" >
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :<?php echo $nama ?> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Tempat / Tanggal Lahir 
                    </td>
                    <td>
                        :<?php echo $tempattanggallahir ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        NPM
                    </td>
                    <td>
                        :<?php echo $NPM ?>
                    </td>
                <tr>
                    <td>
                        Alamat
                    </td>
                    <td>
                        :<?php echo $alamat ?>
                    </td>    
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        :<?php echo $email ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        No.Handphone
                    </td>
                    <td>
                        :<?php echo $nohandphone ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </body>
    </html>;