<?php
session_start();
define('CON', new mysqli('localhost', 'root', '', 'Register'));
if (CON->connect_error) {
    echo CON->connect_error;
} else {
    // echo 'successfully conneted';
}
$errors = [];

// please add parameter of uploaded file input name, if there is a file
function register($fileName = 'none')
{
    global $errors;
    $fName = testInput($_POST['fName']);
    $lName = testInput($_POST['lName']);
    $email = testInput($_POST['email']);
    $password = testInput($_POST['password']);
    $cPassword = testInput($_POST['cPassword']);

    if (empty($fName)) {
        $errors['fName'] = 'User name must be completed!';
    }
    if (empty($lName)) {
        $errors['lName'] = 'Last name must be completed!';
    }
    if (empty($email)) {
        $errors['email'] = "Email feild can't be empty!";
    } else {

        $q = "SELECT email FROM user WHERE email = '$email'";
        $user = CON->query($q);
        if ($user->num_rows > 0) {
            $errors['email'] = 'Email already exist!';
        }

    }
    if (empty($password)) {
        $errors['password'] = 'Password must be completed!';
    }
    if ($cPassword != $password) {
        $errors['cPassword'] = 'Passwords must be the same!';
    }
    if (count($errors) == 0) {
        $imgName = fileToUpload(["jpg", "png", "webp", "jpeg", "gif"], 1024, 'uploads', 'avatar');
        $q = "INSERT INTO user(fName,lName,email,avatar,password,role)
                        VALUES('$fName','$lName','$email','$imgName','$password',0)";

        if (CON->query($q)) {
            echo "Thank you for sign in dear $fName $lName <br> please approve your request which was be sending to $email";
            header("Location: blog.php");
        } else {
            echo "Error: " . $q . "<br>" . CON->error;
        }

        // fileToUpload(["jpg", "png", "webp", "jpeg", "gif"], 1024, 'uploads');
    }

}
function testInput($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

function fileToUpload($type, $size, $dir, $fileName)
{
    global $errors;
    $dir .= '/';
    $target_file = $dir . basename($_FILES[$fileName]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!isset($_FILES[$fileName])) {
        $check = getimagesize($_FILES[$fileName]["tmp_name"]);
        if ($check != false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES[$fileName]["size"] > ($size * 1024)) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    $result = 0;
    foreach ($type as $val) {
        if ($imageFileType == $val) {
            $result = 1;
            break;
        }
    }
    if ($result == 0) {
        echo "Sorry, only ";
        foreach ($type as $val) {
            echo $val . ' ';
        }
        echo " files are allowed.";
        $uploadOk = 0;
    } else {
        $uploadOk = 1;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return $dir . 'no-img.jpg';
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$fileName]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES[$fileName]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        return $target_file;

    }


}

function showUsers()
{
    
    $q = "SELECT * FROM user";
    $users = CON->query($q);
    if ($users->num_rows > 0) {
        echo ' <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>role</th>
        </tr>';

        while ($row = $users->fetch_assoc()) {
            echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['fName'] . '</td>
                    <td>' . $row['lName'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td><img src="' . $row['avatar'] . '" width=100></td>
                    <td>' . $row['role'] . '</td>
                </tr>
            ';
        }
        echo '</table>';
    }


    // print_r($users);
}

function login()
{
    
    $email = testInput($_POST['email']);
    $password = testInput($_POST['password']);
    $q = "SELECT * FROM user WHERE '$email' = email AND '$password' = password";
    $users = CON->query($q);
    $users = $users->fetch_assoc();
    if (!empty($users)) {
        $_SESSION['userID'] = $users['id'];
        $_SESSION['role'] = $users['role'];
        $_SESSION['avatar'] = $users['avatar'];
        $_SESSION['fName'] = $users['fName'];
        header('Location: dashboard.php');
    } else {
        echo 'the user does not exist';
    }
}

?>