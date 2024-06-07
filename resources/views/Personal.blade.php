<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bilgilerim</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #okulno {
            position: absolute;
            font-size: 20px;
            top: 210px;
            left: 320px;
            padding: 5px;
            margin: 5px;
            border: 5px solid black;
            border-radius: 50px;
            overflow: hidden;
        }

        #Cinsiyet {
            width: 70px;
            height: 100px;
            color: blue;
            position: absolute;
            left: 450px;
            top: 140px;
        }

        li {
            width: 150px;
            height:40px;
            top: 370px;
            position: relative;
        }

    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div style="text-align: center;">Ben <strong>Selçuk Şeker.</strong></div>
<div>
    <i class="fa fa-user" style="font-size: 80px; position:absolute;top: 100px; left: 350px;"></i>
    <label for="İsmim" style="position: absolute;font-size: 20px; top:180px; left: 330px; ">
        Selçuk Şeker
    </label>
</div>
<div><label for="Okul Numaram" id="okulno">2110213036</label></div>
<div><label for="Okul Numaram" style="position: absolute; font-size: 20px; top: 270px; left:240px;">Computer Engineering 2nd Year Student</label></div>
<ion-icon name="male" id="Cinsiyet"></ion-icon>
<ion-icon name="battery-dead-outline" style="position: absolute; top:545px; left:200px;width: 50px; height: 100px;"></ion-icon>
<ion-icon name="battery-half-outline"style="position: absolute; top:500px; left:200px;width: 50px; height: 100px;"></ion-icon>
<ion-icon name="battery-full-outline"style="position: absolute; top:380px; left:200px;width: 50px; height: 100px;"></ion-icon>
<ion-icon name="battery-half-outline"style="position: absolute; top:420px; left:200px;width: 50px; height: 100px;"></ion-icon>
<ion-icon name="battery-half-outline"style="position: absolute; top:460px; left:200px;width: 50px; height: 100px;"></ion-icon>
<ion-icon name="battery-charging-outline"style="position: absolute; top:545px; left:290px; width: 50px; height: 100px;"></ion-icon>
<ion-icon name="arrow-forward-outline"style="position: absolute; top:545px; left:250px; width: 30px; height: 100px;"></ion-icon></ion-icon>
<h2 style="position: absolute; top: 350px;">Şuan Bildiğim Yazılım Dilleri</h2>
<ul>
    <li>C <span>Bu dili iyi biliyorum.</span></li>
    <li>Java <span>Bu dili orta düzeyde biliyorum.</span></li>
    <li>HTML <span>Bu dili orta düzeyde biliyorum.</span></li>
    <li>CSS <span>Bu dili orta düzeyde biliyorum.</span></li>
    <li>JavaScript <span>Bu dili şuan hiç bilmiyorum.</span></li>
</ul>
<footer style="bottom: 0;right: 0; font-size: 12px;position: absolute;">&copy Bu Site Tamamen Deneme Amaçlı Ve Şahsıma Aittir.</footer>
</body>
</html>
