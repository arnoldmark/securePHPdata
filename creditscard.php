<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>UNIT 6</TITLE>
        <META charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <META name="Author" content="Mark Karomo" />
        <META name="Date" content="Oct 10, 2022" />
        <META name="Description" content="Securely Storing Payment Data " />
    
</HEAD>
<STYLE>
    .warning{
        background-color: #FFFFA0;
        border:3px solid;
        border-color: #7f3030;
        padding: 8px;
        margin-bottom: 5px;
    }
</STYLE>
<?php
$status = "information";
$statusMesssage = "Please complete the form and click the submit button.";
?>
<?php
$dbhost = '$dbhost';
$dbname = '$dbname';
$dbuser = '$dbuser';
$dbpassword = '$dbpassword';
$dblink = new mysqli($dbhost, $dbuser, $dbpassword, $dbname); 
if ($dblink->connect_error) {
    print "There was a problem connecting to the database.<BR />";
    print $dblink->connect_errno.": {$link->connect_error}";
}
?>
<h1>PAYMENT INFORMATION</h1>
    <BODY>
    <form action="postedData.php" method="post">
        <label for = "firstName">First Name:</label></BR>
        <input type="text" id="firstName" name="First Name" required>
        <br>
        <label for="lastName">Last Name:</label></BR>
        <input type="text" id="lastName" name="Last Name" required>
        <br>
        <label for="cardNumber">Card Number:</label></BR>
        <input type="number" id="cardNumber" name="card" required maxlength="19">
        <br>
        <label for="expDate">Expiration Date:</label></BR>
        <input type="text" id="expDate" name="exp" required>
        <br>
        <label for="cvv">CVV:</label></BR>
        <input type="text" id="cvv" name="cvv" required>
        <br>
        <label for="zip">Zip Code:</label></BR>
        <input type="text" id="zip" name="zip" required>
        <br>
        <input type="submit" value="Submit"></BR>
    </form>
        
    </BODY>
</HTML>