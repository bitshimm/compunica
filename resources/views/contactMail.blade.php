<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>{{$name}} </h1>
        <table style="box-shadow: rgba(0, 0, 0, .85); border-radius: 15px; font-size:12pt; font-weight:600;">
            <tr>
                <td style="padding: 10px;">Компания:</td>
                <td style="padding: 10px;">{{$company}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Email:</td>
                <td style="padding: 10px;">{{$email}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Телефон:</td>
                <td style="padding: 10px;">{{$phone}}</td>
            </tr>
        </table>
        <div style="
        box-shadow: rgba(0, 0, 0, .85);
        border-radius: 15px;
        padding: 15px;
        font-style: italic;
        font-size: 14pt;
        ">
            <p>{{$comment}}</p>
        </div>
    </div>
</body>

</html>