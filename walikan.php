<?php
/**
 * Created by PhpStorm.
 * User: Rifky_Rep
 * Date: 19/04/2017
 * Time: 15.50
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamus Bahasa Walikan</title>
    <script src="jquery.js"></script>
    <script>
        function arti() {
            var teks = $("#teks").val();
            var data = 'teks=' + teks;
            $.ajax({
                type: 'POST',
                url: 'ajax.php',
                data: data,
                cache: false,
                success: function(html){
                    $('#translate').html(html);
                }
            });
        }
    </script>
</head>
<body>
<table>
    <tr>
        <td>
            <label for="">Masukkan kalimat</label>
        </td>
        <td>
            <input id="teks" type="text" name="input_kata" value="">
        </td>
    </tr>
    <tr>
        <td>
            <button onclick="arti()">Proses</button>
        </td>
    </tr>
    <tr>
        <td>
            <div id="translate">

            </div>
        </td>
    </tr>
</table>
</body>
</html>
