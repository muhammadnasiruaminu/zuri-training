<?php

if(isset($_POST['saveData'])){
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

print_r($_POST);
}
$file_open = fopen("userdata.csv", "a");
$no_rows = count(file("userdata.csv"));
    if($no_rows > 1)
    {
    $no_rows = ($no_rows - 1) + 1;
    }
    $form_data = array(
        'sr_no'  => $no_rows,
        'name'  => $name,
        'email'  => $email,
        'dob' => $dob,
        'gender' => $gender,
        'country' => $country
    );

    fputcsv($file_open, $form_data);
    $name = '';
    $email = '';
    $dob = '';
    $gender = '';
    $country = '';
