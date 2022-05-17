<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4{
            color:rgb(71, 6, 15);
        }
    </style>
</head>
<body>
    
</body>
</html>
<h1>ContactForm</h1>

<body>

<h4>Information:</h4>
<p>Name: {{ $details['name'] }}</p>
<p>Phone: {{ $details['phone'] }}</p>
<p>Email: {{ $details['email'] }}</p>
<p>Interested Program:{{ $details['interestedprogram'] }}</p>
<p> Start Date: {{ $details['date'] }}</p>
<p> Question: {{ $details['question'] }}</p>
<p>Thank You</p>
</body>