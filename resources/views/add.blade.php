<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sách</title>
</head>

<body>
    <form action="{{ route('create') }}" method="POST">
        @csrf
        Title <input type="text" name="title" id=""> <br>
        thumbnail <input type="text" name="thumbnail" id=""><br>
        author <input type="text" name="author" id=""><br>
        publisher <input type="text" name="publisher" id=""><br>
        publication <input type="date" name="publication" id=""><br>
        price <input type="number" name="price" id=""><br>
        quantity <input type="number" name="quantity" id=""><br>
        <select name="category_id" id="">
            @foreach ($categories as $cate_id)
            <option value="{{ $cate_id->id }}">{{$cate_id->name}}</option>
            @endforeach
        </select>
        <button type="submit">Thêm</button>
    </form>

</body>

</html>
