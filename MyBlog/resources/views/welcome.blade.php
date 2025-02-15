<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> wellcome to the this page </h1>
    <form action="/" method="POST">
        @csrf
        <input type="text" name="username" id="">
        <button type="submit">submmit</button>
    </form>

    <form action="/" method="POST">
        @csrf
        <input type="hidden" name="_method" id="" value="PUT">
        <input type="text" name="username" id="">
        <button type="submit">submmit put</button>
    </form>
</body>
</html>