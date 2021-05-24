<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 mt-4">
            <!-- If want show all error in one place  -->
            <li class="breadcrumb-item active">View Student <a class="btn btn-dark" style="margin-left: 52em;" href="{{ route('student.index') }}">Back</a> </li>
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
                    <div class="form-row">
                        <input type="hidden" name="userType" value="2">
                    <div class="form-group col-6">
                        <label for="instituteName">Student Name</label>
                        <p class="alert alert-success">{{ $student->name }}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="instituteEmail">Student Email</label>
                        <p class="alert alert-success">{{ $student->email }}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="PrincipleName">Student Address</label>
                        <p class="alert alert-success">{{ $student->address }}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="PrincipleMob">Student Mobile</label>
                        <p class="alert alert-success">{{ $student->mobile_no }}</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="PrincipleEmail">Student Education</label>
                        <p class="alert alert-success">{{ $student->education }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>

