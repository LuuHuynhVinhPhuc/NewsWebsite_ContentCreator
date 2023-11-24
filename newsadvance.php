<?php
session_start();
    include "./connection.php";
    include_once "./header.php";

// unset($_SESSION['uname']);

// // check is sign in or not 
// if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
//     header('Location: login.php');
//     exit();
// }
// ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date up</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    $res = mysqli_query($link, "select * from news");
                    while ($row = mysqli_fetch_array($res)) {
                        $count = $count + 1;
                        echo "<tr>";
                        echo "<td>";
                        echo $count;
                        echo "</td>";
                        echo "<td>";
                        echo $row["Name"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["Dateup"];
                        echo "</td>";
                        echo "<td>";
                        echo $row["Status"];
                        echo "</td>";
                        echo "<td>";
                        echo "<td><a onclick=\"confirmDelete(" . $count . ", " . $row['ID'] . ")\" style=\"color: red; cursor: pointer\">Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "./footer.php"
?>

<script type="text/javascript">
function confirmDelete(id, rid) {
  var result = confirm("Are you sure you want to delete Categories number " + id + "?");
  if (result) {
    window.location.href = "deletenews.php?id=" + rid;
  }
}
</script>