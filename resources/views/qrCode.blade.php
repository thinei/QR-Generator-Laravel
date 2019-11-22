<!DOCTYPE html>
<html>
<head>
    <title>QR Generator</title>
    <style>
        .item-align {
            margin-top: 5%;
            margin-left: 5%;
        }
    </style>
</head>

<body>

<div class="item-align">
    <h1> QR Code Generator With Laravel 5.7 </h1>
    {!! QrCode::size(250)->generate('A simple example of QR code'); !!}

</div>

</body>
</html>
