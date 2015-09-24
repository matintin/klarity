@extends('template.template')        
@section('content')         
                  <div class="content section single-post-page" id="content">   
                     <div class="post-outer">
                        <div class="post hentry uncustomized-post-template">
                           <h1 class="the-main-title single-post-title">{{$post->title}}</h1>
                           <div class="post-meta">
                              <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post->user->firstname}} {{$post->user->lastname}}</a>
                                 <span class="post-categories">
                                 @foreach($post->labels as $label)
                                  <a href="" rel="tag">{{$label->name}}</a>,
                                 @endforeach
                                 </span>
                              </div>
                           </div>
                           <div class="post-body">        
                              <a href="" class="main-image"><img src="{{asset('images/'.$post->photo)}}"></a>
                              
                              <p>{{$post->content}}</p>
                                 
                           </div>
                           <div id="related-posts">
                              <h5>Related Posts</h5>
                              <ul>
                                 <li>
                                    <a href="" title="Make your personal website" rel="nofollow"><img alt="Make your personal website" src="{{asset('images/related01.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Make your personal website</a>
                                 </li>
                                 <li>
                                    <a href="" title="Commodo omittam copiosae " rel="nofollow"><img alt="Commodo omittam copiosae " src="{{asset('images/related02.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Commodo omittam copiosae </a>
                                 </li>
                                 <li>
                                    <a href="" title="Mea labores feugait temporibus" rel="nofollow"><img alt="Mea labores feugait temporibus" src="{{asset('images/related03.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Mea labores feugait temporibus</a>
                                 </li>
                              </ul>
                           </div>
                        </div>

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
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                 </li>
                                 @endforeach
                                 
                              </ol>
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                 @include('template.commentsCreate')
                              </div>
                                               
                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     @include('template.pager')
                  </div>
@stop
