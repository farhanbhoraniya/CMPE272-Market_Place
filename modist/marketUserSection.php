<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>

    <body>
        <br>
        <div class = "container">
            <table style = 'text-align:center' class ='table table-condensed'>
                <form action = "/marketUserAdd.php" method = "POST" id="addForm" >   
                    <tr>
                        <td colspan = "2">
                            <strong>Add New User</strong>
                        </td>
                    </tr>        
                    <tr>
                        <td>
                            <label for="name">Name</label>
                        </td>

                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                        </td>
                    </tr>      
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                        </td>
                    </tr>                  
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>

                        <td>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <?php
                                if(isset($_SESSION["userAdded"])){
                                    echo $_SESSION["userAdded"] ;
                                }
                            ?>
                        </td>
                    </tr>                     
                    <tr>
                        <td  colspan = "2">
                            <input type="submit" value = "Create User" class="btn btn-default"/>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <br>
        
        
        <form action = "/marketUserLogin.php" method = "POST" onsubmit="login()" id="loginForm" >
            <div class="form-group">
                <label for="emailLogin">Email</label>
                <input type="email" class="form-control" id="emailLogin" placeholder="Enter Email" name="emailLogin">
            </div>
            <div class="form-group">
                <label for="passwordLogin">Password:</label>
                <input type="password" class="form-control" id="passwordLogin" placeholder="Enter password" name="passwordLogin">
            </div>
            <div class = "form-group">
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
            </div>
                     
            <input type="submit" class="btn btn-default"/>

        </form>

        <script>
            function login(){
                let username = document.getElementById('emailLogin').value;
                let password = document.getElementById('passwordLogin').value;

                if(username.length > 0 && password.length > 0){
                    document.getElementById("loginForm").submit();
                }else{
                    alert("Invalid Credentials");
                }            
            }
        </script>
    </body>


</html>

<?php
    unset($_SESSION["userAdded"]);
    unset($_SESSION["error"]);
?>
