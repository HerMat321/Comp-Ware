<!--Skrypt na bazie divow z informacjami o monitorach z bazy danych-->
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
        $query = "SELECT monitory.nazwa,monitory.przekatna,monitory.matryca,monitory.image,monitory.cena FROM monitory";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"monitors\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/monitors_images/{$row['image']}\" alt=\"monitor\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Przekątna</th>
                        <th>Matryca</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['przekatna']}</td>
                            <td>{$row['matryca']}</td>
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