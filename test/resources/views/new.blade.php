<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orlik</title>
</head>
<body>
    <h1>
        @isset($name){{$name}}@endisset
    </h1>
    <form method="post" action="{{route('testTest.indexNew')}}" enctype="multipart/form-data">
        @csrf
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <input type="file", name="file">
        </p>
        <p>
            <button type="submit">Send</button>
        </p>
    </form>

</body>
</html>
