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
            <h3 style="text-align: center">Update Grade</h3>
        </div>
        <div>
                <div class="container">
                    <form action="/edit4" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                    <div>
                        <label>Start Mark</label><br>
                        <input type="number" name="start_mark" value="{{ $data['start_mark']}}"><br> 
                        @error('start_mark')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label>End Mark</label><br>
                        <input type="number" name="end_mark" value="{{ $data['end_mark']}}"><br> 
                        @error('end_mark')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label>Grade</label><br>
                        <input type="text" name="grade" value="{{ $data['grade']}}"><br> 
                        @error('grade')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label>Remarks</label><br>
                        <input type="text" name="remarks" value="{{ $data['remarks']}}"><br> 
                        @error('remarks')
                        <span style="color: red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="/grading" class="btn btn-outline-danger">Cancel</a>
                    </div>
                    
            </form>
        </div>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>