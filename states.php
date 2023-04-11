 
 <?php
 $flag='';
 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'] ;
    $city=$_POST['city'];
    $state=$_POST['state'] ;
    $conn=mysqli_connect('localhost','root','','aform');
    $query=mysqli_query($conn,"INSERT INTO `detail`(`name`,`phone`,`email`,`city`,`state`) VALUES ('$name','$phone','$email','$city','$state')");
    if($query){
        $flag ='1';}
        else{
            $flag ='0';
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
    <style>
        body{
            background: blue;
            height: 100%;
            width:100%;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        form{
            background: grey;
            height: 400px;
            width: 400px;
            border: 1px solid grey;
            border-radius: 10px;
            text-align: center;

        }
        input,select{
            height: 30px;
            width: 90%;
            border: 1px solid grey;
            border-radius: 10px;
            margin-top: 10px;

        }
        button{
            height: 30px;
            width:200px;
            background: green ;
            border: 1px solid grey;
            border-radius: 10px;
            margin-top: 10px;

        }
        button:hover{
        cursor: pointer;
        }
        </style>
 </head>
 <body>
    <form method="post" action>

        <input type="text" name="name" placeholder="Enter name"> <br>
        <input type="text" name="phone" placeholder="Enter phone"> <br>
        <input type="email" name="email" placeholder="Enter email"> <br>
       
        <select name="city" id="city" ><br>
            <option value="" hidden>City</option>
            <option value="city1" hidden>City1</option>
            <option value="city2" hidden>City2</option>
        </select>
        <select name="state" id="state" ><br>
             <option value="" hidden>state</option>
             <option value="state1" hidden>state1</option>
             <option value="state2" hidden>state2</option>
        </select>
        <button type="submit" name="submit" >submit</button>
        <?php 
            if($flag == '1'){
                ?>
            <p style="color:green;"><strong>Success !</strong> Details have been submitted</p>
        <?php 
            }
        ?>

<?php 
            if($flag == '0'){
                ?>
            <p style="  color:red;"><strong>Failed ! </strong> Details can't be  submitted</p>
        <?php 
            }
        ?>

</form>
    
 </body>
 </html>