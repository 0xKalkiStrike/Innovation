<?php
declare(strict_types=1);
require_once __DIR__ . '/../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /institution-form.php'); exit; }

$conn = db();

$institution_name = post_string('institution_name');
$institution_type = post_string('institution_type');
$institution_address = post_string('institution_address');
$ward_area = post_string('ward_area');
$total_student_strength = (int)post_string('total_student_strength');
$coordinator_name = post_string('coordinator_name');
$designation_department = post_string('designation_department');
$mobile = post_string('mobile');
$email = post_string('email');
$awareness_methods = post_array('awareness_methods');
$students_reached = (int)post_string('students_reached');
$challenge_themes = post_array('challenge_themes');
$entry_types = post_array('entry_types');
$total_entries = (int)post_string('total_entries');
$shortlisted_entries = (int)post_string('shortlisted_entries');
$shortlisted_details = post_string('shortlisted_details');
$activity_report = post_string('activity_report');
$activity_photos_link = post_string('activity_photos_link');
$activity_video_link = post_string('activity_video_link');
$maps_link = post_string('maps_link');
$government_supported = post_string('government_supported');
$government_count = ($government_supported === 'Yes') ? (int)post_string('government_count') : null;
$government_project_details = post_string('government_project_details');
$government_reel_folder = post_string('government_reel_folder');
$patent_count = (int)post_string('patent_count');
$design_count = (int)post_string('design_count');
$copyright_count = (int)post_string('copyright_count');
$trademark_count = (int)post_string('trademark_count');
$startup_data = post_string('startup_data');
$innovation_research_data = post_string('innovation_research_data');
$ecosystem_support = post_array('ecosystem_support');
$specific_facility = post_string('specific_facility');
$confirmation = isset($_POST['confirmation']) ? 1 : 0;
$authorized_coordinator = post_string('authorized_coordinator');
$confirmation_date = post_string('confirmation_date');

if (!$institution_name || !$institution_type || !$institution_address || !$ward_area ||
    !$coordinator_name || !$designation_department || !preg_match('/^\d{10}$/', $mobile) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) || !$awareness_methods || !$challenge_themes ||
    !$entry_types || !$shortlisted_details || !$activity_report || !$activity_photos_link ||
    !$ecosystem_support || !$confirmation || !$authorized_coordinator || !$confirmation_date) {
    http_response_code(422); exit('Please complete all required fields correctly.');
}

$sql = "INSERT INTO institution_registrations
(institution_name,institution_type,institution_address,ward_area,total_student_strength,coordinator_name,designation_department,mobile,email,awareness_methods,students_reached,challenge_themes,entry_types,total_entries,shortlisted_entries,shortlisted_details,activity_report,activity_photos_link,activity_video_link,maps_link,government_supported,government_count,government_project_details,government_reel_folder,patent_count,design_count,copyright_count,trademark_count,startup_data,innovation_research_data,ecosystem_support,specific_facility,confirmation,authorized_coordinator,confirmation_date)
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
"ssssssssssssssssssssssssssssssssssi",
$institution_name,$institution_type,$institution_address,$ward_area,$total_student_strength,$coordinator_name,$designation_department,$mobile,$email,$awareness_methods,$students_reached,$challenge_themes,$entry_types,$total_entries,$shortlisted_entries,$shortlisted_details,$activity_report,$activity_photos_link,$activity_video_link,$maps_link,$government_supported,$government_count,$government_project_details,$government_reel_folder,$patent_count,$design_count,$copyright_count,$trademark_count,$startup_data,$innovation_research_data,$ecosystem_support,$specific_facility,$confirmation,$authorized_coordinator,$confirmation_date
);
$stmt->execute();
$id = $stmt->insert_id;
$stmt->close(); $conn->close();

header('Location: /success.php?id=' . $id . '&type=institution');
exit;
