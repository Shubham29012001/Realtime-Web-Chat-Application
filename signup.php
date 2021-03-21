<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>

<body>
    <div class="chat">
        <section class="chatsystem">
            <header class="header">Sign up for Realtime Web Chat</header>
            <div class="form">
                <form action="#">
                    <div class="error">
                        This is a error
                    </div>
                    <div class="firstname">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" placeholder="Enter your First Name" id="firstname">
                    </div>
                    <div class="lastname">
                        <label for="lastname">last Name</label>
                        <input type="text" name="lastname" placeholder="Enter your Last Name" id="lastname">
                    </div>
                    <div class="email">
                        <label for="emailfield">Email Address</label>
                        <input type="email" pattern=".+@vcet.edu.in" name="email" id="emailfield">
                    </div>
                    <div class="password">
                        <label for="password">First Name</label>
                        <input type="password" name="password" placeholder="Enter your Password" id="password">
                    </div>
                    <div class="image">
                        <label for="profileimage">Select Profile Image</label>
                        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" id="profileimage">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Continue to Chat">

                    </div>
                    <div class="loginbox">
                        <p>Already Signup? <a href="login.php">Login Here</a></p>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>