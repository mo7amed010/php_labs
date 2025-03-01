<?php
// echo empty($_POST["confPass"]);

if(isset($_POST["confPass"])){

    echo "Sign form <br> <br>";
    echo "Name : " .$_POST["name"] ."<br>";
    echo "Email : " .$_POST["email"] ."<br>";
    echo "Password: " .$_POST["Pass"] ."<br>";
    echo "Conf Pass: " .$_POST["confPass"] ."<br>";

}else{

    echo "Login form <br> <br>";
    echo "Email : ".$_POST["email"] ."<br>";
    echo "Password : ".$_POST["pass"] ."<br>";
    
}