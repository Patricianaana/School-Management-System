<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Edit Course</h3>
        </div>
        <div>
                <div class="container">
                    <form action="/edit1" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $course['id'] }}">
                       <div>
                        <label>Course Name</label><br>
                        <input type="text" name="course_name" value="{{ $course['course_name'] }}"><br>
                        @error('course_name')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div>
                        <label>Course Code</label><br>
                        <input type="text" name="course_code" value="{{ $course['course_code'] }}"><br> 
                        @error('course_code')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Class</label><br>
                        <select name="class_id">
                            <option selected disabled>Select class</option>
                            @forelse (\App\Models\Classroom::all() as $classroom)
                                <option @selected($classroom->id== $course->class_id) value="{{ $classroom->id }}">{{ $classroom->class_name}}</option>
                            @empty
                                <option selected disabled>No class room found.</option>
                            @endforelse
                        </select>
                        @error('class_id')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                   </div>
                       <br>
                    <div>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <a href="/subjects" class="btn btn-outline-danger">Cancel</a>
                    </div>
            </form>
        </div>


    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>