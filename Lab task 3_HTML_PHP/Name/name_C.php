<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>  
    <form method="post" action="">
        <fieldset style="width:200px">
            <legend><b>NAME</b></legend>
            <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']):' ';?>" required />
            <hr style="width:220px" align="left">
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
    
                <?php 
                    $username = $_REQUEST['username'];
                    echo "valid user: ", $username;
                ?>
</body>
</html>
