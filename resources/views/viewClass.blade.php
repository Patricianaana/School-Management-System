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
        <h3 style="text-align: center">Class Details</h3>
    </div>
    {{-- <div>
        <a href="addInput"><button type="submit" class="btn btn-primary">Add New Class</button></a>
    </div> --}}
    <div>
        {{-- <div>
            <form action="/search3" method="get">
                <label for="search">Search:</label>
                <input type="search" id="search1" name="search1" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                <button type="submit" class="btn btn-secondary">Search</button>
            </form>
            <br>
        </div> --}}
        <div class="container-fluid mb-3">
            <a href="/class" class="btn btn-primary">Back To Classes</a>
            {{-- <a href="" class="btn btn-info">Enroll Student</a> --}}
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div>
                    <h1>CLASS STUDENT LIST</h1>
                </div>

                <table class="table" border="2">
                    <tr>
                        <th>STUDENT ID</th>
                        <th>STUDENT NAME</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                    </tr>
                    @foreach($rooms as $room)
                    <tr>
                        <td>{{$room->student_id}}</td>
                        <td>{{$room->name}}</td>
                        <td>{{$room->email}}</td>
                        <td>{{$room->contact}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>


            <div class="col-md-5">
                <div>
                    <h1>CLASS COURSE LIST</h1>
                </div>
                <table class="table" border="2">
                    <tr>
                        <th>COURSE NAME</th>
                        <th>COURSE CODE</th>
                    </tr>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->course_name}}</td>
                        <td>{{$course->course_code}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>