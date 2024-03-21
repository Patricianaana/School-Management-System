<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Update Exams</h3>
        </div>
        <div>
                <div class="container">
                    <form action="/edit5" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                       <div>
                        <label>Exams Title</label><br>
                        <input type="text" name="exams_name" value="{{ $data['exams_name'] }}"><br>
                        @error('exams_name')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Class</label><br>
                        <select name="Class_id">
                            <option selected disabled>Select class</option>
                            @forelse (\App\Models\Classroom::all() as $classroom)
                                <option @selected($classroom->id==$data->Class_id) value="{{ $classroom->id }}">{{ $classroom->class_name}}</option>
                            @empty
                                <option selected disabled>No class room found.</option>
                            @endforelse
                        </select>
                        @error('Class_id')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                   </div>
                   <div class="mb-2">
                    <label>Course</label><br>
                    <select name="Course_id">
                        <option selected disabled>Select course</option>
                        @forelse (\App\Models\Course::all() as $course)
                            <option @selected($course->id==$data->Course_id) value="{{ $course->id }}">{{ $course->course_name}}</option>
                        @empty
                            <option selected disabled>No subject found.</option>
                        @endforelse
                    </select>
                    @error('Course_id')
                    <span style="color: red">
                        {{ $message }}
                    </span>
                    @enderror
               </div>     
                   <div class="mb-2">
                    <button type="submit" class="btn btn-success">Save Course</button>
                    <a href="/exams" class="btn btn-outline-danger">Cancel</a>
                   </div>
                   
            </form>
        </div>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>