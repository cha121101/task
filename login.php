<?php
 

    $employees = array(
            array(
                "position" => "contentManager",
                "employeeName" => "christian",
                "employeePassword"=> "admin"),
            
            array(                       
                "position" => "admin",
                "employeeName" => "charles",
                "employeePassword"=> "admins"
     ) );
     
     function getdata( $values, $employee){
        if($values != $employee){
            return  "";
        }
        else{
            return $values;
        }
    }
    
    $isSuccess = false;
    if(isset($_POST['loginhandle'])){
        $employeeposition = $_POST['employeeposition'];
        $employeename = $_POST['employeename'];
        $employeepassword = $_POST['employeepassword'];
       

        $getposition=""; $getname= ""; $getpassword=""; $loginname = "";
        foreach($employees as $arrays){
            
            foreach ($arrays as $keys => $values){
                if($keys == "position"){
                    $getposition = getdata($values , $employeeposition);
                }
                if($keys == "employeeName"){
                    $getname = getdata($values , $employeename);
                }
                if($keys == "employeePassword"){
                    $getpassword = getdata($values , $employeepassword);
                }
            }
            if($getposition != $employeeposition  ||  $getname != $employeename  ||  $getpassword != $employeepassword){
                //no code here.
            }else{
               $loginname = $getname;   
               $isSuccess = true;
            }
            }
            if($isSuccess == true){         
                echo '<div class="alert alert-success w-50 p-3 mx-auto">Welcome to the system ',ucfirst($loginname),'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                $isSuccess = false;
            }else{
                $loginname = "";
                $isSuccess = false;
                echo '<div class="alert alert-danger w-50 p-3 mx-auto">You Entered the wrong password<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/loginstyle.css" >
</head>
<body>
    <div class="card card-container">
            <div class="row">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
                <div class=" col-12 text-center">
                    <form action="" method="POST">
                        <select name="employeeposition" class="form-control" id="">
                            <?php
                                $positions = array(
                                    array(
                                        "admin" => "Admin",
                                        "contentManager" => "Content Manager",
                                        "systemUser" => "System User" 
                                    )
                                    );
                                foreach( $positions as $names ){
                                    foreach($names as $keys => $values){
                                        echo "<option value='$keys'> $values</option>";
                                    }
                                }              
                                ?>
                        </select>
                </div>
                    <input type="text" name="employeename"class="form-control mt-3" placeholder="User" required autofocus><br>
                    <input type="password" name="employeepassword" id="" class="form-control my-3" placeholder="Password" required><br>
                    <button type="submit" name="loginhandle" class="btn btn-lg btn-primary btn-block btn-signin">login</button>
                 </form>
                </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>