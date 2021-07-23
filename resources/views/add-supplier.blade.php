<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('add-new-supplier')}}" method="POST">
    @csrf
    <input type="text" name="name" id="">
    <input type="text" name="contact" id="">
    <input type="text" name="email" id="">
    <input type="text" name="address" id="">

<button type="submit"> Submit</button>
    </form>
    <div id="root"></div>
    <script src="{{mix('js/index.js')}}"></script>
</body>
</html>