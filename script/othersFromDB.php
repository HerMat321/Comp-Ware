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
        $query = "SELECT inne.nazwa,inne.opis,inne.image,inne.cena FROM inne";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"others\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/others_images/{$row['image']}\" alt=\"inne\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Opis</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['opis']}</td>
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