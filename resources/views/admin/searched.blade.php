@extends('admin/index')
@section('content')
<style>
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
</style>
<br>
<br>
<br>
<br>
<br>

<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
@include('admin.notices')
<div class="row">
<a class="btn btn-primary" href="{{route('bannedUser')}}">View Banned user</a>
<a class="btn btn-primary" href="{{route('unconfirmedUser')}}">View Unconfirmed user</a>
<div class="col-md-8">
<div class="col-md-6">
<form action="{{route('searchUser')}}" method="GET">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" name="search"/>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
</form>
</div>

</div>
</div>
<br>
<br>
			<table class='table table-condensed table-bordered'>
				<thead>
					<tr>
						<td><b><center>ID</b></td>
						<td><b><center>EMAIL</b></td>
                        <td><b><center>FIRSTNAME</b></td>
                        <td><b><center>LASTNAME</b></td>
						<td><b><center>MOBILE NUMBER</b></td>
						<td><b><center>SEX</b></td>
						<td><b><center>ACTIONS</b></td>
					</tr>
				</thead>
	
		
<tbody>
@foreach ($searcheduser as $searchedusers)
<tr>
<td><center>{{$searchedusers->id}}</td>
<td><center>{{$searchedusers->email}}</td>
<td><center>{{$searchedusers->firstname}}</td>
<td><center>{{$searchedusers->lastname}}</td>
<td><center>{{$searchedusers->mobile_number}}</td>
<td><center>{{$searchedusers->sex}}</td>
<td>
<button data-toggle="modal" data-target="#update-item-{{$searchedusers->id}}" class='edit-modal btn btn-warning'>
Edit
</button>

<button data-toggle="modal" data-target="#delete-item-{{$searchedusers->id}}" class='edit-modal btn btn-danger'>
Ban
</button>
</td>
</tr>

  <div>
		<div class="modal fade" id="update-item-{{$searchedusers->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
      <center>
      <h4 class="modal-title"id="myModalLabel">UPDATE ITEM</h4>
       </center>
       </div>
       <form action="{{route('updateAdmin')}}" method="POST">
       {{ csrf_field() }}
    <div class="modal-body">
    <div class="form-group">
    <label for="description">FIRSTNAME:</label>
    <input name="firstname" class="form-control" value="{{$searchedusers->firstname}}"/>
    </div>
     <div class="form-group">
    <label for="price">LASTNAME:</label>
    <input type="text" name="lastname" class="form-control" value="{{$searchedusers->lastname}}"/>
    </div>
    <div class="form-group">
        <label for="price">MOBILE NUMBER:</label>
        <input type="text" name="mobile_number" class="form-control" value="{{$searchedusers->mobile_number}}"/>
    </div>
    <input type="text" name="id" class="form-control hidden" value="{{$searchedusers->id}}"/>
    <div class="form-group">
   <center> <button type="submit" class="btn btn-success">Update searcheduser info</button>
    </div>
    </div>
    </form>
    </div>
      </div>
      </div>




<div>
		<div class="modal fade" id="delete-item-{{$searchedusers->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">x</span>
      </button>
     <center>
      <h4 class="modal-title"id="myModalLabel">Are you sure you want to delete this item?</h4>
       </div>
    <div class="modal-body">
    <div class="form-group">
    <center>
    <a class="btn btn-danger" href="{{route('ban',['id'=>$searchedusers->id])}}">Yes</a>
    <button class="btn btn-success" data-dismiss="modal" aria-label="Close">No</button>
    </div>
    </div>
    </div>
      </div>
      </div>
      </div>
@endforeach
</tbody>	
		</table>
    {{$searcheduser->links()}}
</div>
</div>		
</div>
</div>



    



@endsection