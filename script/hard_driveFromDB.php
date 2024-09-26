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
        $query = "SELECT dyski_twarde.nazwa,dyski_twarde.pojemnosc,dyski_twarde.interfejs,dyski_twarde.predkosc_obr,dyski_twarde.predkosc_odczytu,dyski_twarde.predkosc_zapisu,dyski_twarde.image,dyski_twarde.cena FROM dyski_twarde";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"hardDrive\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/hard_drive_images/{$row['image']}\" alt=\"dysk_twardy\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Pojemność</th>
                        <th>Interfejs</th>
                        <th>Prędkość obrotowa</th>
                        <th>Prędkość odczytu</th>
                        <th>Prędkość zapisu</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['pojemnosc']}</td>
                            <td>{$row['interfejs']}</td>
                            <td>{$row['predkosc_obr']}</td>
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