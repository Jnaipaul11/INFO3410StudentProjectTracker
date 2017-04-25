<div class ="pdiv"style="background-color:rgba(255,255,255,.4)" align="center" >
      <li>
                 <a href="#">
      
                <img src=" {{$pro->pimage}}" alt="Project image"/>  
            
            </a>
            <div class="innerdiv" align="center" style="width:600px">
                <h1>{{$pro->projectname}}</h2>
                <h4> {{$pro->ccode}}:{{$pro->cname}}<h4> 
                <p> {{$pro->year}} </p>
                <p><a href="https://{{$pro->github}}">View Github Resources</a></p>    
                <br>                        
                <p>{{$pro->desc}}<p>
            </div>
        </li>      

     <p><a href="/studentprojects">Back to projects</a></p>    
</div>