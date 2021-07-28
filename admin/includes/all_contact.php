<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>contact id</th>
                <th>contact name</th>
                <th>contact email</th>
                <th>contact telephone</th>
                <th>contact message</th>
                <th>contact date</th>

            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM contact";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $contact_id = $row['contact_id'];
                $contact_name = $row['contact_name'];
                $contact_email = $row['contact_email'];
                $contact_phone = $row['contact_phone'];
                $contact_message = $row['contact_message'];
                $contact_date = $row['contact_date'];


            ?>

                <tr>
                    <td><?php echo $contact_id ?></td>
                    <td><?php echo $contact_name ?></td>
                    <td><?php echo $contact_email ?></td>
                    <td><?php echo $contact_phone ?></td>
                    <td><?php echo $contact_message ?></td>
                    <td><?php echo $contact_date ?></td>
                    <td> <a href='contact.php?delete=<?php echo $contact_id ?>'>Delete</a></td>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query = "DELETE from contact WHERE `contact_id` = {$id_delete}";
    $delete_query = mysqli_query($conn, $query);
    header("location:contact.php");
}
?>