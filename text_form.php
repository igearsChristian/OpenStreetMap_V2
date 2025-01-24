<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php 
    include("header.php");
?>

<?php 
    include("DB.php");

    $select_query = "SELECT * FROM locations";
    $select_result = mysqli_query($conn, $select_query);
?>


<body>
    <div class="container " style="max-width: 2000px; margin-top: 4rem;">
        <div class="row">
            <div class="col" style="border:0px;">
            <div class="card">
                <div class="card-header">
                    <h2 class="display-6 text-center">Current entries in Database:</h2>
                </div>
                <div class="card-body">
                    <table class = "table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Latitude</td>
                            <td>Longitude</td>
                            <td>Image</td>
                        </tr>
                        <tr>
                        <?php 
                            while ($row = mysqli_fetch_assoc($select_result))
                            {
                                $image=$row['image'];
                        ?>    
                        <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['category'];?></td>
                        <td><?php echo $row['lat'];?></td>
                        <td><?php echo $row['long_'];?></td>
                        <td><?php echo "<img src='$image' alt='Image' style='width: 100px; height: auto;' />";?></td>

                        </tr>
                        <?php } ?>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>



    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</body>
</html>