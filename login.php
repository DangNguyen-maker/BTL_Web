<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    include 'connect.php';
    if (isset($_POST['sbLogin'])) {
      if (empty($_POST['textName']) || empty($_POST['textPass'])) {
        $message = "Vui Long Nhap Day Du Thong Tin";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else{
        $sql = "SELECT * FROM users WHERE USERNAME = :USERNAME AND PASSWORD = :PASSWORD";
        $statement = $db->prepare($sql);
        $statement -> execute(
            array(
                'USERNAME' => $_POST['textName'],
                'PASSWORD' => $_POST["textPass"]

            )
        );
        $count = $statement -> rowCount();
        if ($count>0 ) {
            $_SESSION["USERNAME"] = $_POST["textName"];
            header("location: admin.php");
        }
        else{
           $message = "Tai Khoan Hoac Mat Khau Khong Chinh Xac";
            echo "<script type='text/javascript'>alert('$message');</script>"; 
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="login">
            <h1><a href="index.php"><img src="images/login.png" alt=""></a></h1>
            <form action="" method="post">
                <ul>
                    <li>
                        <svg width="21px" height="18px" viewBox="0 0 21 18" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-248.000000, -339.000000)" stroke-linecap="round"
                                    stroke="#2B88D9" stroke-linejoin="round">
                                    <g transform="translate(231.000000, 238.000000)">
                                        <g transform="translate(0.000000, 20.000000)">
                                            <g transform="translate(0.000000, 20.000000)">
                                                <g transform="translate(0.000000, 60.000000)">
                                                    <path
                                                        d="M37,4.46153846 C37,3.10153846 35.8663333,2 34.4666667,2 L20.5333333,2 C19.1336667,2 18,3.10153846 18,4.46153846 L18,15.5384615 C18,16.8984615 19.1336667,18 20.5333333,18 L34.4666667,18 C35.8663333,18 37,16.8984615 37,15.5384615 L37,4.46153846 L37,4.46153846 Z M20.5333333,4.46153846 L27.5,11.2307692 L34.4666667,4.46153846">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <input type="text" placeholder="UserName" name="textName">
                    </li>
                    <li>
                        <svg width="21px" height="25px" viewBox="0 0 21 25" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-247.000000, -396.000000)" stroke-linecap="round"
                                    stroke="#2B88D9" stroke-linejoin="round">
                                    <g transform="translate(231.000000, 238.000000)">
                                        <g transform="translate(0.000000, 20.000000)">
                                            <g transform="translate(0.000000, 20.000000)">
                                                <g transform="translate(0.000000, 119.000000)">
                                                    <path
                                                        d="M36,12.9375 C36,12.144 35.3452308,11.5 34.5384615,11.5 L18.4615385,11.5 C17.6547692,11.5 17,12.144 17,12.9375 L17,21.5625 C17,22.356 17.6547692,23 18.4615385,23 L34.5384615,23 C35.3452308,23 36,22.356 36,21.5625 L36,12.9375 L36,12.9375 Z M19.9230769,11.5 L19.9230769,6.46875 C19.9230769,2.8965625 22.8680769,0 26.5,0 C30.1319231,0 33.0769231,2.8965625 33.0769231,6.46875 L33.0769231,11.5 L19.9230769,11.5 Z M22.8461538,8.625 L22.8461538,6.46875 C22.8461538,4.4835625 24.4816154,2.875 26.5,2.875 C28.5183846,2.875 30.1538462,4.4835625 30.1538462,6.46875 L30.1538462,8.625">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <input type="password" placeholder="PassWord" name="textPass">
                    </li>
                    <li>
                        <input type="submit" value="Login" name = "sbLogin">
                     
                    </li>
                   <li>  <a href="#">Forgot your password?</a></li>
                </ul>
            </form>
            <div>
                <p>Don’t have an account?<a href="dangky.php">Create Account</a></p>
            </div>
        </div>
    </div>
</body>

</html>