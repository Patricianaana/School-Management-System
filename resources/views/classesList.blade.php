<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center">Class List</h3>
    </div>
    <div class="container-fluid">
        <a href="addInput"><button type="submit" class="btn btn-primary mb-3">Add New Class</button></a>
    </div>
    <div class="container-fluid">
        <form action="/search2" method="get">
            <label for="search">Search:</label>
            <input type="search" id="search" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
        <br>
    </div>
    <div class="container-fluid">
        <table class="table" border="2">
            <tr>
                <th>ID</th>
                <th>Class Name</th>
                <th>Building Name</th>
                <th>Actions</th>
            </tr>
            @foreach($rooms as $data)
            <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['class_name']}}</td>
                <td>{{$data['building']}}</td>
                <td>
                    <div class="">
                        <a class="btn btn-info" href="{{'view/'.$data['id']}}">View</a>
                        <a class="btn btn-success" href="{{'edit2/'.$data['id']}}">Edit</a>
                        <a class="btn btn-danger" href="{{'delete2/'.$data['id']}}">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('dashboardBtn')
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>