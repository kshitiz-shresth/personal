<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .rashi{
            display: flex;
        }
    </style>
    <title>Thankyou</title>
</head>
<body>
    <h3>धन्यवाद हजुर, तपाईले {{$rashifal['title']}} राशिको लागि सदस्यता लिनु भएको छ।</h3>
    <p>भोली बाट हरेक दिन तपाईको राशिफल यो ईमेलमा आउने छ।</p>
    <h2>तपाईको आजको राशिफल:</h2>
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
