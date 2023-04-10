<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist//css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Alarm Alert</title>
</head>

<body>
    <div class="wrapper">
        <img src="files/clock.svg" alt="clock">
        <h1>00:00:00 PM</h1>

        <div class="content">
            <div class="column">
                <select name="" id="">
                    <option value="Hour" selected hidden>Hour</option>

                </select>
            </div>
            <div class="column">
                <select name="" id="">
                    <option value="Minute" selected hidden>Minute</option>

                </select>
            </div>
            <div class="column">
                <select name="" id="">
                    <option value="Hour" selected hidden>AM/PM</option>


                </select>

            </div>

        </div>
        <button>Set Alarm</button>
    </div>
    <script src="script.js"></script>
</body>

</html>