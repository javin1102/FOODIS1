<?php 
    $conn = mysqli_connect('localhost','root','','foodis1');

    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function create($data){
        global $conn;
        $email = htmlspecialchars($data['email']);
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);
        $password = password_hash($password,PASSWORD_DEFAULT);
        date_default_timezone_set("Asia/Jakarta");
        $date = date("m/d/Y h:i A");
        $final = strtotime($date);
        $time_posted = date("Y-m-d H:i:s", $final);
        
        $query = "INSERT INTO user VALUES ('',
                                           '$email',
                                           '$username',
                                           '$password',
                                           '$time_posted')";

        
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    
    function confirmPassword($data){
        if($data["password"] != $data["confirm-password"]){
            echo "<p style='color:white;'>Password not match </p>";
            return false;
        }
        return true;

    }
?>