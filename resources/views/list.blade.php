<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sách</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>thumbnail</th>
            <th>author</th>
            <th>publisher</th>
            <th>publication</th>
            <th>price</th>
            <th>quantity</th>
            <th>category</th>
        </tr>
        @foreach ($books as $book )
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td><img src="{{ $book->thumbnail }}" width="100" alt=""></td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->publication }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->quantity }}</td>
            <td>{{ $book->categoryName }}</td>
            <td>
                <a onclick="return confirm('Ban co muon xoa k?')" href="{{route('delete',$book->id)}}">Xoá</a>
                <a href="{{route('editform',$book->id)}}">Sửa</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('add')}}">Thêm</a>
</body>
</html>
</body>
</html>