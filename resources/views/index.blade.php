<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management System with Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('header')
    <div class="container mt-5 mb-5">
        <di class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/stud.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Register New Student</h5>
                      <p class="card-text">Click on the button below to add a student or view student list.</p>
                      <a href="users"><button type="submit" class="btn btn-primary">View Students</button></a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/class.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Add New Class</h5>
                      <p class="card-text">Click on the button below to add a class or view classes list.</p>
                      <a href="class"><button type="submit" class="btn btn-primary">View Classes</button></a>
                    </div>
                  </div>
            </div>      
            <div class="col-sm-6">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/books.jpg') }}">
                    <div class="card-body">
                      <h5 class="card-title">Add New Course</h5>
                      <p class="card-text">Click on the button below to add a course and view all course lists.</p>
                      <a href="subjects"><button type="submit" class="btn btn-primary">View Courses</button></a>
                    </div>
                  </div>
            </div>
          <div class="col-sm-6">
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/exams.jpg') }}">
                <div class="card-body">
                  <h5 class="card-title">Examination Setup</h5>
                  <p class="card-text">Click on the button below to add a course and view all course lists.</p>
                  <a href="grading"><button type="submit" class="btn btn-primary">Add Grade range</button></a>
                </div>
              </div>
        </div>
        <div class="col-sm-6">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/records.jpg') }}">
            <div class="card-body">
              <h5 class="card-title">Examination Records</h5>
              <p class="card-text">Click on the button below to add a course and view all course lists.</p>
              <a href="exams"><button type="submit" class="btn btn-primary">View</button></a>
            </div>
          </div>
    </div>
  </div>
       
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>