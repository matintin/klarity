@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                     
                     <div class="blog-posts hfeed">
  
                        <!-- Individual post -->
                        @foreach($posts as $post)
                           
                           @include('template.singlepost',compact('posts'))

                        @endforeach
                        
               
                     </div><!-- end blog-posts -->
                     @include('template.pager')  
                  </div>
@stop
