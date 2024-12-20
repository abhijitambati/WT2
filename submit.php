<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
}


echo "
<style>
  
    .output {
        background: rgb(51, 178, 217);
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.4);
        margin: 50px auto;
        width: 80%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .output-table td {
        padding: 8px 10px;
        font-size: 16px;
        vertical-align: middle;
    }
    .output-table input {
        width: 400px;
        padding: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #f9f9f9;
    }
    .label-cell {
        margin-left: 20px;
        font-weight: bold;
    }
    h1{
        text-decoration:none;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.15); 
        text-align:center;
    }
</style>
<div class='output'>
<h1>REGISTRATION SUCCESFULL</h1>
<table class='output-table' align='center'>
    <tr>
        <td class='label-cell'>name:</td>
        <td><input type='text' value='$name' readonly></td>
    </tr>
    <tr>
        <td class='label-cell'>phone:</td>
        <td><input type='text' value='$phone' readonly></td>
    </tr>
    <tr>
        <td class='label-cell'>Address:</td>
        <td><input type='text' value='$address' readonly></td>
    </tr>
    <tr>
        <td class='label-cell'>Gender:</td>
        <td><input type='text' value='$gender' readonly></td>
    </tr>
    <tr>
        <td class='label-cell'>Country:</td>
        <td><input type='text' value='$country' readonly></td>
    </tr>
    
    
    
</table>
</div>
<br>
<br>
";
?>