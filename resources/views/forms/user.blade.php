<form action="{{isset($route)?$route:route('users.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="ip_address">Ip Address</label>
        <input type="text" class="form-control {{ $errors->has('ip_address') ? ' is-invalid' : '' }}" name="ip_address" id="ip_address" value="{{old('ip_address',$model->ip_address)}}" placeholder="" maxlength="15" required="required" >
          @if($errors->has('ip_address'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ip_address') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="username" value="{{old('username',$model->username)}}" placeholder="" maxlength="100" required="required" >
          @if($errors->has('username'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('username') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="salt">Salt</label>
        <input type="text" class="form-control {{ $errors->has('salt') ? ' is-invalid' : '' }}" name="salt" id="salt" value="{{old('salt',$model->salt)}}" placeholder="" maxlength="225" required="required" >
          @if($errors->has('salt'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('salt') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{old('email',$model->email)}}" placeholder="" maxlength="100" required="required" >
          @if($errors->has('email'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="activation_code">Activation Code</label>
        <input type="text" class="form-control {{ $errors->has('activation_code') ? ' is-invalid' : '' }}" name="activation_code" id="activation_code" value="{{old('activation_code',$model->activation_code)}}" placeholder="" maxlength="40" required="required" >
          @if($errors->has('activation_code'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('activation_code') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="forgotten_password_code">Forgotten Password Code</label>
        <input type="text" class="form-control {{ $errors->has('forgotten_password_code') ? ' is-invalid' : '' }}" name="forgotten_password_code" id="forgotten_password_code" value="{{old('forgotten_password_code',$model->forgotten_password_code)}}" placeholder="" maxlength="40" required="required" >
          @if($errors->has('forgotten_password_code'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('forgotten_password_code') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="forgotten_password_time">Forgotten Password Time</label>
        <input type="number" class="form-control {{ $errors->has('forgotten_password_time') ? ' is-invalid' : '' }}" name="forgotten_password_time" id="forgotten_password_time" value="{{old('forgotten_password_time',$model->forgotten_password_time)}}" placeholder="" required="required" >
          @if($errors->has('forgotten_password_time'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('forgotten_password_time') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="remember_code">Remember Code</label>
        <input type="text" class="form-control {{ $errors->has('remember_code') ? ' is-invalid' : '' }}" name="remember_code" id="remember_code" value="{{old('remember_code',$model->remember_code)}}" placeholder="" maxlength="40" required="required" >
          @if($errors->has('remember_code'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('remember_code') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="created_on">Created On</label>
        <input type="number" class="form-control {{ $errors->has('created_on') ? ' is-invalid' : '' }}" name="created_on" id="created_on" value="{{old('created_on',$model->created_on)}}" placeholder="" required="required" >
          @if($errors->has('created_on'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('created_on') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="last_login">Last Login</label>
        <input type="number" class="form-control {{ $errors->has('last_login') ? ' is-invalid' : '' }}" name="last_login" id="last_login" value="{{old('last_login',$model->last_login)}}" placeholder="" required="required" >
          @if($errors->has('last_login'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('last_login') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="active">Active</label>
        <input type="number" class="form-control {{ $errors->has('active') ? ' is-invalid' : '' }}" name="active" id="active" value="{{old('active',$model->active)}}" placeholder="" required="required" >
          @if($errors->has('active'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('active') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="full_name">Full Name</label>
        <input type="text" class="form-control {{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" id="full_name" value="{{old('full_name',$model->full_name)}}" placeholder="" maxlength="225" required="required" >
          @if($errors->has('full_name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('full_name') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="text" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" id="photo" value="{{old('photo',$model->photo)}}" placeholder="" maxlength="225" required="required" >
          @if($errors->has('photo'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('photo') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="additional">Additional</label>
    <textarea id="additional" name="additional" class="form-control {{ $errors->has('additional') ? ' is-invalid' : '' }}" rows="3">{{old('additional',$model->additional)}}</textarea>
      @if($errors->has('additional'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('additional') }}</strong>
    </div>
  @endif
</div> 


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>