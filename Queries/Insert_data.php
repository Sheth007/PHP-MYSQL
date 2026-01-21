<?php
include(
    './conn.php'
);

$insert_data = "INSERT INTO User (Id, firstname, lastname, password, birthdate, bio, status) VALUES
(1, 'John', 'Doe', 'passJohn123', '2001-03-15', 'Software trainee', 'Active'),
(2, 'Jane', 'Smith', 'jane@456', '2002-07-21', 'Web developer', 'Active'),
(3, 'Michael', 'Brown', 'mike789', '2000-12-20', 'Database learner', 'In-Active'),
(4, 'Emily', 'Davis', 'emilyPwd', '2003-01-10', 'UI designer', 'Active'),
(5, 'Daniel', 'Wilson', 'dan@321', '2001-09-05', 'Backend trainee', 'Active'),
(6, 'Sophia', 'Taylor', 'sophiaPwd', '2004-06-18', 'Frontend intern', 'Active'),
(7, 'James', 'Anderson', 'james@777', '2000-12-25', 'Learning SQL', 'In-Active'),
(8, 'Olivia', 'Thomas', 'oliviaPass', '2002-11-30', 'Java developer', 'Active'),
(9, 'William', 'Moore', 'will@999', '2001-04-14', 'Tech enthusiast', 'Active'),
(10, 'Ava', 'Martin', 'avaPwd', '2003-08-09', 'Full stack trainee', 'Active'),
(11, 'Benjamin', 'Lee', 'ben123', '2000-12-13', 'System analyst', 'In-Active'),
(12, 'Isabella', 'Clark', 'isa@456', '2004-02-27', 'Student developer', 'Active'),
(13, 'Lucas', 'Lewis', 'lucasPwd', '2001-10-19', 'Learning MySQL', 'Active'),
(14, 'Mia', 'Walker', 'mia@pass', '2002-05-06', 'Intern programmer', 'Active'),
(15, 'Henry', 'Hall', 'henry321', '2003-12-01', 'Training participant', 'In-Active')";

$res = mysqli_query($conn, $insert_data);

if ($res > 0) {
    echo "Data Inserted Successfully";
} else {
    echo "Can not insert data";
}

$conn->close();

?>