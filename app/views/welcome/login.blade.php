<html>
 <head>
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
</head>

<body>
    
   
    <div class="Container">
        <br><br><br>
    <div class="row">
         <div class="col-md-12" style="background-color:grey; height:100vh;">
            <br><br><br>
             <div>Login</div>

             <form class="form-horinzontal" enctype="multipart/form-data" method="post" action="{{ url('login') }}" role="form">
             <input type="email" class="form-control" placeholder="Enter your email" name= "email" required="required" /><br/>
            <input type="password" class="form-control" placeholder="Enter your password" name= "password"  required="required" /><br/>
           
              <input type="submit" value="Submit" class="btn btn-warning"/>
             </form>
           </div>
        
    </div>
    </div>
    
</body>
</html>