<?php
if (isset($_POST['submit'])) {
    // print_r($_FILES['upload_img']);
    $img_name = $_FILES['upload_img']['name'];
    $tmp_name = $_FILES['upload_img']['tmp_name'];
    move_uploaded_file($tmp_name, "formImages/" . $img_name);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>

<style>
    .main_div {
        background-color: orange;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        padding: 10px 20px 10px 20px;
    }

    .main_div .img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .img_img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }



    /* chatGPT */


    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
    }

    .box {
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background-color: #3498db;
        animation: spin 4s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(380deg);
        }
    }
</style>

<body>
    <div class="main_div">
        <div>

        </div>
        <div>
            <h3>Name: <?php if (isset($name)) {
                            echo $name;
                        } ?> </h3>

            <h3>Email: <?php if (isset($email)) {
                            echo $email;
                        } ?> </h3>
            <h3>Phone: <?php if (isset($phone)) {
                            echo $phone;
                        } ?> </h3>
            <h3>Gender: <?php if (isset($gender)) {
                            echo $gender;
                        } ?> </h3>
            <h3>Date of Birth: <?php if (isset($age)) {
                                    echo $age;
                                } ?> </h3>
        </div>
        <div class="box">
            
            <div class="img">
                <img class="img_img" src="formImages/<?php if (isset($img_name)) {
                                                            echo $img_name;
                                                        } ?>" alt="images">
            </div>
        </div>
    </div>
</body>

</html>