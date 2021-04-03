<?php
    include_once(__DIR__ . '\api\db.php');
    include_once(__DIR__ . '\header.php');

    $listCl = "SELECT * FROM clients";
    $getClients = mysqli_query($connectDB,$listCl);

    if (mysqli_num_rows($getClients)==0) {
        echo "Клиентов нет!";
    }

    $listRows = mysqli_num_rows($getClients);
?>
<div class="clients-narciss">
    <table class="tableCLIENTS" cellpadding="0" cellspacing="0" align="center">
        <tbody>
            <tr style="background-color: #7fffd4;">
                <th class="brd_bottom">N</th>
                <th class="brd_bottom">Ф.И.О</th>
                <th class="brd_bottom">Телефон</th>
            </tr>
            <?php
                for ($i=0; $i < $listRows; $i++) {
                    while ($rows = mysqli_fetch_row($getClients)) {
                        echo "<tr class=\"center\">";
                        for ($j=0; $j < 1; $j++) { 
                            echo "<td class=\"brd_bottom\">".$rows[0]."</td>";
                            echo "<td class=\"brd_bottom\">".$rows[1]."</td>";
                            echo "<td class=\"brd_bottom\"><form action=\"editCl.php\" method=\"get\">
                                    <input type=\"submit\" value=\"Редактировать!\">
                                </form></td>";
                        }
                        echo "</tr>";
                    }
                }
            ?>               
        </tbody>
    </table>
</div>
<a href="#" class="addNewClient">Добавить клиента!</a>
<form action="api/clients/add-new.php" method = "POST" class="addFormClient">
    <input type="text" name="client-n" placeholder="Ф.И.О.">
    <input type="tel" name="phone" placeholder="+7(  ) ___-__-__" pattern="+7[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
    <input type="submit" value="Сохранить">
</form>
<script>
    $('a.addNewClient').click(
        function(){
            $('.addFormClient').css('display','block');
        }
    )
</script>
