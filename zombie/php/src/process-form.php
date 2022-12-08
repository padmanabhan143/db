<?php
//These are the defined authentication environment in the db service

    // The MySQL service named in the docker-compose.yml.
    $host = 'db';

    // Database use name
    $user = 'MYSQL_USER';

    //database user password
    $pass = 'MYSQL_PASSWORD';

    //database name
    $mydatabase = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $mydatabase);

    $errors = [];
    
$prn='';
    $name = '';
    $body = '';
    $priority = '';
    $type='';
    
        
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // validate form
    $prn=$_REQUEST['prn'];
    $name= $_REQUEST['name'];
    $body = $_REQUEST['body'];
    $priority = $_REQUEST['priority'];
    $type = $_REQUEST['type'];
     
    if(!$name){
        $errors[] = 'Enter  Name';
    }
    if(!$body){
        $errors[] = 'Enter Message';
    }
    if(!$priority){
        $errors[] = 'Enter priority';
    }
    if(!$type){
        $errors[] = 'Enter type';
    }

     

    if(empty($errors)){


        $sql = "INSERT INTO  shubham VALUES ( '$prn','$name','$body','$priority','$type')";

        if(mysqli_query($conn, $sql)){
            echo "Congratulations!! Record Saved..";
                
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        $prn='';
        $name = '';
        $body = '';
        $priority = '';
        $type = '';
        
    }
}

mysqli_close($conn);
?>