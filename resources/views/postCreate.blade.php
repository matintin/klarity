@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Create Post</h2>
                     </div>

                     {!! Form::open(['url'=>'posts','class'=>'pure-form pure-form-stacked', 'files'=>true]) !!}
                         <fieldset>


                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title') !!}
                            {!! $errors->first('title', '<p class="error">:message</p>') !!}

                            {!! Form::label('photo','Photo') !!}
                            {!! Form::file('photo') !!}
                            {!! $errors->first('photo', '<p class="error">:message</p>') !!}

                            {!! Form::label('content','content') !!}
                            {!! Form::textarea('content') !!}
                            {!! $errors->first('content', '<p class="error">:message</p>') !!}
                            
                            @foreach(\App\Models\Label::all() as $label)
                                {!! Form::checkbox('labels[]',$label->id) !!}
                                {!! Form::label('',$label->name) !!}
                            @endforeach                          
                            {!! Form::submit('Post',['class'=>'pure-button pure-button-primary']) !!}

                         </fieldset>
                     {!! Form::close() !!}
                   

                  </div>
@stop
