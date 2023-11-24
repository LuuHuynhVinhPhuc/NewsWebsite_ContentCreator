<?php
include "./connection.php";
include "header.php";
?>

<!--content area-->
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Send News</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">

            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Post your news in this form below</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <form action="" name="form1" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">News Name</label>
                                    <input id="food_ingredient" name="food_ingredient" type="text" class="form-control" placeholder="Enter your news name" required>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Your content</label>
                                    <input id="food_ingredient" name="content" type="text" class="form-control" placeholder="Enter content" required>
                                </div>
                                <div class="mb-3">
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit1">
                                        <span id="payment-button-amount">Submit</span>
                                    </button>
                                </div>
                                <div class="alert alert-success" role="alert" id="success" style="display: none;">
                                    Content inserted successfully
                                </div>
                                <div class="alert alert-danger" role="alert" id="error" style="display: none;">
                                    Duplicate insert found
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> <!-- .card -->

        </div><!--/.col-->

    </div>
</div>
<!--end: content area-->

<!--Add Event-->
<?php
if (isset($_POST["submit1"])) {
    $count = 0;
    $res = mysqli_query($link, "SELECT * FROM news WHERE Name ='$_POST[food_ingredient]'")
        or die(mysqli_error($link));
    $count = mysqli_num_rows($res);
    if ($count > 0) {
?>
        <script type="text/javascript">
            document.getElementById("error").style.display = "block";
            document.getElementById("success").style.display = "none";
        </script>
    <?php
    } else {
        $foodIngredient = mysqli_real_escape_string($link, $_POST['food_ingredient']);
        $content = mysqli_real_escape_string($link, $_POST['content']);
        $dateup = date("Y-m-d");
        $status = "Not push";
        mysqli_query($link, "INSERT INTO news (Name, Dateup , content, status) VALUES ('$foodIngredient','$dateup', '$content', '$status')") or die(mysqli_error($link));
    ?>
        <script type="text/javascript">
            document.getElementById("error").style.display = "none";
            document.getElementById("success").style.display = "block";
        </script>
    <?php
    }
    ?>
    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 1000);
    </script>

<?php
}
?>

</div>
?>