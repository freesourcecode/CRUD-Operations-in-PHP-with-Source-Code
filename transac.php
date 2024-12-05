<?php
       
 include('connection.php');
       
       
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mname = $_POST['Middlename'];
$address = $_POST['Address'];
$contct = $_POST['Contact'];
$comment = $_POST['comment'];

switch ($_GET['action'])
{
    case 'add':
        $query = "INSERT INTO people
                                (people_id,first_name, last_name, mid_name, address,contact, comment)
                                VALUES ('Null','" . $fname . "','" . $lname . "','" . $mname . "','" . $address . "','$contct','" . $comment . "')";
        mysqli_query($db, $query) or die('Error in updating Database');

    break;

}
?>
        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "index.php";
    </script>
