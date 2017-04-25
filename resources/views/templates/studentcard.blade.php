

  <h1>Approved Projects</h1>
    <ul class="article-list-basic">

      @foreach ($works as $work)
        <li>
                 <a href="#">
                <!--<img src="{{$work->pimage}}" alt="Project image" width= '150px'/>-->
                <img src=" {{$work->pimage}}" alt="Project image"/>  
                 <!--height="50%" width="50%"/>-->
            
            </a>
            <div>
                <h2>{{$work->projectname}}</h2>
                <h5> {{$work->ccode}}:{{$work->cname}}<h5> 
                <p> {{$work->year}} </p>
                <p><a href="https://{{$work->github}}">View Github Resources</a></p>    
                <br>                        
                <!--<p><button class="read-more"><a href='/readmore/{{$work->id}}'>Read more </a></button><p>-->
                  <form method="get"class='btn-block' action="/readmore/{{$work->id}}">
                      <button type="submit">Read More</button>
                  </form>
            </div>
        </li>
      @endforeach
    </ul>
    
