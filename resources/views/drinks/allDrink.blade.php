<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<form action="{{route('drink.find')}}" method="post">
    @csrf
    <input type="text" name="search" id="">
    <button type="submit">Tìm</button>
</form>
<a href="{{route('drink.create')}}">Thêm đồ uống</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">img</th>
        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    {{--   @if(count($drinks)==0)
            <tr><td colspan="4">Không có dữ liệu</td></tr>
        @else--}}
    @foreach($drinks as $key=>$drink)
        <tr>
            <th scope="row">{{{++$key}}}</th>
            <td>{{$drink['name']}}</td>
            <td>{{$drink['price']}}</td>
            <td>{{$drink['img']}}</td>
            <td><a href="{{route('drink.edit', $drink['id'])}}">Sửa</a>
                <a href="{{route('drink.destroy', $drink['id'])}}">Xóa</a></td>
            {{--  <td><a href="{{route('drink.delete')}}">Xóa</a>  </td>--}}
        </tr>
    @endforeach
    {{--
            @endif
    --}}

    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
