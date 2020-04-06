<?php
	function getHospitalData(){
$api_url = 'https://hpb.health.gov.lk/api/get-current-statistical';
 
// Read JSON file
$json_data = file_get_contents($api_url);
 
// Decode JSON data into PHP array
$user_data1 = json_decode($json_data,true);
	echo '<table style="width: 1090">';
	
	for($y  = 0 ; $y<30;$y++){

		echo '<tr>
                <td>
				<table style="width: 500px; height: 197px; font-size:18pt;border: 5px solid blue;border-radius: 25px;" cellpadding="10">
				<tr style="background-color:blue">
                    <th colspan="2" align="center" style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['hospital']["name"].'</th>
                </tr>
				<tr >
                    <td style="width: 383px; height: 39px">Sri Lankans treated /observed</td>
                    <td style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['cumulative_local'].'</td>
                </tr>
                <tr >
                    <td style="width: 383px; height: 39px">Foreign treated /observed</td>
                    <td style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['cumulative_foreign'].'</td>
                </tr>
                <tr >
                    <td style="width: 383px">treatment_local</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['treatment_local'].'</td>
                </tr>
                <tr >
                    <td style="width: 383px">treatment_foreign</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['treatment_foreign'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">cumulative_total</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['cumulative_total'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">treatment_total</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y++]['treatment_total'].'</td>
                </tr>
            </table>
                </td>
				<td><table style="width: 500px; height: 197px;font-size:18pt;border: 5px solid red;border-radius: 25px;" cellpadding="10">
				<tr style="background-color:red">
                    <th colspan="2" align="center" style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['hospital']["name"].'</th>
                </tr>
				<tr>
                    <td style="width: 383px; height: 39px">Sri Lankans treated /observed</td>
                    <td style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['cumulative_local'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px; height: 39px">Foreign treated /observed</td>
                    <td style="width: 78px; height: 39px">'.$user_data1['data']['hospital_data'][$y]['cumulative_foreign'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">treatment_local</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['treatment_local'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">treatment_foreign</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['treatment_foreign'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">cumulative_total</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['cumulative_total'].'</td>
                </tr>
                <tr>
                    <td style="width: 383px">treatment_total</td>
                    <td style="width: 78px">'.$user_data1['data']['hospital_data'][$y]['treatment_total'].'</td>
                </tr>
            </table></td>
			</tr><tr></tr>';
	}
	
	echo '</table>';
	}
?>