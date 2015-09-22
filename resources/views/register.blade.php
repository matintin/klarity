@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Register</h2>
                     </div>

                     {!! Form::open(['url'=>'users','class'=>'pure-form pure-form-stacked']) !!}
                         <fieldset>


                            {!! Form::label('firstname','Firstname') !!}
                            {!! Form::text('firstname') !!}
                            {!! $errors->first('firstname', '<p class="error">:message</p>') !!}

                            {!! Form::label('lastname','Lastname') !!}
                            {!! Form::text('lastname') !!}
                            {!! $errors->first('lastname', '<p class="error">:message</p>') !!}

                            {!! Form::label('email','Email') !!}
                            {!! Form::email('email',null,['id'=>'email']) !!}
                            {!! $errors->first('email', '<p class="error">:message</p>') !!}
                            
                            {!! Form::label('password','Password') !!}
                            {!! Form::password('password',null,['id'=>'password']) !!}
                            {!! $errors->first('password', '<p class="error">:message</p>') !!}

                            {!! Form::hidden('avatar','avatar.png') !!}

                            {!! Form::label('password_comfirmation','Confirm Password') !!}
                            {!! Form::password('password_comfirmation') !!}

                            
                            {!! Form::submit('Sign Up',['class'=>'pure-button pure-button-primary']) !!}

                         </fieldset>
                     {!! Form::close() !!}
                   

                  </div>
@stop
