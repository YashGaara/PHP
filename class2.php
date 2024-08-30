<h1>Select all option from array</h1>
<select class="form-select">
    <option value="">Open this select menu</option>
    <?php
    $items = ["black", "pink", "yellow", "orange"];
    foreach ($items as $item) :

    ?>
    <option value="<?=$item?>"><? ucfirst($item)?></option>
    <?php endforeach;?>
</select>
<br><br>
    <h1>HTML table data show by array</h1>
    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $items=['one','two','three'];
            foreach($items as $index => $item):

            ?>
            <tr>
                <td><?=htmlspecialchars($index + 1)?></td>
                <td><?=htmlspecialchars(ucfirst($item))?></td>
            </tr>

            <?php endforeach ;?>


        </tbody>
    </table>

    <br><br>

    <h1>user information</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = [['name'=>'john','email'=>'john@email.com'],
            ['name'=>'sam','email'=>'sam@gmail.com']];
            foreach($users as $index => $user):
                ?>
                <tr>
                    <td><?=htmlspecialchars($index + 1)?></td>
                    <td><?=htmlspecialchars($user['name'])?></td>
                    <td><?=htmlspecialchars($user['email'])?></td>
                </tr>
                <?php endforeach ;?>
            </tbody>
    </table>

    <h1>user phone number</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>phone number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $users = [['id'=>101,'phone number'=>'9879694356'],
            ['id'=>102,'phone number'=>'5689898798']];
            foreach($users as $index => $user):
                ?>
                 <tr>
                    <td><?=htmlspecialchars($index + 1)?></td>
                    <td><?=htmlspecialchars($user['id'])?></td>
                    <td><?=htmlspecialchars($user['phone number'])?></td>
                </tr>
                
                <?php endforeach ;?>
            </tbody>
    </table>