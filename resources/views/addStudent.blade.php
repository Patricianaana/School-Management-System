<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Add Student</h3>
        </div>
        <div>
                <div class="container">
                    <form action="users" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>Student ID</label><br>
                            <input type="text" name="student_id" placeholder="Enter student here"><br>
                            @error('student_id')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                       <div class="mb-2">
                        <label>Full Name</label><br>
                        <input type="text" name="name" placeholder="Enter name here"><br>
                        @error('name')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Age</label><br>
                        <input type="number" name="age" placeholder="Enter age here"><br> 
                        @error('age')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Email</label><br>
                        <input type="text" name="email" placeholder="Enter email here"><br>
                        @error('email')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Address</label><br>
                        <input type="text" name="address" placeholder="Enter address here"><br>
                        @error('address')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Contact</label><br>
                        <input type="text" name="contact" placeholder="Enter contact here"><br>
                        @error('contact')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                        <label>Nationality</label><br>
                        <input type="text" name="nationality" placeholder="Enter nationality here"><br>
                        @error('nationality')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mb-2">
                            <label>Class</label><br>
                            <select name="classes_id">
                                <option selected disabled>Select class</option>
                                @forelse (\App\Models\Classroom::all() as $classroom)
                                    <option value="{{ $classroom->id }}">{{ $classroom->class_name}}</option>
                                @empty
                                    <option selected disabled>No class room found.</option>
                                @endforelse
                            </select>
                            @error('classes_id')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                       </div>
                       <br>
                       <div class="mb-5">
                        <button type="submit" class="btn btn-success">Save Student</button>
                        <a href="/users" class="btn btn-outline-danger">Cancel</a>
                       </div>
            </form>
        </div>
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>