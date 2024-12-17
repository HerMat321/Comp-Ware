<?php
    function alert($message)
    {
    echo "<script>alert('$message');</script>";
    }

    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Laptop" OR $search_information == "Laptopy" OR $search_information == "laptopy" OR $search_information == "laptop" )
        {
            header("Location: laptops.php");
        }
    }
?>