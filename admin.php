
<!-- add the header -->
<?php
$title = "Admin Control Panel";
$description = "Place for admin to control users";
include './templates/header.php';
?>
<main id="adminPage">
    <?php
    require 'crud.php';
    $crud = new crud();
    //    get current session
    // Check if session is already started
    if (session_status() == PHP_SESSION_NONE) {
        // Start the session if not already started
        session_start();
    }
    if (!isset($_SESSION['username']))
    {
        header('Location: ./login.php');
    }
    else
    {

        $sql = "SELECT isAdmin FROM users WHERE username = '"  . $crud->escape($_SESSION['username']) . "'";
        $response = $crud->read($sql);
        if($response && $response[0]['isAdmin'] == 1)
        {

            //        handle edit and delete forms
            if (isset($_GET['mode']) && isset($_GET['userID']))
            {
                $sql = "SELECT * FROM users WHERE id = '" . $crud->escape($_GET['userID']) . "'";
                $response = $crud->read($sql);
                if (!$response)
                {
                    die("Unexpected error");
                }
                switch ($_GET['mode'])
                {
                    case 'edit':
                        echo "<form method='post' action='adminAction.php'>";
                        echo "<input type='hidden' name='mode' value='edit'>";
                        echo "<input type='hidden' name='userID' value='".$_GET['userID']."'>";
                        echo "<label for='username'>Username</label>";
                        echo "<input type='text' name='username' value='" . $response[0]["username"]. "'>";
                        echo "<label for='email'>Email</label>";
                        echo "<input type='text' name='email' value='" . $response[0]["email"] . "'>";
                        echo "<label for='profile_image'>Profile Image Path</label>";
                        echo "<input type='text' name='profile_image' value='" . $response[0]["profile_image"] . "'>";
                        echo "<label for='isAdmin'>User's admin status</label>";
                        echo "<input type='number' name='isAdmin' value='" . $response[0]["isAdmin"]. "' min='0' max='1'>";
                        echo "<input type='submit' name='submit' value='submit'>";
                        echo "</form>";
                        break;

                    case 'delete':
                        echo "<form method='post' action='adminAction.php'>";
                        echo "<input type='hidden' name='mode' value='delete'>";
                        echo "<input type='hidden' name='userID' value='".$_GET['userID']."'>";
                        echo "<p>Are you sure you want to delete user " . $_GET['userID'] . "?</p>";
                        echo "<input type='submit' name='submit' value='Yes'>";
                        echo "</form>";
                        break;
                }


            }


            $userDataSQL = "SELECT * FROM users";
            $userData = $crud->read($userDataSQL);
            if (!$userData)
            {
                die("Query failed!");
            }
            // Start table
            echo "<table>";

            // Table header
            echo "<tr>";
            foreach (array_keys($userData[0]) as $header) {
                echo "<th>$header</th>";
            }
//            add in an edit button row
            echo "<th>Edit</th>";
//            and a delete button row
            echo "<th>Delete</th>";

            echo "</tr>";

            // Table rows
            foreach ($userData as $row) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>$cell</td>";
                }
                echo "<td><a href='admin.php?mode=edit&userID=" . $row['id'] . "'>Edit</a></td>";
                echo "<td><a href='admin.php?mode=delete&userID=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            header('Location: ./login.php');
        }
    }


    ?>
</main>
<!-- add the footer -->
<?php
include './templates/footer.php';
?>