
{!! Form::open(['url'=>'comments','class'=>'pure-form pure-form-stacked'])  !!}
  <fieldset>
    {!! Form::label('comment','Comment') !!}
    {!! Form::textarea('comment',null,['id'=>'comment','class'=>'pure-input-1','placeholder'=>'Comment'])  !!}
    {!! $errors->first('comment', '<p class="error">:message</p>') !!}

    {!! Form::submit('Publish',['class'=>'pure-button pure-button-primary']) !!}
  </fieldset>
{!! Form::close() !!}
