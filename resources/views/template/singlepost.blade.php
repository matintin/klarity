                        <div class="post hentry">
                           <div class="post-wrapper left col1">
                              <div class="post-info">
                                 <div class="date">
                                    <span class="month">{{$post->created_at->month}}</span>
                                    <span class="day">{{$post->created_at->day}}</span>
                                    <span class="year"> {{$post->created_at->year}}</span>
                                 </div>
                                 <a class="comment-number" href="">
                                 <span class="comment-num">{{count($post->comments)}}</span>
                                 <span>Comments</span>
                                 </a>
                              </div>
                           </div><!-- end post-wrapper -->
                           <div class="post-wrapper right col2">
                              <div class="post-body">
                                 <div class="featimg left" style="position:relative;">
                                    <div class="item-label">
                                       <span><a href="label/Minimal" rel="tag">
                                          @foreach($post->labels as $label)
                                             {{$label->name}}
                                          @endforeach
                                       </a></span>
                                    </div>
                                    <div class="item-thumb entry-image" style="position:relative;">
                                       <a href="">
                                          <img src="{{asset('images/'.$post->photo)}}" style="max-width:100%;">
                                       </a>
                                    </div>
                                    <div class="entry-feat-overlay">
                                    </div>
                                 </div>
                                 <div class="clr"></div>
                                 <div class="post-meta">
                                    <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post->user->firstname}} {{$post->user->lastname}}</a> in 
                                       <span class="post-categories">
                                       <?php $separate = "" ?>
                                       @foreach($post->labels as $label)
                                       <a href="" rel="tag">{{$separate}}{{$label->name}}</a>
                                       <?php $separate = "," ?>
                                       @endforeach
                                       </span>
                                    </div>
                                 </div>
                                 <div class="post-title">
                                    <h2><a href="" >{{$post->title}} </a></h2>
                                 </div>
                                 <div class="item-content">
                                    <p style="margin:0;">{{$post->content}}</p>
                                 </div>
                              </div><!-- end post-body -->
                           </div><!-- end post-wrapper -->
                        </div><!-- end post -->