<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examination Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center">Examination Records</h3>
    </div>
    <div class="container-fluid mb-3">
        <a href="/addRec"><button type="submit" class="btn btn-primary">Add Record</button></a>
    </div>
    <div class="container-fluid">
        <table class="table" border="2">
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Course</th>
                <th>Exam Score</th>
                <th>Grade</th>
                <th>Remark</th>
                <th>Actions</th>
                
            </tr>
            @foreach($data as $record)
            <tr>
                <td>{{ $record->student->id }}</td>
                <td>{{ $record->student->name ?? 'No Student' }}</td>
                <td>{{ $record->examination->getCourse->course_name ?? 'No course'}}</td>
                <td>{{ $record->exam_score }}</td>
                <td>{{ $record->grade->grade ?? 'No grade' }}</td>
                <td>{{ $record->grade->remarks ?? 'No remarks' }}</td>
                <td>
                    <div class="">
                        {{-- <a class="btn btn-info" href="{{'view3/'.$record->id}}">View</a> --}}
                        {{-- <a href="{{'edit6/'.$record->id}}" class="btn btn-success">Edit</a> --}}
                        <a href="{{ 'delete6/'.$record->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <div><a href="/exams" class="btn btn-primary">Back To Records</a></div>
    </div>
    {{-- @include('dashboardBtn') --}}
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
