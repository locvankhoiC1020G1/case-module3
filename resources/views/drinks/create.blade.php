<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('drink.store')}}" method="post">
@csrf
   TÊN đồ uống: <input type="text" name="name" id="">
    goas<input type="number" name="price" id="">
    <button type="submit">Thêm</button>
</form>
</body>
</html>
