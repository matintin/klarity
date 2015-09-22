@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Login</h2>
                     </div>

                     {!! Form::open(['url'=>'login','class'=>'pure-form pure-form-stacked']) !!}
                         <fieldset>

                            {!! Form::label('email','Email') !!}
                            {!! Form::email('email',null,['id'=>'email','placeholder'=>'Email']) !!}
                            
                            {!! Form::label('password','Password') !!}
                            {!! Form::password('password',null,['id'=>'password','placehloder'=>'Password']) !!}
                            
                            {!! Form::submit('Sign In',['class'=>'pure-button pure-button-primary']) !!}

                         </fieldset>
                     {!! Form::close() !!}
                   

                  </div>
@stop
