<?php

function addClearNames(){

    // if clear button is clicked
    if(isset($_POST['clearName'])){
        return "";
    }

    // getting current textarea content
    $currentList = $_POST['namelist'];

    // converting textarea string to an array
    if($currentList != ""){
        $namesArray = explode("\n", $currentList);
    } else {
        $namesArray = array();
    }

    // getting new name entered 
    $fullName = $_POST['fullname'];

    // split first and last name
    $nameParts = explode(" ", $fullName);

    $firstName = ucfirst(strtolower($nameParts[0]));
    $lastName = ucfirst(strtolower($nameParts[1]));

    // format: lastname, firstname
    $formattedName = $lastName . ", " . $firstName;

    // add to array
    array_push($namesArray, $formattedName);

    // sorting alphabetically 
    sort($namesArray);

    // converting array back to string
    $output = implode("\n", $namesArray);

    return $output;
}

?>