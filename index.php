<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather App</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
</head>
<body>
<script type="text/javascript"> //new
 function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('time').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }
             
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);         
        </script>
    <div class="container">
        <div class="weather-box">
            <div class="row1">
                <h2 class="weather-location"></h2>
                
                <canvas class="weatherType" id="icon1" width="128" height="128"></canvas>  
            </div>
            <div class="row2">
                <h1 class="temp"></h1>
                <span class="temp-type">°C</span>
            </div>
            <h2 class="weather-description">Hari yang  menyenangkan hehe</h2>  

            <h5 class="alamat">Sekip Unit 1, Blimbing Sarii, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</h5>            
        </div>
    </div>
    <script src="skycons.js"></script>
    <script src="./assets/js/skycons.js"></script>
    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/main.js"></script>     
    <div id="time"></div>  
</body>
</html>