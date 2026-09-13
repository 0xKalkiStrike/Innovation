<?php
declare(strict_types=1);
require_once __DIR__ . '/../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /ecosystem-form.php'); exit; }

$conn = db();

$full_name=post_string('full_name'); $mobile=post_string('mobile'); $email=post_string('email');
$registering_as=post_array('registering_as'); $city=post_string('city'); $vidhan_sabha=post_string('vidhan_sabha');
$ward_number=post_string('ward_number'); $area_locality=post_string('area_locality'); $google_maps_location=post_string('google_maps_location');
$organisation_name=post_string('organisation_name'); $designation_role=post_string('designation_role'); $website_social_link=post_string('website_social_link');
$expertise=post_array('expertise'); $support_you_can_provide=post_array('support_you_can_provide'); $support_description=post_string('support_description');
$innovation_startup_name=post_string('innovation_startup_name'); $problem_being_addressed=post_string('problem_being_addressed');
$innovation_solution=post_string('innovation_solution'); $current_stage=post_string('current_stage'); $ipr_status=post_array('ipr_status'); $project_demo_link=post_string('project_demo_link');
$investment_type=post_array('investment_type'); $startup_stage_interest=post_array('startup_stage_interest'); $preferred_sector=post_array('preferred_sector'); $investment_funding_range=post_string('investment_funding_range');
$mentor_expertise=post_string('mentor_expertise'); $mentor_support_offered=post_array('mentor_support_offered'); $mentor_availability=post_string('mentor_availability');
$institution_type=post_string('institution_type'); $facilities_capabilities=post_array('facilities_capabilities'); $number_of_startups_projects_iprs=post_string('number_of_startups_projects_iprs'); $institution_ecosystem_support=post_string('institution_ecosystem_support');
$support_type=post_array('support_type'); $support_details=post_string('support_details');
$individual_contribution=post_array('individual_contribution'); $individual_contribution_details=post_string('individual_contribution_details');
$consent=isset($_POST['consent'])?1:0; $additional_information=post_string('additional_information');

if(!$full_name || !preg_match('/^\d{10}$/',$mobile) || !filter_var($email,FILTER_VALIDATE_EMAIL) ||
   !$registering_as || !$city || !$vidhan_sabha || !$ward_number || !$area_locality || !$designation_role ||
   !$expertise || !$support_you_can_provide || !$consent){
    http_response_code(422); exit('Please complete all required fields correctly.');
}

$sql="INSERT INTO ecosystem_registrations
(full_name,mobile,email,registering_as,city,vidhan_sabha,ward_number,area_locality,google_maps_location,organisation_name,designation_role,website_social_link,expertise,support_you_can_provide,support_description,innovation_startup_name,problem_being_addressed,innovation_solution,current_stage,ipr_status,project_demo_link,investment_type,startup_stage_interest,preferred_sector,investment_funding_range,mentor_expertise,mentor_support_offered,mentor_availability,institution_type,facilities_capabilities,number_of_startups_projects_iprs,institution_ecosystem_support,support_type,support_details,individual_contribution,individual_contribution_details,consent,additional_information)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt=$conn->prepare($sql);
$stmt->bind_param(
"sssssssssssssssssssssssssssssssssssssi",
$full_name,$mobile,$email,$registering_as,$city,$vidhan_sabha,$ward_number,$area_locality,$google_maps_location,$organisation_name,$designation_role,$website_social_link,$expertise,$support_you_can_provide,$support_description,$innovation_startup_name,$problem_being_addressed,$innovation_solution,$current_stage,$ipr_status,$project_demo_link,$investment_type,$startup_stage_interest,$preferred_sector,$investment_funding_range,$mentor_expertise,$mentor_support_offered,$mentor_availability,$institution_type,$facilities_capabilities,$number_of_startups_projects_iprs,$institution_ecosystem_support,$support_type,$support_details,$individual_contribution,$individual_contribution_details,$consent,$additional_information
);
$stmt->execute();
$id=$stmt->insert_id;
$stmt->close();$conn->close();

header('Location: /success.php?id='.$id.'&type=ecosystem'); exit;
