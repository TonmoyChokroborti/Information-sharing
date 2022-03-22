<!DOCTYPE html>

<html>
    <head>
        <style>
            .form{
                display: block;
                background-color: #fd5a5a;
                width: 800px;
                height: 800px;
                margin: 0 auto;
                border-radius: 50px;
                text-align: center;
            }
            
            .input{
                position: relative;
                height: 40px;
                width: 40%;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
                vertical-align: middle;
            }
            
            .submit {
                position: relative;
                background-color: white; /* Green */
                border: 2px solid #fd5a5a;
                color: #fd5a5a;
                width: 30%;
                top: 40%;
                padding-top: 1.5%;
                padding-bottom: 1.5%;
                text-align: center;
                text-decoration: none;
                font-size: 30px;
                font-weight: bold;
                border-radius: 10px;
                transition-duration: 1s;
            }
            
            .submit:hover{
                border: 2px solid white;
                background-color: #fd5a5a;
                color: white;
            }
            
        </style>
    </head>

    <body>
        <?php
session_start();
include("include/header.php");


?>
        <div style = "color: #fd5a5a;">
            <center><h1>Donor Registration</h1></center>
        </div>
        <form id = "form" name = "register" class = "form" action = "Register_Donor_Verify.php" method = "POST">
            <input class = "input" style = "top:10%;"type = "text" name = "name" placeholder = "Donor Name" required></input> </br>
            <select class = "input" style = "top:15%;" name = "blood">
                <option value = "A+">A+</option>
                <option value = "A-">A-</option>
                <option value = "B+">B+</option>
                <option value = "B-">B-</option>
                <option value = "AB+">AB+</option>
                <option value = "AB-">AB-</option>
                <option value = "O+">O+</option>
                <option value = "O-">O-</option>
            </select> </br>
            <input class = "input" style = "top:20%;"type = "tel" name = "phone" placeholder = "Contact Number" required></input></br>
            <input class = "input" style = "top:25%;"type = "email" name = "email" placeholder = "Email" required></input></br>
            <input class = "input" style = "top:30%;"type = "number" name = "age" placeholder = "Age" min = "18" max = "60" required></input></br>
            <textarea class = "input" style = "top:35%;height:100px;" type = "textarea" rows = "4" cols = "50" name = "address" placeholder = "Address" required></textarea></br>
			<input class = "submit" type = "submit" value = "Register"></input>
			
		</form>
		
        <?php

include("include/footer.php");


?>
    </body>
</html>