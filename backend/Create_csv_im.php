<?php
// include mysql database configuration file
include('connections.php');
 
if (isset($_POST['submit']))
{
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['fileuplode']['name']) && in_array($_FILES['fileuplode']['type'], $fileMimes))
    {
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['fileuplode']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            {
                // Get row data
                $img = $getData[1];
                $alumni_id = $getData[2];
                $alumni_gd = $getData[3];
                $alumni_name = $getData[4];
                $alumni_surname = $getData[5];
                $section = $getData[6];
                $education_faculty = $getData[7];
                $education_branch = $getData[8];
                $house_no = $getData[9];
                $village_no = $getData[10];
                $sub_district = $getData[11];
                $district = $getData[12];
                $province = $getData[13];
                $postal_code = $getData[14];
                $alumni_tel = $getData[15];
                $alumni_mail = $getData[16];
                $alumni_year = $getData[17];
                $alumni_no = $getData[18];
                $job = $getData[19];
                $work = $getData[20];
                $work_position = $getData[21];

                $work_workplace = $getData[22];
                $address_numbernw = $getData[23];
                $moo = $getData[24];
                $subdistrict = $getData[25];
                $district_w = $getData[26];
                $province_w = $getData[27];
                $postal_codew = $getData[28];


                $upskill = $getData[29];
                $reskill = $getData[30];
                $income = $getData[31];
                $alumni_pass = $getData[32];

                // If user already exists in the database with the same email
                $query = "SELECT no_id FROM tbl_appeople WHERE no_id = '" . $getData[0] . "'";
 
                $check = mysqli_query($con, $query);

                
 
                if ($check->num_rows > 0)
                {
                    $query = "UPDATE alumni_table SET
                    `img`='$img',
            `alumni_id`='$alumni_id',
            `alumni_gd`='$alumni_gd',
            `alumni_name`='$alumni_name',
            `alumni_surname`='$alumni_surname',
            `section`='$section',
            `education_faculty`='$education_faculty',
            `education_branch`='$education_branch',
            `house_no`='$house_no',
            `village_no`='$village_no',
            `sub_district`='$sub_district',
            `district`='$district',
            `province`='$province',
            `postal_code`='$postal_code',
            `alumni_tel`='$alumni_tel',
            `alumni_mail`='$alumni_mail',
            `alumni_year`='$alumni_year',
            `alumni_no`='$alumni_no',
            `job`='$job',
            `work`='$work',
            `work_position`='$work_position',
            `work_workplace`='$work_workplace',

            address_numbernw='$address_numbernw',
            moo='$moo',
            subdistrict='$subdistrict',
            district_w='$district_w',
            province_w='$province_w',
            postal_codew='$postal_codew',

            `upskill`='$upskill',
            `reskill`='$reskill',
            `income`='$income',
            `alumni_pass`='$alumni_pass' WHERE 1";
                    mysqli_query($con,$query);
                }
                else
                {

                     mysqli_query($con, "INSERT INTO `tbl_appeople`(
                        `img`,
                        `alumni_id`,
                        `alumni_gd`,
                        `alumni_name`,
                        `alumni_surname`,
                        `section`,
                        `education_faculty`,
                        `education_branch`,
                        `house_no`,
                        `village_no`,
                        `sub_district`,
                        `district`,
                        `province`,
                        `postal_code`,
                        `alumni_tel`,
                        `alumni_mail`,
                        `alumni_year`,
                        `alumni_no`,
                        `job`,
                        `work`,
                        `work_position`,
                        `work_workplace`,

                        `address_numbernw`,
                        `moo`,
                        `subdistrict`,
                        `district_w`,
                        `province_w`,
                        `postal_codew`,

                        `upskill`,
                        `reskill`,
                        `income`,
                        `alumni_pass`) 
                        VALUES (
                            '" . $img . "',

                            '" . $alumni_id . "',
                        '" . $alumni_gd . "',
                        '" . $alumni_name . "',
                        '" . $alumni_surname . "',
                        '" . $section . "',
                        '" . $education_faculty . "',
                        '" . $education_branch . "',
                        '" . $house_no . "',
                        '" . $village_no . "',
                        '" . $sub_district . "',
                        '" . $district . "',
                        '" . $province . "',
                        '" . $postal_code . "',
                        '" . $alumni_tel . "',
                        '" . $alumni_mail . "',
                        '" . $alumni_year . "',
                        '" . $alumni_no . "',
                        '" . $job . "',
                        '" . $work . "',
                        '" . $work_position . "',
                        '" . $work_workplace . "',

                        '" . $address_numbernw . "',
                        '" . $moo . "',
                        '" . $subdistrict . "',
                        '" . $district_w . "',
                        '" . $province_w . "',
                        '" . $postal_codew . "',

                        '" . $upskill . "',
                        '" . $reskill . "',
                        '" . $income . "',
                        '" . $alumni_pass . "')");
 
                }
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            header("Location: index.php");
         
    }
    else
    {
        echo "Please select valid file";
        
    }
}
