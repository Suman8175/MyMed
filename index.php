<?php
 include 'bootstrap.php';
session_start();
if (isset($_SESSION['status'])){
    echo $_SESSION['status'];
    unset($_SESSION['status']);

   
}

      

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title> Responsive Login and Signup Form </title>-->
    
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">

        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                         
    </head>
    <body>
        
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>MyMed Login</header>
                    <form action="signup.php">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#"  class="link signup-link">Signup</a></span>
                    </div>
                </div>



            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="signupdetails.php" method="POST">
                        <div class="field input-field">
                            <input type="text" name="Username" placeholder="Enter Full Name" class="input" required>
                        </div>

                        <div class="field input-field">
                            <input type="text" name="Email" placeholder="Enter Email" class="email" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" name="Password" placeholder="Enter Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class="field input-field">
                            <input type="password" name="ConfirmPassword" placeholder="Confirm Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="birthday">
                            <p>Birthday</p>
                            <div class="date">
                                <input type="date" name="DOB" class="date"/>
                              
                            </div>
                          </div>
                
                          <div class="gender">
                            <p>Gender</p>
                            <div class="person">
                              <div>
                              <label for="male">Male</label>
                              <input type="radio" id="male" value="Male" name="Gender">
                            </div>
                            <div>
                              <label for="female">Female</label>
                              <input type="radio" id="female"  value="Female" name="Gender">
                            </div>
                            <div>
                              <label for="custom">Custom</label>
                              <input type="radio" id="custom"  value="Custom" name="Gender">
                            </div>
                            </div>
                          </div>
                  
                  
                          <div class="account">
                            <p>Account Holder</p>
                            <div class="choose">
                              <select name="Role" id="role">
                                <option value="Admin">Admin</option>
                                <option value="Client">Client</option>
                                
                             </select>
                            </div>
                          </div>

                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>


            </div>
        </section>
        <script src="scripts.js"></script>
    </body>
</html>
