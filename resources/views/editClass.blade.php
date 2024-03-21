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
            <h3 style="text-align: center">Edit Class</h3>
        </div>
        <div>
                <div class="container">
                    <form action="/edit2" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $rooms['id'] }}">
                       <div>
                        <label>Class Name</label><br>
                        <input type="text" name="class_name" value="{{ $rooms['class_name'] }}"><br>
                        @error('class_name')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div>
                        <label>Building Name</label><br>
                        <input type="text" name="building" value="{{ $rooms['building'] }}"><br> 
                        @error('building')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       {{-- <div class="mb-2">
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
                   </div> --}}
                       <br>
                    <div>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <a href="/class" class="btn btn-outline-danger">Cancel</a>
                    </div>
            </form>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>