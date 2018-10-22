<?php include 'header.html'; ?>

<!-- Start: Connect to the database -->
<?php
    try {
        $dsn = "mysql:host=courses;dbname=z1732715";
        $username = "z1732715";
        $password = "1996Apr23";
        $pdo = new PDO($dsn, $username, $password);
    }
    catch(PDOexception $e) {
        echo "Connection to database failed: " . $e->getMessage();
    }
?>
<!-- End: Connect to the database -->

<style>

    .blue-and-black
    {
        background: blue;
        border: 1px solid black;
        width: 50%;
        float: left;
    }
    .red-and-black
    {
        background: red;
        border: 1px solid black;
        width: 50%;
        float: right;
    }

    @media only screen and (max-width: 767px)
    {
        .red-and-black
        {
            width: 100%;
            float: right;
        }

        .blue-and-black
        {
            float: none;
            width: 100%;
        }
    }
</style>

<div class="blue-and-black">
    <p>Example</p>
</div>
<div class="red-and-black">
    <p>Example</p>
</div>

<?php include 'footer.html'; ?>
