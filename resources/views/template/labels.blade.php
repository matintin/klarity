                    <div class="widget Label">
                        <h2>Labels</h2>
                      
                       <ul class="widget-content">
                        @foreach(\App\Models\Label::all() as $label)
                          <li>
                             <a dir="ltr" href="">{{$label->name}}</a>
                          </li>
                        @endforeach  
                       </ul>
                    </div>