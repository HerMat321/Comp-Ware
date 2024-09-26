<!--Skrypt na bazie divow z informacjami o pamieci ram z bazy danych-->
<?php
    require_once 'database.php';
    //obsługa błędu połączenia z bazą danych
    mysqli_report(MYSQLI_REPORT_STRICT);
    
    try
    {
        if($connection->connect_errno != 0)
        {
            throw new Exception (mysqli_connect_errno());
        }
        $query = "SELECT pamiec_przenosna.nazwa,pamiec_przenosna.pojemnosc,pamiec_przenosna.interfejs,pamiec_przenosna.predkosc_odczytu,pamiec_przenosna.predkosc_zapisu,pamiec_przenosna.image,pamiec_przenosna.cena FROM pamiec_przenosna";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"usb\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/usb_images/{$row['image']}\" alt=\"naped\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Pojemnosc</th>
                        <th>Interfejs</th>
                        <th>Predkosc odczytu</th>
                        <th>Predkosc zapisu</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['pojemnosc']}</td>
                            <td>{$row['interfejs']}</td>
                            <td>{$row['predkosc_odczytu']}</td>
                            <td>{$row['predkosc_zapisu']}</td>
                            <td>{$row['cena']} zł</td>
                        </tr>
                    </table>
                    <button id=\"zamow\">Dodaj do koszyka</button>
                </div>

                <div style=\"clear:both\"></div>
            </div>";
                
        }
    }
    catch(Exception $e)
    {
        echo "<span style=\"color:red\"><b>Próba połączenia z bazą danych zakończyła się niepowodzeniem, przepraszamy, prosimy spróbować później</b></span>";

        echo "Informacja developerska:".$e->getMessage();
    }
    $connection->close();
    
?>