<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/form" method="post">
        <label for="">Name : </label>
        <input type="text" name="nama">
        <input type="submit" value="Say Hello">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    </form>
</body>
</html>