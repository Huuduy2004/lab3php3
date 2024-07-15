<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sách</title>
</head>

<body>
    <form action="{{ route('edit', $editbook->id) }}" method="POST">
        @csrf
        Title <input type="text" name="title" value="{{ $editbook->title }}"> <br>
        thumbnail <input type="text" name="thumbnail" value="{{ $editbook->thumbnail }}"><br>
        author <input type="text" name="author" value="{{ $editbook->author }}"><br>
        publisher <input type="text" name="publisher" value="{{ $editbook->publisher }}"><br>
        publication <input type="date" name="publication" value="{{ $editbook->publication }}"><br>
        price <input type="number" name="price" value="{{ $editbook->price }}"><br>
        quantity <input type="number" name="quantity" value="{{ $editbook->quantity }}"><br>
        <select name="category_id" value="{{ $editbook->title }}">
            @foreach ($categories as $cate_id)
                <option value="{{ $cate_id->id }}" {{ $cate_id->id == $editbook->category_id ? 'selected' : "" }}>
                    {{ $cate_id->name }}</option>
            @endforeach
        </select>
        <button type="submit">Sửa</button>
    </form>

</body>

</html>
