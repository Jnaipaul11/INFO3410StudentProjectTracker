


<!--form starts here-->
<form id = "signup"class="form-horizontal" onclick="return pw()" method="POST" action="/posts">
{{ csrf_field() }}
<fieldset>

<!-- Form Name -->
<legend align="center">Add Project</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="projectname">Project name</label>  
  <div class="col-md-4">
  <input id="projectname" name="projectname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ccode">Course Code</label>  
  <div class="col-md-4">
  <input id="ccode" name="ccode" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cname">Course Name</label>  
  <div class="col-md-4">
  <input id="cname" name="cname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Year</label>  
  <div class="col-md-2">
  <input id="year" name="year" type="number" value="2017"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="desc">Project Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="desc" name="desc" required=""></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="github">Github Link</label>  
  <div class="col-md-4">
  <input id="github" name="github" type="text" value="https://" placeholder="eg. github.com/user/projectlink" class="form-control input-md" required="">
    
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="project">Project Image</label>
  <div class="col-md-4">
    <input id="pimage" name="pimage" class="input-file" type="file" required="">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sbutton">Submit Project</label>
  <div class="col-md-4">
    <button id="sbutton" onclick="myfunction()"name="sbutton" class="btn btn-primary"type="submit">Submit</button>
  </div>
</div>

</fieldset>

</form>





