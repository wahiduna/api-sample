<?php
$data = array(
    array(
        "name" => "Sangat Kurus",
        "description" => "BMI < 15"
    ),
    array(
        "name" => "Berat Badan Kurang",
        "description" => "BMI antara 15 - 19.8"        
    ),
    array(
        "name" => "Berat Badan Normal",
        "description" => "BMI antara 19.9 - 24.8"     
    ),
    array(
        "name" => "Kelebihan Berat Badan",
        "description" => "BMI antara 24.9 - 29.8"     
    ),
    array(
        "name" => "Obesitas Kelas I",
        "description" => "BMI antara 29.9 - 34.8"     
    ),
    array(
        "name" => "Obesitas Kelas II",
        "description" => "BMI antara 34.9 - 39.8"     
    ),
    array(
        "name" => "Obesitas Kelas III",
        "description" => "BMI lebih dari 39.9"     
    )    
);

echo json_encode([
    "results" => $data
]);
?>