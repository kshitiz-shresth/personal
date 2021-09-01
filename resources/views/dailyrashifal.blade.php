<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .rashi {
            margin-bottom: 30px;
            display: flex;
        }
        .rashi_image {
            width: 100px;
        }
        .rashi_image img {
            width: 100%;
        }
        .rashi_description {
            width: 400px;
        }

        .unsubscribe a {
            text-decoration: none;
            background: #FF6D00;
            color: #fff;
            padding: 3px 10px;
            border-radius: 4px;
        }
    </style>
    <title>Thankyou</title>
</head>
<body>
    <h3>{{$title}}:</h3>
    <div class="rashi">
        <div class="rashi_image">
            <img src="{{$rashifal['image']}}" alt="">
        </div>
        <div class="rashi_description">
            <p>{{$rashifal['description']}}</p>
        </div>
    </div>
    <div class="unsubscribe">
        <a href="{{route('unsubscribe',encrypt($user['id']))}}">Unsubscribe</a>
    </div>
</body>
</html>
