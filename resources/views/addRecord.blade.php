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
    <div class="contaier-fluid">
        <div>
            <h3 style="text-align: center">Add Record</h3>
        </div>
        <div>
                <div class="container">
                    <form action="records" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>Student Name</label><br>
                            <select name="Student_id">
                                <option selected disabled>Select student</option>
                                @forelse (\App\Models\Student::all() as $studentName)
                                    <option value="{{ $studentName->id }}">{{ $studentName->name}}</option>
                                @empty
                                    <option selected disabled>No student found.</option>
                                @endforelse
                            </select>
                            @error('Student_id')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                       </div>

                       <div class="mb-2">
                        <label>Examination</label><br>
                        <select name="examination_id">
                            <option selected disabled>Select Examination</option>
                            @forelse (\App\Models\Examination::all() as $exams)
                                <option value="{{ $exams->id }}">{{ $exams->exams_name}}</option>
                            @empty
                                <option selected disabled>No examination found.</option>
                            @endforelse
                        </select>
                        @error('examination_id')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                   </div>


                       <div>
                        <label>Exams score</label><br>
                        <input type="number" name="exam_score" placeholder="Enter exam score here"><br>
                        @error('exam_score')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                       </div>
                       <div class="mt-3">
                        <button type="submit" class="btn btn-success">Save Record</button>
                        <a href="/exams" class="btn btn-outline-danger">Cancel</a>
                       </div>
                       <a href="/exams" class="btn btn-primary mt-3">Back To Records</a>
                    </form>
        </div>
    </div>
    
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>