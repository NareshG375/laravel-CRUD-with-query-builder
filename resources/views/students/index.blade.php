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
       
           
            <h4 class="mb-3">Students List</h4>

            <div class="mb-3">
                <a href="{{route('students.create')}}" class="btn btn-sm btn-success">Add Student</a>

            </div>
            @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
          
          
            <table class="table table-bordered table-striped">
              <thead class="table-dark">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>City</th>
                  <th>Actions</th>


                </tr>
              </thead>
              <tbody>
                  @forelse ($students as  $student)
                        <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->city}}</td>
                        <td>
                            <a href="{{route('students.show',$student->id)}}"class="btn btn-sm btn-info">View</a>
                            <a href="{{route('students.edit',$student->id)}}"class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{route('students.destroy',$student->id)}}" method="POST"  class="d-inline">
                                 @csrf
                                 @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick=" return confirm('Are you want to delete the Student?')">Delete</a>
                            </form>
                        </td>
                        </tr>
                  @empty
                      <td colspan="6" class="text-center text-muted">No students found</td>
                  @endforelse  
              </tbody>
            </table>

           {{ $students->links('pagination::bootstrap-5') }}
        
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
