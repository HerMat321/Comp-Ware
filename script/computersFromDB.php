<!--Skrypt na bazie divow z informacjami o komputerach z bazy danych-->
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
        $query = "SELECT komputery.nazwa,komputery.procesor,komputery.pamiec,komputery.grafika,komputery.image,komputery.cena FROM komputery";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"personalComputerDescriptions\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/computer_images/{$row['image']}\" alt=\"komputer\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Procesor</th>
                        <th>Pamięć</th>
                        <th>Grafika</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['procesor']}</td>
                            <td>{$row['pamiec']}</td>
                            <td>{$row['grafika']}</td>
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