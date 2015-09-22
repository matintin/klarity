@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>My Profile</h2>
                     </div>

                    <h4>Email:</h4>
                    <h3>{{$user->email}}</h3></br>


                    <h4>Firstname:</h4>
                    <h3>{{$user->firstname}}</h3></br>

                    <h4>Lastname:</h4>
                    <h3>{{$user->lastname}}</h3></br>

                    <h4>Avarta:</h4>
                    <h3><img src="{{asset('images/'.$user->avatar)}}"></h3>

                   

                  </div>
@stop
