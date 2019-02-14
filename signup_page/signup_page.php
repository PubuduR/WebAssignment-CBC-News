<!DOCTYPE html>
<html>

<head>

        <script>
                function validateForm() {
                    
                    var x = document.forms["signup"]["password"].value;
                    var y = document.forms["signup"]["password_repeat"].value;
                   

                    if(x!=y)
                    {
                        alert("Passwords doesn't match !");
                        return false;
                        
                    }
        
                }
        </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" name="signup" action="assets/php/usr_insert.php" onsubmit="return validateForm()">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="fname" placeholder="Name" required ></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required ></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ></div>
                <div class="form-group"><input class="form-control" type="password" name="password_repeat" placeholder="Password (repeat)" required ></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the Terms & Conditions.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-success btn-block" type="submit">Sign Up</button></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="reset">Reset</button></div>
                <a href="../index.php" class="already">Back to Home... Click Here</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>