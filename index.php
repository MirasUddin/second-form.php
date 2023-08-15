<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Form</title>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .div {
            margin: auto;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .file {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="div">
        <h3>Please fill the below form </h3>
        <form action="formresult.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Name</label><br>
                <input type="text" name="name"> <br>
            </div>
            <div>
                <label for="">Email</label> <br>
                <input type="email" name="email"> <br>
            </div>
            <div>
                <label for="">Phone</label> <br>
                <input type="number" name="phone"><br>
            </div>
            <div>
                <input type="radio" key="gender" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="others">Others<br>
            </div>
            <div>
                <label for="">Date Of Birth</label> <br>
                <input type="date" name="age" id=""> <br> <br>
            </div>
            <div class="file">
                <label for="">Input Your Image</label> <br>
                <input type="file" name="upload_img" id=""> <br> <br>
            </div>
            <div>
                <input class="btn" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>