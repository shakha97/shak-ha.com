<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/realestate.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Real Estate Sales</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            @foreach($realestate_items as $item)
            <tr>
                <td><strong>{{$item->id}}</strong></td>
                <td><a target="_blank" href="{{$item->link}}">{{$item->title}}</a></td>
                <td class="img"><img src="{{$item->image}}" alt="image"></td>
                <td>{{$item->description}}</td>
            </tr>
            @endforeach
        </table>

        <div class="pagination justify-content-center">
            {{$realestate_items->links()}}
        </div>
    </div>

</body>
</html>
