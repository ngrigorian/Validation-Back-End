<?php
require('server.php');
if (isset($_POST['action']) and $_POST['action'] == 'register') {
    register();

}
?>
 <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: gray;
            justify-content: center;
            display: flex;
            margin-top: 90px;
            width: 100%;

        }

        form {
            width: 320px;
            background-color: rgb(0, 0, 50);
            height: 450px;
            border-radius: 25px;
            margin-top: 100px;
        }

        label {
            margin: 15px;
            position: relative;
            display: flex;
            align-items: center;
           color: white;

        }

        label .error {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 0.5em;
            color: #cd0000;
        }

        label span {
            display: block;
            width: 150px;
            background-color: rgba(0, 0, 255, 0.341);
            color: white;
            text-align: center;
            margin: 5px; 
            padding: 1.2em 8px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 0.6em;
            height: 100%;
            border-radius: 10px;
        }

        label input {
            width: 100%;
            padding: 5px;
            border: none;
            background-color: #939393;
            outline: none;
            border-radius: 25px;
        } 

        input[type="file"]::file-selector-button {
  border: 2px solid #6c5ce7;
  padding: 0.2em 0.4em;
  border-radius: 0.2em;
  background-color: #a29bfe;
  transition: 1s;
}

        input:focus {
            border-color: white;
        }

        .btn{
            width: 100px;
            height: 30px;
            border-radius: 25px;
            background-color: rgba(0, 0, 255, 0.341);
            border: none;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 10px;
        }

        .btnn{
            display: flex;
    justify-content: end;
    padding-right: 15px;
        }

        .btn:hover{
    background-color: #939393;
    color: black;
    border: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 10px;
    transition: all 1s;
}
    </style>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <label><span>First Name</span>
            <input type="text" name="fName" value="<?php
            echo (isset($_POST['fName'])) ? $_POST['fName'] : '';
            ?>">
            <div class="error">
                <?php
                if (array_key_exists('fName', $errors)) {
                    echo testInput($errors['fName']);
                }
                ?>
            </div>
        </label>
        <label><span>Last Name</span>

            <input type="text" name="lName" value="<?php echo (isset($_POST['lName'])) ? $_POST['lName'] : ''; ?>">
            <div class="error">
                <?php
                if (array_key_exists('lName', $errors)) {
                    echo testInput($errors['lName']);
                }
                ?>
            </div>
        </label>
        <label><span>Email</span>
            <input type="email" name="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
            <div class="error">
                <?php
                if (array_key_exists('email', $errors)) {
                    echo testInput($errors['email']);
                }
                ?>
            </div>
            </div>
        </label>
        <label><span>Upload your Avatar</span>
            <input type="file" name="avatar">
        </label>
        <label><span>Password</span>
            <input type="password" name="password">
            <div class="error">
                <?php echo (array_key_exists('password', $errors)) ? $errors['password'] : ''; ?>
            </div>
        </label>
        <label><span>Confirm password</span>
            <input type="password" name="cPassword">
            <div class="error">
                <?php echo (array_key_exists('cPassword', $errors)) ? $errors['cPassword'] : ''; ?>

            </div>
        </label>
        <input type="hidden" name="action" value="register">
        <div class="btnn">   
        <input type="submit" name='submit' class="btn">
        </div>
    </form>


  

  
  