<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcome.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
body {
        font-family: Arial, sans-serif;
        margin-top: 0;
        padding: 0;
        height: 100vh;
        background-image: url("banner.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
}   
.banner{
    padding: 0;
    margin-top: 0;
}
center {
    margin-top: 150px;
    }
h1{
    margin-top: 25px;
}
h2{
    margin-top: 25px;
    margin-bottom: 10px;
}
pre{
    margin-top: 30px;
}
button {
    padding: 10px 20px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="banner">
    <center>
        <i><h1>Hello user</h1></i>
        <i><h2>New here, let's get started then</h2></i>
        <button><a href="registration.php">Register here</a></button>
        <i><h2>Already registered yourself? then</h2></i>
        <button><a href="login.php">Login here</a></button>
        <pre><i>Let's dive into the world of websites.</i></pre>
    </center>
    </div>
</body>
</html>