

  <h1>Projects to be Approved</h1>
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
                <p><a href="{{$work->github}}">View Github Resources</a></p>     
                <br>                       
                <!--<p><button class="btn-block"><a href='/approve/{{$work->id}}'>Approve </a></button><p>-->
                  <form method="get"class='btn-block' action="/approve/{{$work->id}}">
                      <button onclick="approvefunc()"type="submit">Approve</button>
                  </form>
            </div>
        </li>
      @endforeach
    </ul>    