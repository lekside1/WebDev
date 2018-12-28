<?php
    // Header
    $page_title = "Search page";
    include('header.php');
?>
<?php
/*
    $Newusername = $_POST['user'];
    $Newpassword = $_POST['pass'];

if(!isset($username) || !isset($password)) {
    $file = fopen("login.txt","w");
    fwrite($Newusername);
    fwrite($$Newpassword);
}
*/
    // $username = $_POST['user'];
    // $password = $_POST['pass'];
    
    // $file = fopen("login.txt","r");

    // while (!feof($file)) {
    //     $username = fread($file);
    //     $password = fread($file);
    // }

    // TESTING
    $username = 'admin';
    $password = 'admin';

    // login info
    if(isset($_SESSION['user']))
    {
        echo "Welcome ". $_SESSION['user'];
        echo "<br/><br/><a href='logout.php'><input type=button value=Logout name=logout></a>";
    }
    else
    {
        if($_POST['user'] == $username && $_POST['pass'] == $password)
        {
            $_SESSION['user'] = $username;
            echo "<script> location.href = 'search.php' </script>";

        }
        else {
        
            echo "<script> alert('Username or password incorrect!') </script>";
            echo "<script> location.href = 'login.php' </script>";
        }
    }

// chalets

    echo "<table border=1 style=\" border: 10px solid black; background-color: violet; padding: 10px; margin: auto;\">"; 
    echo "<caption> <h1 style=\" color: blue; text-align: center;\"> Search Results </h1> </caption>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th> Chalet </th>";
    echo "<th> Photo </th>";
    echo "<th> Number of people </th>";
    echo "<th> Smoking allowed? </th>";
    echo "<th> Pets </th>";
    echo "<th> Size </th>";
    echo "<th> Location </th>";
    echo "<th> Price </th>";
    echo "<th> Miscellaneous </th>";
    echo "<th> Address </th>";
    echo "</tr>";
    echo "</tbody >";

    $file = fopen("chalets.txt","r");

    


    echo "</tr>";
    echo "</tbody>";
    echo "</table>";


?>



<?php
    // Footer
    include('footer.php');
?>



