<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('users.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('users.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('users.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Ip Address</th>
			<td>{{$record->ip_address}}</td>
		</tr>
		<tr>
			<th>Username</th>
			<td>{{$record->username}}</td>
		</tr>
		<tr>
			<th>Salt</th>
			<td>{{$record->salt}}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{$record->email}}</td>
		</tr>
		<tr>
			<th>Activation Code</th>
			<td>{{$record->activation_code}}</td>
		</tr>
		<tr>
			<th>Forgotten Password Code</th>
			<td>{{$record->forgotten_password_code}}</td>
		</tr>
		<tr>
			<th>Forgotten Password Time</th>
			<td>{{$record->forgotten_password_time}}</td>
		</tr>
		<tr>
			<th>Remember Code</th>
			<td>{{$record->remember_code}}</td>
		</tr>
		<tr>
			<th>Created On</th>
			<td>{{$record->created_on}}</td>
		</tr>
		<tr>
			<th>Last Login</th>
			<td>{{$record->last_login}}</td>
		</tr>
		<tr>
			<th>Active</th>
			<td>{{$record->active}}</td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td>{{$record->full_name}}</td>
		</tr>
		<tr>
			<th>Photo</th>
			<td>{{$record->photo}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
