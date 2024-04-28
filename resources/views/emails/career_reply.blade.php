<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$mailData['title']}}</title>
</head>
<body>
	<h3>{{$mailData['title']}}</h3><br>
	<p>{!!$mailData['body']!!}</p>
	<br><br>
	<img src="{{$message->embed($mailData['logo']) }}" width="300" alt="Mr4 Services" height="100"><br>
	{{'Mr4 Services'}}<br>
	{{'Contact : +01212272475'}}<br>
	{{'Address : Vowles road B711AP'}}<br>
</body>
</html>