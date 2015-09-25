@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Update Profile</h2>
                     </div>

                     {!! Form::model($user,['url'=>'users/'.$user->id,'method'=>'put', 'class'=>'pure-form pure-form-stacked', 'files'=>true]) !!}
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
                            
                            {!! Form::label('avatar','Avatar') !!}
                            {!! Form::file('avatar') !!}
                            {!! $errors->first('avatar', '<p class="error">:message</p>') !!}
                            
                            {!! Form::submit('Update',['class'=>'pure-button pure-button-primary']) !!}

                         </fieldset>
                     {!! Form::close() !!}
                   

                  </div>
@stop
