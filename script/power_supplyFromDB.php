<!--Skrypt na bazie divow z informacjami o zasilaczach z bazy danych-->
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
        $query = "SELECT zasilacze.nazwa,zasilacze.moc,zasilacze.standard,zasilacze.sprawnosc,zasilacze.certyfikat,zasilacze.image,zasilacze.cena FROM zasilacze";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"powerSupply\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/power_supply_images/{$row['image']}\" alt=\"zasilacz\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Moc</th>
                        <th>Standard</th>
                        <th>Sprawnosc</th>
                        <th>Certyfikat</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['moc']}</td>
                            <td>{$row['standard']}</td>
                            <td>{$row['sprawnosc']}</td>
                            <td>{$row['certyfikat']}</td>
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