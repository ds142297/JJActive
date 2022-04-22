<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
        *{margin:0;padding:0;font-family: 'Josefin Sans', sans-serif;}
        @page { margin: 0px 0px 0px 0px; }
    </style>
</head>
<body style="margin:0;padding:0;">
    <div style="width: 100%;height:100vh;position: relative;display:grid;place-items:center;">
        <img src="{{ public_path('certificate.jpg') }}" style="width: 100%; height: 100%; position: absolute;top:0;left:0;" />
        <h1 style="color: #2562cc;z-index:3; position: absolute;top:50%;left:57%;transform:translate(-50%,-50%);font-size: {{$font}}px;text-transform: uppercase;font-family: 'Josefin Sans', sans-serif;">{{$name}}</h1>
    </div>
</body>
</html>