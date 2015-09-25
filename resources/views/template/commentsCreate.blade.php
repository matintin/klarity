
{!! Form::open(['url'=>'comments','class'=>'pure-form pure-form-stacked'])  !!}
  <fieldset>
    {!! Form::label('content','Comment') !!}
    {!! Form::textarea('content',null,['class'=>'pure-input-1','placeholder'=>'Comment'])  !!}
    {!! $errors->first('content', '<p class="error">:message</p>') !!}

    {!! Form::hidden('post_id', $post->id) !!}

    {!! Form::submit('Publish',['class'=>'pure-button pure-button-primary']) !!}
  </fieldset>
{!! Form::close() !!}
