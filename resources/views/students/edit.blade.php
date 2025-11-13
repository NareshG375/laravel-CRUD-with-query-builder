<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Update Student</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <div class="container mt-5">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <form action="{{route('students.update',$student->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                     <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                     <input type="text" class="form-control  @error('name')  is-invalid @enderror" maxlength="25"  minlength="3"  value="{{$student->name}}"   name="name" id="name" placeholder="Enter the name">
                     <span class="text-danger">
                     @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                     @enderror
                     </span>
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                     <input type="email" class="form-control   @error('email')  is-invalid @enderror" name="email" value="{{$student->email}}"   id="email"  placeholder="name@example.com">
                     <span class="text-danger">
                     @error('email')
                         <div class="text-danger small">{{ $message }}</div>
                     @enderror
                     </span>
                  </div>
                  <div class="mb-3">
                     <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                     <input type="number" class="form-control   @error('age')  is-invalid @enderror" name="age" value="{{$student->age}}" id="age" placeholder="Enter the age">
                     <span class="text-danger">
                     @error('age')
                       <div class="text-danger small">{{ $message }}</div>
                     @enderror
                     </span>
                  </div>
                  <div class="mb-3">
                     <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                     <select name="city" id="city" class="form-control   @error('city')  is-invalid @enderror">
                        <option value="Lebsackstad"  {{$student->city=='Lebsackstad'? 'selected':""}}>Lebsackstad </option>
                        <option value="Wuckertberg" {{$student->city=='Wuckertberg'? 'selected':""}}>Wuckertberg</option>
                        <option value="Lake Gennaroside" {{$student->city=='Lake Gennaroside'? 'selected':""}}>Lake Gennaroside</option>
                        <option value="Howellborough" {{$student->city=='Howellborough'? 'selected':""}}>Howellborough</option>
                     </select>
                     <span class="text-danger">
                     @error('city')
                          <div class="text-danger small">{{ $message }}</div>

                     @enderror
                     </span>
                  </div>
                  <div class="mb-3">
                     <button class="btn btn-sm btn-info" type="submit">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>