@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Vui lòng kiểm tra vé</title>
</head>
<body>
    
<div class="visible-print text-center">
    <h1></h1>
    
    {!! QrCode::size(250)->generate('learning-points.in') !!}
    <p>Chúc bạn tham dự sự kiện vui vẻ</p>
</div>
    
</body>
</html>