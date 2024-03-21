<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="container-fluid">
        <h6>Welcome Admin!</h6>
    </div>

    <div class="container-fluid">
        <div>
            <h3 style="text-align: center">Student List</h3>
        </div>
        <div>
            <a href="addData"><button type="submit" class="btn btn-primary mb-4">Add New Student</button></a>
        </div>
        <div>
            <form action="/search" method="get">
                <label for="search">Search:</label>
                <input type="search" id="search" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                <button type="submit" class="btn btn-secondary">Search</button>
            </form>
            <br>
        </div>
        <div>
            <table class="table" border="2">
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Nationality</th>
                    <th>Class</th>
                    <th>Actions</th>
                </tr>
                @foreach($data as $friend)
                <tr>
                    <td>{{$friend['id']}}</td>
                    <td>{{$friend['student_id']}}</td>
                    <td>{{$friend['name']}}</td>
                    <td>{{$friend['age']}}</td>
                    <td>{{$friend['email']}}</td>
                    <td>{{$friend['address']}}</td>
                    <td>{{$friend['contact']}}</td>
                    <td>{{$friend['nationality']}}</td>
                    <td>{{$friend->classRoom->class_name ?? 'No Class' }}</td>
                    <td><a href="{{'edit/'.$friend['id']}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td><a href="{{'delete/'.$friend['id']}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include('dashboardBtn')
    @include('footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>