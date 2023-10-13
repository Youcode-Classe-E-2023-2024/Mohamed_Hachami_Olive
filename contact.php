
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Contact</title>

</head>
<body>
    <div id="navbar"></div>
    <section class="contact">
        <form action="./contactForm.php" method="POST" >
            <div class="form-conatiner">
                <h4>Welcome to <span class="form-title">Olivier de Prevence </span> </h4>
                <h2 style="color: #008000;">Contact</h2>
                <div class="inputs-container">
                    <div class="row1">
                        <div class="left">
                        <span class="invalid-feedback"><?php echo $_GET['firstname_err'];?></span>
                            <span>First Name</span>
                            <input type="text" name="firstname" placeholder="Client name" >
                            
                        </div>
                        <div class="right">
                            <span>Last Name</span>
                            <input type="text" name="secondname" placeholder="Last name">
                            <span class="invalid-feedback"><?php echo $secondname_err;?></span>
                        </div>
                    </div>
                    <div class="row2">
                        <span>Enter your email</span>
                        <input type="text" name="email" placeholder="example@gmail.com" >
                    </div>
                    <div class="row3">
                        <span>Enter a message</span>
                        <textarea name="message"  placeholder="Enter a message" ></textarea>
                    </div>
                    <button class="btn-send" type="submit" id="submitBtn">
                        Send
                    </button>
                    <?php
                        
                        if (!empty($_GET['err'])) {
                            echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_GET['err']) . '</div>';
                        }
                    ?>
                    
                </div>
            </div>
        </form>
    </section>
    <div id="footer"></div>
    <script src="./Components/navBar.js"></script>
    <script src="./Components/Footer.js"></script>
   
</body>
</html>