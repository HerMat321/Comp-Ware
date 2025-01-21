<?php
    #Wyszukiwanie laptopów
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Laptop" OR $search_information == "Laptopy" OR $search_information == "laptopy" OR $search_information == "laptop" )
        {
            header("Location: laptops.php");
        }
    }

    #Wyszukiwanie komputerów
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Komputer" OR $search_information == "Komputery" OR $search_information == "komputer" OR $search_information == "komputery" OR $search_information == "Komputery osobiste" OR $search_information == "komputery osobiste" )
        {
            header("Location: personal_computer.php");
        }
    }

    #Wyszukiwanie zasilaczy
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Zasilacz" OR $search_information == "Zasilacze" OR $search_information == "zasilacz" OR $search_information == "zasilacze" )
        {
            header("Location: power_supply.php");
        }
    }

    #Wyszukiwanie monitorów
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Monitor" OR $search_information == "Monitory" OR $search_information == "monitor" OR $search_information == "monitory" )
        {
            header("Location: monitors.php");
        }
    }

    #Wyszukiwanie RAM
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Pamięć" OR $search_information == "pamięć" OR $search_information == "RAM" OR $search_information == "ram" OR $search_information == "pamięć ram" OR $search_information == "Pamięć Ram" )
        {
            header("Location: ram.php");
        }
    }

    #Wyszukiwanie dysków twardych
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Dysk" OR $search_information == "Dyski" OR $search_information == "dysk" OR $search_information == "dyski" OR $search_information == "dyski twarde" OR $search_information == "Dysk Twardy" OR $search_information == "Dyski Twarde" OR $search_information == "dysk twardy" )
        {
            header("Location: hard_drive.php");
        }
    }

    #Wyszukiwanie napędów
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Napęd" OR $search_information == "Napędy" OR $search_information == "napęd" OR $search_information == "napędy" OR $search_information == "CD-ROM" OR $search_information == "cd-rom" OR $search_information == "DVD-ROM" OR $search_information == "dvd-rom")
        {
            header("Location: optical_drive.php");
        }
    }

    #Wyszukiwanie pamięci przenośnej
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Pamięć Przenośna" OR $search_information == "pamięć przenośna" OR $search_information == "USB" OR $search_information == "usb" )
        {
            header("Location: usb.php");
        }
    }

    #Wyszukiwanie oprogramowanie
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Oprogramowanie" OR $search_information == "oprogramowanie" OR $search_information == "Software" OR $search_information == "software" OR $search_information == "programy" OR $search_information == "Programy" )
        {
            header("Location: software.php");
        }
    }

    #Wyszukiwanie laptopów
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Kabel" OR $search_information == "Kable" OR $search_information == "kabel" OR $search_information == "kable" OR $search_information == "Słuchawki" OR $search_information == "słuchawki" OR $search_information == "Klawiatura" OR $search_information == "klawiatura" OR $search_information == "Listwa" OR $search_information == "listwa" )
        {
            header("Location: others.php");
        }
    }

    #Wyszukiwanie regulamin
    if(isset($_POST['searchInformation']))
    {
        $search_information = $_POST['information'];

        if($search_information == "Regulamin" OR $search_information == "regulamin" )
        {
            header("Location: regulamin.php");
        }
    }
   #Wyszukiwanie dostawy
   if(isset($_POST['searchInformation']))
   {
       $search_information = $_POST['information'];

       if($search_information == "Dostawa" OR $search_information == "dostawa" OR $search_information == "Dostawy" OR $search_information == "dostawy"  )
       {
           header("Location: delivery.php");
       }
   }    
?>