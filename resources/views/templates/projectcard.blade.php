

  <h1>Projects</h1>
    <ul class="article-list-basic">

      @foreach ($works as $work)
        <li>
           <a href="#">
                <!--<img src="{{$work->pimage}}" alt="Project image" width= '150px'/>-->
                <!--<img src=" {{$work->pimage}}" alt="Project image"/>  -->
                <img src="data:image/jpeg;base64,{{ base64_encode($work->pimage) }}"/>
                 <!--height="50%" width="50%"/>-->
            
            </a>

            <div>
                <h2>{{$work->projectname}}</h2>
                <h5> {{$work->ccode}}:{{$work->cname}}<h5> 
                <p> {{$work->year}} </p>
                <a href="/">Login or Sign up for more.</a>
                
        
            </div>
        </li>
      @endforeach
    </ul>    