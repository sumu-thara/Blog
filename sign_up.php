<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <script src="plugin/jquery.min.js"></script>
    <script src="plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once('ioc/navbar.php');
          
  ?> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <form action="index.php">
                    <div class="card_header" id="card_Header">
                        <h4>Sign up Form</h4>
                    </div>
                    <div class="card_body" id="card_body">
                        <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Enter your First Name</small>
                        </div>
                        <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Enter your Last Name</small>
                        </div>
                        <div class="form-group">
                        <label for="">E-Mail</E-Mail></label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Enter your E-mail</small>
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Enter your Password</small>
                        </div>
                    </div>
                
                    <div class="card_footer" id="card_footer">
                        <button type="submit " class="btn btn-success">Sign up</button>
                    </div>
                </form>    
              
            </div>

            
        </div>
    </div>

</div> 

</body>
</html>