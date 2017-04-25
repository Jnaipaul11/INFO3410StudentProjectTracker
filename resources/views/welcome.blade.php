
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Home</title>
  <!--couldnt use bower-->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- JS CODE Reference -->
    <script src="{{ URL::asset('js/myscript.js') }}" type="text/javascript"> </script>
<!-- CSS CODE Reference for HOMEPAGE ONLY -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
   
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">        
</head>
<body>

<body>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Project Tracker</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/"> Home</a></li>      
        <li class=""><a href="/viewprojects"> View Projects</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login

								 <form class="form" role="form" method="post" action="/login" accept-charset="UTF-8" id="login-nav">
										{{csrf_field()}}
                                        <div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											  <input id="email" name="email" type="text" placeholder="Email" class="form-control" required>
                                             <!--<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>-->
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input id="password" name="password" type="password" placeholder="Password" class="form-control" required>
                                             <!--<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>-->
										</div>
										<div class="form-group">
                                             <input name="submit" type="submit" value=" Login ">
											 <!--<button type="submit" class="btn btn-primary btn-block">Sign in</button>-->
										</div>
								 </form>
							</div>
							
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Sign Up-->
<!--<div style="width: 550px; height: 350px; margin:0 auto;" id="signup">-->
<div style="width: 550px; height: 420px; margin:0 auto;" id="signup">

<form class="form-horizontal" method="POST" onclick="return pw()" action="/register">
{{ csrf_field() }}
        <fieldset>
        <!-- Form Name -->
        <legend align="center"> Sign Up </legend>

        <!-- First Name -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fname">First Name</label>  
            <div class="col-md-4">
                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">      
            </div>
        </div>

        <!-- Last Name -->      
        <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Last Name</label>  
            <div class="col-md-4">
                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">      
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">      
            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>  
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="" onkeyup='check();'>      
                <span id='message'></span>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_confirmation">Confirm Password</label>  
            <div class="col-md-4">
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control input-md" required="" onkeyup='check();'>      
                <span id='message'></span>
            </div>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn"></label>
            <div class="col-md-4">
                 <button id="sbutton"name="sbutton" class="btn btn-primary"type="submit">Submit</button>
            </div>
        </div>


        </fieldset>
        <div>
               @include('templates.errors') 
        </div>

    </form>
</div><!-- end div signup-->
</body>
</body>
</html>
