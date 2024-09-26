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
        $query = "SELECT pamiec_ram.nazwa,pamiec_ram.pojemnosc_calkowita,pamiec_ram.rodzaj_pamieci,pamiec_ram.taktowanie,pamiec_ram.opoznienie,pamiec_ram.image,pamiec_ram.cena FROM pamiec_ram";

        $result = $connection->query($query);
        
        foreach($result as $row)
        {
            echo 
            "<div class=\"ram\">
                <div class=\"products\">
                    <h2><i>{$row['nazwa']}</i></h2>
                    <img src=\"../database/ram_images/{$row['image']}\" alt=\"pamiec_ram\">
                </div>
                
                <div class=\"products\">
                    <table>
                        <th>Pojemność całkowita</th>
                        <th>Rodzaj pamięci</th>
                        <th>Taktowanie</th>
                        <th>Opóźnienie</th>
                        <th>Cena</th>

                        <tr>
                            <td>{$row['pojemnosc_calkowita']}</td>
                            <td>{$row['rodzaj_pamieci']}</td>
                            <td>{$row['taktowanie']}</td>
                            <td>{$row['opoznienie']}</td>
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