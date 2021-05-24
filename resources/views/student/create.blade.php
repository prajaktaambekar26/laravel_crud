<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<main>
  <div class="container-fluid">
    <ol class="breadcrumb mb-4 mt-4">
      <li class="breadcrumb-item active">Create Student</li>
    </ol>
    <div class="row mt-4">
      <div class="col-xl-12">
        <div class="card mb-4">
          <div class="card-body">
              @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif

             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <!-- If want show all error in one place  -->

            <form method="POST" action="{{ route('student.store') }}">
            @csrf
            <div class="form-row">
              

              <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                <!-- if want show error in single  -->
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{ old('name') }}">

                 @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
               <div class="form-group col-md-6">
                <label>Mobile No</label>
                <input type="text" class="form-control" name="mobile_no" placeholder="Enter mobile no" value="{{ old('name') }}">

                @error('mobile_no')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
               <div class="form-group col-md-6">
                    <label for="email">E-Mail ID</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>


              <div class="form-group col-md-6">
                  <label for="gender">Gender :</label>
                    <select id="gender" class="form-control" name="gender">
                      <option value="" name="gender" >Choose Gender...</option>
                      <option value="0">Male</option>
                      <option value="1">Female</option>
                    </select>

                 @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                 <div class="form-group col-md-6">
                <label for="student">Educational Qualification :</label>
                <input type="text" name="education" class="form-control" placeholder="Education" value="{{ old('education') }}">

                 @error('education')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>