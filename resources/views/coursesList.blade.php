<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center">Course List</h3>
    </div>
    <div class="container-fluid">
        <a href="addNew"><button type="submit" class="btn btn-primary mb-3">Add New Course</button></a>
    </div>
    <div class="container-fluid">
        <form action="/search1" method="get">
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
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
            @foreach($course as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['course_name']}}</td>
                <td>{{$user['course_code']}}</td>
                <td>{{$user->classRoom->class_name ?? 'No Class' }}</td>
                <td>
                    <div class="">
                        <a class="btn btn-success" href="{{'edit1/'.$user['id']}}">Edit</a>
                        <a class="btn btn-danger" href="{{'delete1/'.$user['id']}}">Delete</a>
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