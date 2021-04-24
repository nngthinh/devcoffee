<?php
include("../config/config.php");

function updateBasicInfophp()
{

    if (isset($_POST["lname"])) {
        $lname = $_POST["lname"];
    } else {
        die('Error: lname empty');
    }
    if (isset($_POST["fname"])) {
        $fname = $_POST["fname"];
    } else {
        die('Error: firstname empty');
    }
    if (isset($_POST["mail"])) {
        $mail = $_POST["mail"];
    } else {
        die('Error: mail empty');
    }
    if (isset($_POST["gender"])) {
        if ($_POST["gender"] == "Nam") {
            $gender = 0;
        } else $gender = 1;
    } else {
        die('Error: gender empty');
    }
    if (isset($_POST["user"])) {
        $user = $_POST["user"];
    }
    $response = NULL;
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: connect failed(' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    $sql = "UPDATE account SET lname=\"$lname\" , fname=\"$fname\" , email = \"$mail\", gender= $gender WHERE username=\"$user\"";

    if ($result = mysqli_query($link, $sql)) {
        die("Success");
    } else {
        die(mysqli_error($link));
    }
}

function updateContactInfophp()
{

    if (isset($_POST["phone"])) {
        $numphone = $_POST["phone"];
    } else {
        die('Error: phone empty');
    }
    if (isset($_POST["address"])) {
        $addr = $_POST["address"];
    } else {
        die('Error: address empty');
    }
    if (isset($_POST["user"])) {
        $user = $_POST["user"];
    }



    $response = NULL;
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: connect failed(' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    $sql = "UPDATE account SET address= \"$addr\", phone=\"$numphone\" WHERE username = \"$user\"";
    if ($result = mysqli_query($link, $sql)) {
        die("Success");
    } else {
        die(mysqli_error($link));
    }
}
function updateImg($id)
{
    if (isset($_POST['Submit1'])) {
        $MY_FILE = $_FILES['file']['tmp_name'];

        // To open the file and store its contents in $file_contents
        $file = fopen($MY_FILE, 'r');
        $file_contents = fread($file, filesize($MY_FILE));
        fclose($file);
        /* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/

        $file_contents = addslashes($file_contents);

        // To add the file in the database
        $link = mysqli_connect(LS, LU, LP, LD) or die("Unable to connect to database.");

        $sql = "UPDATE img SET file_data='$file_contents' WHERE id=$id ";

        if ($result = mysqli_query($link, $sql)) {
            die("Success");
        } else {
            die(mysqli_error($link));
        }
        echo "File INSERTED into files table successfully.";
    }
}
function handle()
{
    if (isset($_POST["contact"])) {
        updateContactInfophp();
    }
    if (isset($_POST["basic"])) {
        updateBasicInfophp();
    }
}
handle();