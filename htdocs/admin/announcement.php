<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/hover.css">
    <link rel="stylesheet" href="assets/css/styles2.css">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand" style="width:auto;margin-top:20px;">ANNOUNCEMENT!</a>
        </div>
    </div>
</nav>


<div class="container" style="margin-top:80px;">
                <?php
                    // Include config file
                    require_once 'config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                      while($rows = $result->fetch_array())        {
                      ?>
                    <h1 class="list-group-item-heading" style="font-family:Times New Roman">WHAT: <?php echo $rows['name'];?></h1>
                    <h3 class="list-group-item-heading" style="font-family:Times New Roman">WHERE: <?php echo $rows['position'];?></h3>
                    <h4 class="list-group-item-heading" style="font-family:Times New Roman">WHEN: <i><?php echo $rows['address']?></i></h4>
                    <h4 class="list-group-item-text">Description: <?php echo $rows['salary'];?></h4>
                    <br>
                       <?php }
                       }
                      } ?>
            </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>