<?php
include('./conn.php');

// $alter_bio = "ALTER TABLE User RENAME COLUMN Bio to About";

// $alter_add_gender = "ALTER TABLE USer ADD COLUMN Gender VARCHAR(10) AFTER About";

// $alter_drop_Status = "ALTER TABLE user DROP COLUMN Status";

// $alter_add_Status = "ALTER TABLE user ADD COLUMN Status CHAR(10)";

$alter_Status_mofidy = "ALTER TABLE user MODIFY COLUMN Status VARCHAR(10)";

$res = mysqli_query($conn, $alter_Status_mofidy);

if ($res) {
    echo "Done ✔";
} else {
    echo "Can't Alter 🛑";
}

$conn->close();
?>