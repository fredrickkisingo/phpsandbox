<?php
//message vars
$msg= '';
$msgClass= '';
//check for submit
if(filter_has_var(INPUT_POST, 'submit')){
    echo 'Submitted';
    //get form data
    $email= htmlspecialchars($_POST['email']);
    $name=  htmlspecialchars($_POST['name']);
    $message=htmlspecialchars($_POST['message']);

    if(!empty($email)&& !empty($name)&& !empty($message)){
        //passed

        //check email
        if(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
                //failed
            $msg= 'Please fill in all fields';
            $msgClass= 'alert-danger';
           }   else{
               //passed
               $toEmail = 'support@fredrickkisingo@gmail.com';
               $subject = 'Contact Request Form' .$name;
               $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';

                        //email headers
                        $headers = "MIME-Version: 1.0" ."\r\n";
                        $headers .= "Content-Type:text/html;charset=UTF-8" . "r/n";

                        //additional headers
                        $headers .= "From: " .$name. "<".$email.">"."\r\n";

                        if(mail($toEmail, $subject, $body, $headers)){

                            //email sent

                            $msg= 'Your Email has been sent';
                            $msgClass= 'alert-success';

                        }else{
                            $msg= 'Your Email was not sent';
                            $msgClass= 'alert-danger';

                        }


           }


    }else{
        //failed
        $msg= 'Please fill in all fields';
        $msgClass= 'alert-danger';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample02">
    
  </div>
</nav> 
<div class="container"> 
<?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name: '';?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: '';?>">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message: '';?></textarea> 
                </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">
            Submit</button>
 </form>

</body>
</div>
</html>