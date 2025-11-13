<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
       
           
            <h4 class="mb-3">Student Detail</h4>
          
          
            <table class="table table-bordered table-striped">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>City</th>
               

                </tr>
              </thead>
              <tbody>
                 
                        <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->city}}</td>
                         
                        </tr>
                 
              </tbody>
            </table>
          
            <a href= {{ route("students.index")}}  class="btn btn-sm btn-primary">Back</a>
         
      </div>
    </div>
  </div>

</body>
</html>
