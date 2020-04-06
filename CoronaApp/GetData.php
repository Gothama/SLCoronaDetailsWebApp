<?php
 

//function getlocalCasesTotal(){
    $api_url = 'https://hpb.health.gov.lk/api/get-current-statistical';
 
// Read JSON file
$json_data = file_get_contents($api_url);
 
// Decode JSON data into PHP array
$user_data1 = json_decode($json_data,true);
//$k = array( $user_data1->data);
$localCasesTotal = $user_data1['data']['local_total_cases'];
$localDeaths = $user_data1['data']['local_deaths'];
$local_recovered = $user_data1['data']['local_recovered'];
$local_total_number_of_individuals_in_hospitals = $user_data1['data']['local_total_number_of_individuals_in_hospitals'];
$update_date_time = $user_data1['data']['update_date_time'];
$local_total_number_of_individuals_in_hospitals = $user_data1['data']['local_total_number_of_individuals_in_hospitals'];
$global_total_cases = $user_data1['data']['global_total_cases'];
$global_deaths = $user_data1['data']['global_deaths'];
$global_recovered = $user_data1['data']['global_recovered'];



//echo "<br>";
//$k1 = $user_data1['data']['hospital_data'];
/*for($y  = 0 ; $y<10;$y++){
echo $user_data1['data']['hospital_data'][$y]['hospital']["name"]."<br>";
}*/
?>