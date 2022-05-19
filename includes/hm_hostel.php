<?php
session_start();

if (isset($_POST['hm_submit'])) {

    require 'config.inc.php';

    $Hostelname = $_POST['hostelname'];
    $Roomno = $_POST['roomno'];
    $Adminpassword = $_POST['pass'];

    if (empty($username) || empty($hostel_name) || empty($Adminpassword)) {
        echo"<script>alert('Input all fields');window.location='../admin/add_remove_hm.php'</script>";
        exit();
      }
    elseif{
        $sql= "SELECT Hostel_name FROM Hostel WHERE Hostel_name = '$Hostelname'";
        $result = mysqli_query($conn, $sql);
        if ($result != 0) {
            $sql= "SELECT * FROM Rooms WHERE Hostel_id = '$Hostelname'";
            $result = mysqli_query($conn, $sql);
            if ($result!=$Roomno) {
                $sql3= "UPDATE Hostel SET No_of_rooms='$Roomno' WHERE Hostel_name = '$Hostelname'";
                $result = mysqli_query($conn, $sql3);
            }
            else {
                echo"<script>alert('Room Exists');window.location='../admin/add_remove_hm.php'</script>";
            }
        }
        if($result == 0){
            $HostelID = $row[Hostel_id];
            $sql2= "INSERT INTO Hostel (Hostel_id, Hostel_name, current_no_of_rooms, No_of_rooms, No_of_students) VALUES ('$HostelID', '$Hostelname', 0, 5, 0)";
            $result = mysqli_query($conn, $sql2);
            if ($result!=$Roomno) {
                $sql3= "UPDATE Hostel SET No_of_rooms='$Roomno' WHERE Hostel_name = '$Hostelname'";
                $result = mysqli_query($conn, $sql3);
            }
            else {
                echo"<script>alert('Room Exists');window.location='../admin/add_remove_hm.php'</script>";
            }
        }
    }
}

elseif (isset($_POST['remove_submit'])) {
    
    require 'config.inc.php';

    $Hostelname = $_POST['hostelname'];
    $Roomno = $_POST['roomno'];
    $Adminpassword = $_POST['pass'];

    if (empty($username) || empty($hostel_name) || empty($Adminpassword)) {
        echo"<script>alert('Input all fields');window.location='../admin/add_remove_hm.php'</script>";
        exit();
      }
    
      $sql= "SELECT Hostel_name FROM Hostel WHERE Hostel_name = '$Hostelname'";
      $result = mysqli_query($conn, $sql);
    elseif () {
        # code...
    }
}
?>