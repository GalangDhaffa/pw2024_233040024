<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pembungkus {
            display: flex;
        }

        .kotak {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            background-color: #BBE2EC;
            width: 100px;
            height: 100px;
            border: 1px solid black;
            line-height: 100px;
        }
    </style>
</head>
<body>
    
    <div class="kotak">1</div>
    <div class="pembungkus">
        <div class="kotak">2</div>
        <div class="kotak">2</div>
    </div>
    <div class="pembungkus">
        <div class="kotak">3</div>
        <div class="kotak">3</div>
        <div class="kotak">3</div>
</div>
   
</body>
</html>