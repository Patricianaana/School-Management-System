<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div>
        <h3 style="text-align: center">Grade List</h3>
    </div>
    <div class="mb-3 container-fluid">
        <a href="exam"><button type="submit" class="btn btn-primary">Add Grade</button></a>
    </div>
    <div class="container-fluid">
        <table class="table" border="2">
            <tr>
                <th>ID</th>
                <th>Start Mark</th>
                <th>End Mark</th>
                <th>Grade</th>
                <th>Remarks</th>
                <th>Actions</th>
            </tr>
            @foreach($data as $grade)
            <tr>
                <td>{{$grade['id']}}</td>
                <td>{{$grade['start_mark']}}</td>
                <td>{{$grade['end_mark']}}</td>
                <td>{{$grade['grade']}}</td>
                <td>{{$grade['remarks']}}</td>
                <td>
                    <div class="">
                        <a class="btn btn-success" href="{{'edit4/'.$grade['id']}}">Edit</a>
                        <a class="btn btn-danger" href="{{'delete4/'.$grade['id']}}">Delete</a>
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