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
        $query = "SELECT napedy.nazwa,napedy.rodzaj,napedy.interfejs,napedy.zapis,napedy.image,napedy.cena FROM napedy";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"opticalDrive\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/optical_drive_images/{$row['image']}\" alt=\"naped\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Rodzaj</th>
                        <th>Interfejs</th>
                        <th>Zapis</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['rodzaj']}</td>
                            <td>{$row['interfejs']}</td>
                            <td>{$row['zapis']}</td>
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