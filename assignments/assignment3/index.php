<?php
$output = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'processNames.php';
    $output = addClearNames();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment 3</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h2>Name Processor</h2>

<form method="post" action="index.php">

    <div class="mb-3">
        <label class="form-label">Enter First and Last Name</label>
        <input type="text" name="fullname" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" name="addName" class="btn btn-primary">
            Add Name
        </button>

        <button type="submit" name="clearName" class="btn btn-danger">
            Clear Names
        </button>
    </div>

    <div class="mb-3">
        <textarea style="height: 500px;" class="form-control"
        id="namelist" name="namelist"><?php echo $output ?></textarea>
    </div>

</form>

</body>
</html>