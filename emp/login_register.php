<?php

require('connection.php');

if(isset($_POST['register']))         
{
   
    $result=mysqli_query($conn, $user_exist_query);

    if($result)
    { $user_exist_query="SELECT * FROM 'registered_users' WHERE 'username'='$_POST[username]' OR 'email'='$_POST[email]'";
        if(mysqli_num_rows($result) > 0) # it will execute if username or email is already taken
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username'] == $_POST['username'])
            {
                # error for username already registered
                echo "
                <script>
                    alert('$result_fetch[username] - Username already taken');
                    window.location.href='index.php';
                </script>
                ";
            }
            else
            {
                # error for email already registered
                echo"
                <script>
                    alert('$result_fetch[email] - E-mail already registered');
                    window.location.href='index.php';
                </script>
                ";
            }
        }
        else # it will excuted if no one has taken username or email before
        {
            $query="INSERT INTO 'registered_users'('full_name', 'username', 'email', 'password') VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$_POST[password]')";
            if(mysqli_query($conn, $query))
            {
                # if data inserted successfully
                echo "
                <script>
                    alert('Registration Successfull');
                    window.location.href='index.php';
                </script>
                ";
            }
            else
            {
                # if data cannot be inserted
                echo"
                <script>
                    alert('Cannot Run Query');
                    window.location.href='index.php';
                </script>
                ";
            }
        }
    }
    else
    {
        echo"
            <script>
                alert('Cannot Run Query');
                window.location.href='index.php';
            </script>
        ";
    }

}

?>