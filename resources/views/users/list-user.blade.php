<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.addUsers') }}">Thêm mới</a>
    <table border=1>
        
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Phòng ban</th>
            <th>Hành động</th>
        </tr>
      
            <tbody>
                @foreach($listUsers as $key => $user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->ten_donvi}}</td>
                    <td><a href="{{route('users.deleteUsers',$user->id)}}">Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
        
        
    </table>
</body>
</html>