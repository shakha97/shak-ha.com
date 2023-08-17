<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Javascript World!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
    <h1>The World Airports</h1>
    <div class="table-container">
        <table id="airports">
            <thead>
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Country</th>
                <th>Name</th>
                <!-- Add more header columns here -->
            </tr>
            </thead>
            <tbody>
            @foreach($airports as $airport)
            <tr>
                <td>{{$airport->id}}</td>
                <td>{{$airport->city}}</td>
                <td>{{$airport->country}}</td>
                <td>{{$airport->name}}</td>
                <!-- Add more data rows here -->
            </tr>
            @endforeach
                <!-- Add more data rows here -->
            </tbody>
        </table>
    </div>

</div>

<script>
    let table = new DataTable('#airports');
</script>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #9ca3af;
    }
    .container{
        margin: 20px auto;
        padding: 20px;
        background-color: #595962;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ccc;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    th, td:hover {
        background-color: azure;
        color: #1f242d;
    }

    th {
        background-color: #000000 !important;
        font-weight: bold;
        color: gold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-container {
        overflow-x: auto;
    }
    #airports_filter{
        margin: 20px auto;
    }
    .dataTables_length{
        margin: 20px auto;
    }
</style>

</body>
</html>
