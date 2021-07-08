<?php
    include_once(dirname(__FILE__, 1) . '/api/db.php');
    include_once(dirname(__FILE__, 1) . '/header.php');

    $listCl = "SELECT clients.personID, clients.name, clients.mark, clients.phone, clients.mail, clients.tarifR, clients.tarifChriz, clients.tarifT, city.name FROM clients, city WHERE clients.cityClient = city.cityID";
    $getClients = mysqli_query($connectDB,$listCl);

    if (mysqli_num_rows($getClients)==0) {
        echo "Клиентов нет!";
    }

    $listRows = mysqli_num_rows($getClients);
?>
<form action="/tracked.php" name="trackedList" method="POST">
    <div class="clients-narciss">
        <table class="tableCLIENTS" cellpadding="0" cellspacing="0" align="center">
            <tbody>
                <tr style="background-color: #7fffd4;">
                    <th class="brd_bottom">N</th>
                    <th class="brd_bottom" width="245">Ф.И.О</th>
                    <th class="brd_bottom">Маркировка</th>
                    <th class="brd_bottom">Город</th>
                    <th class="brd_bottom">Телефон</th>
                    <th class="brd_bottom">Email</th>
                    <th class="brd_bottom">Тариф Роза</th>
                    <th class="brd_bottom">Тариф Хризантема</th>
                    <th class="brd_bottom">Тариф СС(телега)</th>
                    <th class="brd_bottom">Select</th>
                    <!-- <th class="brd_bottom">Редактировать</th> -->
                </tr>
                <?php
                    for ($i=0; $i < $listRows; $i++) {
                        while ($rows = mysqli_fetch_row($getClients)) {
                            echo "<tr class=\"center\">";
                                for ($j=0; $j < 1; $j++) {
                                    echo "<td class=\"brd_bottom\">".$rows[0]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[1]."</td>";
                                    echo "<td class=\"brd_bottom bold\">".$rows[2]."</td>";
                                    echo "<td class=\"brd_bottom bold\"> г. ".$rows[8]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[3]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[4]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[5]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[6]."</td>";
                                    echo "<td class=\"brd_bottom\">".$rows[7]."</td>";
                                    echo "<td class=\"brd_bottom\">
                                            <input type=\"checkbox\" name=\"activeClient[]\" value=\"".$rows[0]."\">
                                        </td>";
                                    // echo "<td class=\"brd_bottom\"><form action=\"editCl.php\" method=\"get\">
                                    //         <input type=\"submit\" value=\"Редактировать!\">
                                    //     </form></td>";
                                }
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="addNewClient btn">Добавить клиента!</div>
    <div class="btn-group">
        <input type="submit" class="btn" name="makeTrList" value='Сформировать путевой'>
    </div>
</form>
<form action="api/clients/add-new.php" method = "POST" class="addFormClient">
    <label>Ф.И.О.<input type="text" name="client-n" required placeholder="Имя Клиентв полном формате"></label>
    <label>Телефон<input type="tel" name="phone" required placeholder="+7(  ) ___-__-__" pattern="+7[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"></label>
    <label>
        Город
        <select name="cityName">
            <?php
                $city = "SELECT * FROM city";
                $getCities = mysqli_query($connectDB, $city);
                $listCity = mysqli_num_rows($getCities);
                for ($i=0; $i < $listCity; $i++) { 
                    while($list = mysqli_fetch_row($getCities)){
                        echo '<option value = "'.$list[0].'">' . $list[1] .'</option>';
                    }       
                }
            ?>
        </select>
    </label>
    <label for="mail">Электронная почта</label>
    <input type="mail" name="mail" placeholder="Электронная почта клиента">
    <label>
        Маркировка
        <input type="text" name="markCl" placeholder="Маркировка клиента">
    </label>
    <label>
        Тариф Роза
        <input type="number" step="0.01" name="tarifR" placeholder="Тариф Роза">
    </label>
    <label>
        Тариф Хризантема
        <input type="number" step="0.01" name="tarifChriz" placeholder="Тариф Хризантема">
    </label>
    <label>
        СС???
        <input type="number" step="0.01" name="tarifCC" placeholder="СС???">
    </label>
    <input type="submit" value="Сохранить">
    <span class="closeForm">х</span>
</form>
<script>
    $('.addNewClient').click(
        function(){
            $('.addFormClient').css('display','flex');
            $('.addNewClient').css('display','none');
            $('.btn').css('display','none');
        }
    )
    $('.closeForm').click(
        function(){
            $('.addFormClient').css('display','none');
            $('.addNewClient').css('display','flex');
            $('.btn').css('display','flex');
        })
</script>
