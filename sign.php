<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>

    <div class="wrapper">

        <div class="form-wrapper sign-up">
        <form action="register.php" method="post" >
                <h2>Sign Up</h2>
                <div class="input-group">
                <input type='text' name="name" class='input-field'placeholder='User Name' required>
                </div>

                <div class="input-group">
                <input type='email'  name="email" class='input-field'placeholder='Email' required>
                </div>

                <div class="input-group">
                <input type='password' name="password" class='input-field'placeholder='Enter Password' required>
                </div>
                <div class="input-group">
                <input type='password' name="cpassword" class='input-field'placeholder='Confirm Password'  required>
                </div>
                

                <button type="submit" class="btn">Sign Up</button>

                <div class="sign-link">
                    <p>Already have an account? 
                    <a href="#" class="signIn-link">Sign In</a></p>
                </div>

            </form>
        </div>
        

        <div class="form-wrapper sign-in">"
        <form action="login.php" method="post" >
                <h2>Login</h2>
                <div class="input-group">
                  <input type='text' name="name" class='input-field'placeholder='User Name' required>
    
                </div>

                <div class="input-group">
                    <input type='password' name="password"  class='input-field'placeholder='Enter Password' required> 
                </div>
                
                <div class="forget-pass">
                    <a href="#">Forget Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="sign-link">
                    <p>Don't have an account? 
                    <a href="#" class="signUp-link">Sign Up</a></p>
                </div>

            </form>
        </div>
    </div>
    

    <script src="sign.js"></script>
    
</body>
</html>
