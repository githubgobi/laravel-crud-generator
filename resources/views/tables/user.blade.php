<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Ip Address </th>
		<th>Username </th>
		<th>Salt </th>
		<th>Email </th>
		<th>Activation Code </th>
		<th>Forgotten Password Code </th>
		<th>Forgotten Password Time </th>
		<th>Remember Code </th>
		<th>Created On </th>
		<th>Last Login </th>
		<th>Active </th>
		<th>Full Name </th>
		<th>Photo </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->ip_address }} </td>
	 	<td> {{$record->username }} </td>
	 	<td> {{$record->salt }} </td>
	 	<td> {{$record->email }} </td>
	 	<td> {{$record->activation_code }} </td>
	 	<td> {{$record->forgotten_password_code }} </td>
	 	<td> {{$record->forgotten_password_time }} </td>
	 	<td> {{$record->remember_code }} </td>
	 	<td> {{$record->created_on }} </td>
	 	<td> {{$record->last_login }} </td>
	 	<td> {{$record->active }} </td>
	 	<td> {{$record->full_name }} </td>
	 	<td> {{$record->photo }} </td>
	<td><a class="btn btn-secondary" href="{{route('users.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('users.edit',$record->id)}}">
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
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>