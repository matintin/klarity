@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Login</h2>
                     </div>

                     {!! Form::open(['url'=>'login','class'=>'pure-form pure-form-stacked']) !!}
                         <fieldset>

                            {!! Form::label('email','Email') !!}
                            {!! Form::email('email',null,['id'=>'email']) !!}
                            {!! $errors->first('email', '<p class="error">:message</p>') !!}
                            
                            {!! Form::label('password','Password') !!}
                            {!! Form::password('password',null,['id'=>'password']) !!}
                            {!! $errors->first('password', '<p class="error">:message</p>') !!}
                            
                            {!! Form::submit('Sign In',['class'=>'pure-button pure-button-primary']) !!}

                         </fieldset>
                     {!! Form::close() !!}
                     {!! Session::get("message") !!}
                   

                  </div>
@stop
