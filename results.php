<?php 
$uname=$_POST["uname"];

if(strlen($uname)<5)
{
    echo "Please Enter a valid name.";
}
else
{
    echo "your username is ".$_POST["uname"];
}
echo "<br>";

$pass=$_POST["password"];

if(strlen($pass)<8)
{
    echo "Please Enter a valid password.";
}
else
{
    echo "your password is ".$_POST["password"];
}
echo "<br>";

if(isset($_POST["r1"]))
{
    echo " You have selected ".$_POST["r1"];
}
else
{
    echo "You haven't selected any radio.";
}

echo "<br>";

if(isset($_POST["c1"]) || isset($_POST["c2"]) )
{
    if(isset($_POST["c1"]))
    {
        echo " You have picked one of the ".$_POST["c1"];
    }
echo "<br>";
    if(isset($_POST["c2"]))
    {
        echo " You have picked one of the ".$_POST["c2"];
    }
}
else
    {
        echo "You have not picked any Box";

    }
?>