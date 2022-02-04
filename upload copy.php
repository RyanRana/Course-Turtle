<?php
//connect to mysql database
$connection = mysqli_connect("localhost","username","","newapp") or die("Error " . mysqli_error($connection));

//fetch data from database
$sql = "select school from schools";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autosuggestion Select Box using HTML5 Datalist, PHP and MySQL with Example</title>
</head>
<body>
    <label for="country">Country Name</label>
    <input type="text" list="countryname" autocomplete="off" id="country">
    <datalist id="countryname">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['country_name']; ?>"><?php echo $row['country_name']; ?></option>
        <?php } ?>
    </datalist>
    <?php mysqli_close($connection); ?>
</body>
</html> 