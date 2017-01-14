<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            header{
                width: 100%;
                height: 100%;
            }
            .btnsubmit{
                color: rebeccapurple;
                background: white;
                border-style: solid;
                padding-left: .7em;
                padding-right: .7em;
                border-color: rebeccapurple;
            }
            .btnsubmit:hover{
                color: white;
                background:rebeccapurple;
                border-color: white;
            }
            footer{
                width: 100%;
                position: absolute;
                bottom: 0;
                z-index: 10;
            }
        </style>
    </head>
    <body>
        <header>
            <?php $value = "password"?>
            <h1>Wisdom Travels & Tours</h1>
        <form method="post" name="quotation" action=""  lang="en">
            <h2>Login</h2>
            <input type="text" placeholder="Username"><br><br>
            <input type=<?php echo $value ?> placeholder= password name="pwd"><button name="showpwd">Show Password<?php 
            $password = $_POST['pwd']; 
            if(isset($_POST['showpwd']))
            {
                if($password !=="")
                {
                    $value = "text";
                }
            }
             ?></button> 
            <br><br>
            <input type="submit" value="Login" class="btnsubmit">
           
        </form>
        </header>
        <footer>Copyright &copy; Wisdom Travels 2000-2016.All Rights Reserved.</footer>
    </body>
</html>