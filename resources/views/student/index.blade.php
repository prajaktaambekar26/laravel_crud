<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css
">
	<title></title>
</head>
<body>
	<div class="card-body">
	           @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                </div>
	<br>

	<a href="{{ route('student.create') }}" class="btn btn-dark float-right">Add Student</a>
	<table id="example" class="table table-striped table-bordered .align-self-*-center	" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th>E-Mail ID</th>
                <th>Gender</th>
                <th>Education</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	  @foreach($studentData as $key => $student_value)
            <tr>
                <td>{{ $student_value->name }}</td>
                <td>{{ $student_value->address }}</td>
                <td>{{ $student_value->mobile_no }}</td>
                <td>{{ $student_value->email }}</td>
                <td>@if($student_value->gender == 0)
                	  male
                	@else
                	  female 
                	@endif    
                	</td>
                <td>{{ $student_value->education }}</td>
                <td>
          			<a class="btn-dark"href="{{ route('student.show',$student_value->id) }}"><i class="fas fa-eye"></i></a>&nbsp;
          			<a class="btn-info" href="{{ route('student.edit',$student_value->id) }}"><i class="fas fa-edit"></i></a>
          			<form method="POST" action="{{ route('student.destroy',[ $student_value->id ]) }}">
                                {{ csrf_field() }}
                     <input type="hidden" name="_method" value="DELETE">
                     <span class="glyphicon glyphicon-trash"></span>

                     <button type="submit" class="btn-danger"><i class="fas fa-trash-alt"></i></button>

                    </form>
                	
                </td>
                
               @endforeach 

            </tr>
        </tbody>
        <tfoot>
        	<tr>
               <th>Name</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th>E-Mail ID</th>
                <th>Gender</th>
                <th>Education</th>
                <th>Action</th>
            </tr>
        </tfoot>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://kit.fontawesome.com/bed09b7a7a.js" crossorigin="anonymous"></script>

<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</html>