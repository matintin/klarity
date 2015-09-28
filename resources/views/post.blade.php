@extends('template.template')        
@section('content')         
                  <div class="content section single-post-page" id="content">   
                     <div class="post-outer">
                       
                        @include('template.singlepost',compact('post'))
                        <div class="comments" id="comments">
                           <h4>{{count($post->comments)}} comments:</h4>
                           <div class="comments-content">
                              <ol>
                                 @foreach($post->comments as $comment)
                                 <li class="comment">
                                    <div class="avatar-image-container"><img src="{{asset('images/avatar01.png')}}"></div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href=""></a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">{{$comment->created_at}}</a></span>
                                       </div>
                                       <p class="comment-content">{{$comment->content}}</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>

                                          {!! Form::open(['url'=>'comments/'.$comment->id,'method'=>'delete'])!!}
                                          {!! Form::submit("Delete",['class'=>'pure-button pure-button-primary'])!!}
                                          {!! Form::close() !!}
                                          <!-- <a class="pure-button pure-button-primary" href="">Delete</a> -->
                                       </div>
                                    </div>
                                 </li>
                                 @endforeach
                                 
                              </ol>
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                 @include('template.commentsCreate',['post'=>$post])
                              </div>
                                               
                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     @include('template.pager')
                  </div>
@stop
