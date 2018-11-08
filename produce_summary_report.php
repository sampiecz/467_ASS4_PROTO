<?php include 'header.php'; ?>

<?php 


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $newAgent = trim($_POST['NewAgent']);


    }

?>

<a href="javascript:window.print()" class="btn btn-secondary" style="width: 100%;">Print <i class="fa fa-print"></i></a>
<?php include 'footer.php'; ?>
