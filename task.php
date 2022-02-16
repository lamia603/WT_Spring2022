<html>
<head>
 <titlle>
     My Site
 </title>
</head>
<body>
    <form action="Control/results.php"method="post">
        Username<input type="text" name="uname" >
        <br>
        Password<input type="password" name="password">
        <br>

        Select a Radio:
        <input type="radio" name="r1" value="radio1"> Radio 1
        <input type="radio" name="r1" value="radio2"> Radio 2
        <br>
        Select a Box:  
        <input type="checkbox" name="c1" value="check1"> Box 1
        <input type="checkbox" name="c2" value="check2"> Box 2
        <br>
        
        <input type="submit" name="Submit"> 
    </form>
</body>
</html>