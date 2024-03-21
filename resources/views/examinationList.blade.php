<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center">Examination List</h3>
    </div>
    <div class="mb-3 container-fluid">
        <a href="addExamination"><button type="submit" class="btn btn-primary">Add Examination</button></a>
    </div>
    <div class="container-fluid">
        <table class="table" border="2">
            <tr>
                <th>ID</th>
                <th>Examination Name</th>
                <th>Class</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            @foreach($data as $test)
            <tr>
                <td>{{$test['id']}}</td>
                <td>{{$test['exams_name']}}</td>
                <td>{{$test->ClassRoom->class_name ?? 'No Class' }}</td>
                <td>{{$test->getCourse->course_name ?? 'No Course' }}</td>
                {{-- <td>{{$test->getCourse ? $test->getCourse->course_name.' '.$test->getCourse->ClassRoom->class_name : 'No Course' }}</td> --}}
                <td>
                    <div class="">
                        <a class="btn btn-info" href="{{'view3/'.$test['id']}}">View</a>
                        <a href="{{'edit5/'.$test['id']}}" class="btn btn-success">Edit</a>
                        <a href="{{ 'delete5/'.$test['id'] }}" class="btn btn-danger">Delete</a>
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