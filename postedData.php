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
    <?php
        if(isset($_POST['First Name']) && !ctype_alpha($_POST['First Name'])){
            $status = "Warning";
            $statusMesssage = "Please only include letters in your first name.";
        }
        if(isset($_POST['Last Name']) && !ctype_alpha($_POST['Last Name'])){
            $status = "Warning";
            $statusMesssage = "Please only include letters in your last name.";
        }
        if(isset($_POST['cardNumber']) && !ctype_digit($_POST['card'])){
            $status = "Warning";
            $statusMesssage = "Please only include numbers in your card field.";
        }
        if(isset($_POST['cvv']) && !ctype_digit($_POST['cvv'])){
            $status = "Warning";
            $statusMesssage = "Please only include numbers in your cvv field.";
        }
        if(isset($_POST['zip']) && !ctype_digit($_POST['zip'])){
            $status = "Warning";
            $statusMesssage = "Please only include numbers in your zip code.";
        }
    ?>
    <BODY>
        <?php
        $firstName = $_POST['First Name'];
        $lastName = $_POST['Last Name'];
        $card = $_POST['cardNumber'];
        $exp = $_POST['expDate'];
        $cvv = $_POST['cvv'];
        $zip = $_POST['zip'];

        $q = "INSERT INTO paymentInfo (firstName, lastName, card, exp, cvv, zip) 
                VALUES ('$firstName', '$lastName', '$cardNumber', '$expDate', '$cvv', '$zip');";
        if (isset($_POST['submit'])) {
            echo "GeeksforGeeks";
        }
        mysqli_close($dblink);        
    ?>
    
</BODY>
</HTML>