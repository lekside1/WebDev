<?php
$page_title = "Login";
    include("header.php");
?>

<div class="account">
    <form action="search.php" method="POST">
    <table>
        <tr> 
            <th><label>Create New Account</label> </th>
        </tr>
        <tr>
            <th><label>Username </label>
            <input type="text" id="user" name="user" size="25px" placeholder="UserName123" /></th> 
        </tr>
        <tr> 
            <th><label>Password </label>
            <input type="password" id="pass" name="pass" size="25px" placeholder="12Pass"/></th> 
        </tr>
        <tr>
            <th><input type="submit" id="create" value="Create Account"/> </th>
        </tr>
    </table>
    </form>
</div>

<br/><br/><br/>

<div class="account">
    <form action="Search.php" method="POST">
    <table>
        <tr> 
            <th><label>Login</label> </th>
        </tr>
        <tr>
            <th><label>Username </label>
            <input type="text" id="user" name="user" size="25px"/></th> 
        </tr>
        <tr> 
            <th><label>Password </label>
            <input type="password" id="pass" name="pass" size="25px" /></th> 
        </tr>
        <tr>
            <th><input type="submit" id="login" value="Login"/> </th>
        </tr>
    </table>
    </form>
</div>


<pre style="color: purple; text-align: center; font-weight: bold; font-family: Arial, Helvetica;"> 
A username can contain letters (both upper and lower case) and digits only. 

A password must be at least 6 characters long (characters are to be letters 
and digits only), have at least one letter and at least one digit. </pre>


<?php 
    include("footer.php");
?>