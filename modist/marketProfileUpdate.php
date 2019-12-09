<?php
    session_start();
    if($_SESSION['auth'] == true){
       
    }else{
        header("location: marketUserSection.php");
        echo "Not Logged In";
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>

    <body>
        <br>
        <div class = "container">
            <table style = 'text-align:center' class ='table table-condensed'>
                <form action = "/marketProfileUpdater.php" method = "POST" id="updateForm" >   
                    <tr>
                        <td colspan = "2">
                            <strong>Update Your Profile</strong>
                        </td>
                    </tr>        
                    <tr>
                        <td>
                            <label for="name">Name</label>
                        </td>

                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value = "<?php echo $_SESSION['name']; ?>" required>
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
                        <td  colspan = "2">
                            <input type="submit" value = "Update Profile" class="btn btn-default"/>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <br>
    </body>


</html>

<?php
    unset($_SESSION["userAdded"]);
    unset($_SESSION["error"]);
?>
