<!doctype html>
<html lang="en"><head>
<meta charset="utf-8"><link rel="icon" href="/favicon.ico" sizes="any"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Education Institution Data & Participation Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Noto+Sans+Gujarati:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/style.css"></head><body>
<header class="hero"><div class="hero-inner">
<h1>Rashtriya Innovation Challenge 2026</h1>
<div class="gj">રાષ્ટ્રીય ઇનોવેશન ચેલેન્જ ૨૦૨૬ – વડોદરા શૈક્ષણિક સંસ્થા માહિતી અને ભાગીદારી ફોર્મ</div>
<p class="mt-3">This form is to be completed by one authorized Institutional Coordinator.</p>
<span class="badge-date">Last Date: 4 October 2026 / ૪ ઑક્ટોબર ૨૦૨૬</span>
</div></header>
<main class="wrap">
<form action="/api/submit-institution.php" method="POST" id="institutionForm" novalidate>

<div class="card-section"><div class="section-head"><h2>01 — Institution & Coordinator Details</h2><div class="gj text-muted">સંસ્થાની માહિતી અને સંકલન અધિકારીની વિગતો</div></div><div class="section-body">

<div class="q"><div class="q-title">1. Institution Name <span class="required">*</span></div><div class="hint gj">સંસ્થાનું નામ</div><input name="institution_name" class="form-control" required></div>
<div class="q"><div class="q-title">2. Institution Type <span class="required">*</span></div><div class="hint gj">સંસ્થાનો પ્રકાર</div><select name="institution_type" class="form-select" required><option value="">Select</option><option>School / શાળા</option><option>College / મહાવિદ્યાલય</option><option>University / યુનિવર્સિટી</option><option>Polytechnic / પોલિટેકનિક</option><option>ITI / આઈ.ટી.આઈ.</option><option>Research Institution / સંશોધન સંસ્થા</option><option>Incubation Centre / ઇન્ક્યુબેશન સેન્ટર</option><option>Other / અન્ય</option></select></div>
<div class="q"><div class="q-title">3. Institution Address <span class="required">*</span></div><div class="hint gj">સંસ્થાનું સરનામું</div><textarea name="institution_address" class="form-control" required></textarea></div>
<div class="q"><div class="q-title">4. Ward / Area <span class="required">*</span></div><div class="hint gj">વોર્ડ / વિસ્તાર</div><input name="ward_area" class="form-control" required></div>
<div class="q"><div class="q-title">5. Total Student Strength <span class="required">*</span></div><div class="hint gj">કુલ વિદ્યાર્થી સંખ્યા</div><input type="number" min="0" name="total_student_strength" class="form-control" required></div>
<div class="q"><div class="q-title">6. Institutional Coordinator Name <span class="required">*</span></div><div class="hint gj">સંસ્થાકીય સંકલન અધિકારીનું નામ</div><input name="coordinator_name" class="form-control" required></div>
<div class="q"><div class="q-title">7. Designation & Department <span class="required">*</span></div><div class="hint gj">હોદ્દો અને વિભાગ</div><input name="designation_department" class="form-control" required></div>
<div class="q"><div class="q-title">8. Mobile Number <span class="required">*</span></div><div class="hint gj">મોબાઇલ નંબર</div><input type="tel" name="mobile" maxlength="10" pattern="[0-9]{10}" class="form-control" required></div>
<div class="q"><div class="q-title">9. Email ID <span class="required">*</span></div><div class="hint gj">ઇ-મેઇલ</div><input type="email" name="email" class="form-control" required></div>

</div></div>

<div class="card-section"><div class="section-head"><h2>02 — Rashtriya Innovation Challenge Activities</h2><div class="gj text-muted">રાષ્ટ્રીય ઇનોવેશન ચેલેન્જ અંતર્ગત સંસ્થાની કામગીરી</div></div><div class="section-body">

<div class="q"><div class="q-title">10. How was the Challenge information shared with students? <span class="required">*</span></div><div class="hint gj">વિદ્યાર્થીઓ સુધી ચેલેન્જની માહિતી કેવી રીતે પહોંચાડવામાં આવી?</div>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="Classroom Awareness">Classroom Awareness / વર્ગખંડમાં માહિતી</label>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="Student Awareness Programme">Student Awareness Programme / વિદ્યાર્થી જાગૃતિ કાર્યક્રમ</label>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="Innovation Orientation">Innovation Orientation / નવીનતા માર્ગદર્શન સત્ર</label>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="Circular Notice Poster">Circular / Notice / Poster / પરિપત્ર / નોટિસ / પોસ્ટર</label>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="WhatsApp Social Media">WhatsApp / Social Media / વોટ્સએપ / સોશિયલ મીડિયા</label>
<label class="opt"><input type="checkbox" name="awareness_methods[]" value="Other">Other / અન્ય</label></div>

<div class="q"><div class="q-title">11. Approximate number of students reached <span class="required">*</span></div><div class="hint gj">આશરે કેટલા વિદ્યાર્થીઓ સુધી માહિતી પહોંચાડવામાં આવી?</div><input type="number" min="0" name="students_reached" class="form-control" required></div>

<div class="q"><div class="q-title">12. Which Challenge Themes were taken up? <span class="required">*</span></div><div class="hint gj">કયા ચેલેન્જ વિષયો પર પ્રવૃત્તિ કરવામાં આવી?</div>
<label class="opt"><input type="checkbox" name="challenge_themes[]" value="Smart Traffic Management System">Smart Traffic Management System / સ્માર્ટ ટ્રાફિક વ્યવસ્થાપન પ્રણાલી</label>
<label class="opt"><input type="checkbox" name="challenge_themes[]" value="Pre-Accident Prevention & Alert System on Road">Pre-Accident Prevention & Alert System on Road / માર્ગ પર અકસ્માત પૂર્વ નિવારણ અને ચેતવણી પ્રણાલી</label>
<label class="opt"><input type="checkbox" name="challenge_themes[]" value="Environment & Emergency Alert System">Environment & Emergency Alert System / પર્યાવરણ અને આપત્તિકાલીન ચેતવણી પ્રણાલી</label>
<label class="opt"><input type="checkbox" name="challenge_themes[]" value="Smart Agriculture Innovation">Smart Agriculture Innovation / સ્માર્ટ કૃષિ નવીનતા</label></div>

<div class="q"><div class="q-title">13. What types of entries/activities were conducted? <span class="required">*</span></div><div class="hint gj">કયા પ્રકારની પ્રવૃત્તિ / રજૂઆત કરવામાં આવી?</div>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Idea / Concept Presentation">Idea / Concept Presentation — વિચાર / સંકલ્પના રજૂઆત</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Poster">Poster — પોસ્ટર</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="PPT Presentation">PPT Presentation — પી.પી.ટી. રજૂઆત</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Working Model / Demonstration">Working Model / Demonstration — કાર્યરત નમૂના-મોડેલ / નિદર્શન</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Prototype">Prototype — પ્રોટોટાઇપ</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Video / Reel">Video / Reel — વિડિયો / રીલ</label>
<label class="opt"><input type="checkbox" name="entry_types[]" value="Innovation Exhibition">Innovation Exhibition — નવીનતા પ્રદર્શન</label></div>

<div class="row g-3">
<div class="col-md-6"><div class="q"><div class="q-title">14. Total number of entries received <span class="required">*</span></div><input type="number" min="0" name="total_entries" class="form-control" required></div></div>
<div class="col-md-6"><div class="q"><div class="q-title">15. Number of shortlisted entries <span class="required">*</span></div><input type="number" min="0" name="shortlisted_entries" class="form-control" required></div></div>
</div>
<div class="q"><div class="q-title">16. Shortlisted Entry Details <span class="required">*</span></div><div class="hint">Format: Project Name – Student Name – Theme – Entry Type – Current Stage</div><textarea name="shortlisted_details" class="form-control" required></textarea></div>
<div class="q"><div class="q-title">17. Brief Activity Report <span class="required">*</span></div><div class="hint">Include: Date, Venue, Number of Participants, Main Activity & Outcome</div><textarea name="activity_report" class="form-control" required></textarea></div>
<div class="q"><div class="q-title">18. Activity / Event Photographs <span class="required">*</span></div><div class="hint">Upload your photos to Drive and paste the folder/file link.</div><input type="url" name="activity_photos_link" class="form-control" required></div>
<div class="q"><div class="q-title">19. Activity Video / Media Link</div><input type="url" name="activity_video_link" class="form-control"></div>
<div class="q"><div class="q-title">20. Google Maps Location Link</div><input type="url" name="maps_link" class="form-control"></div>

</div></div>

<div class="card-section"><div class="section-head"><h2>03 — Government Supported Student Innovation Reels</h2><div class="gj text-muted">સરકારી સહાય મેળવનાર વિદ્યાર્થી / પ્રોજેક્ટની રીલ</div></div><div class="section-body">

<div class="q"><div class="q-title">21. Does your institution have students/projects that received Government Grant or Support? <span class="required">*</span></div>
<label class="opt"><input type="radio" name="government_supported" value="Yes" required> Yes / હા</label>
<label class="opt"><input type="radio" name="government_supported" value="No" required> No / ના</label></div>

<div id="govFields" class="conditional">
<div class="q"><div class="q-title">22. Number of Government-supported Students/Projects</div><input type="number" min="0" name="government_count" class="form-control"></div>
<div class="q"><div class="q-title">23. Details of selected students/projects for Reel</div><div class="hint">Student Name – Institution – Project – Scheme/Support – Amount – Current Stage</div><textarea name="government_project_details" class="form-control"></textarea></div>
<div class="q"><div class="q-title">24. Reel / Video Folder Link</div><input type="url" name="government_reel_folder" class="form-control"></div>
</div>
</div></div>

<div class="card-section"><div class="section-head"><h2>04 — IPR & Startup Data</h2><div class="gj text-muted">બૌદ્ધિક સંપદા અને સ્ટાર્ટઅપ માહિતી</div></div><div class="section-body">

<div class="q"><div class="q-title">25. IPR Data <span class="required">*</span></div><div class="row g-3">
<div class="col-md-3"><label>Patent</label><input type="number" min="0" name="patent_count" class="form-control" required></div>
<div class="col-md-3"><label>Design</label><input type="number" min="0" name="design_count" class="form-control" required></div>
<div class="col-md-3"><label>Copyright</label><input type="number" min="0" name="copyright_count" class="form-control" required></div>
<div class="col-md-3"><label>Trademark</label><input type="number" min="0" name="trademark_count" class="form-control" required></div>
</div></div>
<div class="q"><div class="q-title">26. Startup Data</div><div class="hint">Total Startups – Incubated Startups – Active/Developing Startups</div><textarea name="startup_data" class="form-control"></textarea></div>
<div class="q"><div class="q-title">27. Other Important Innovation / Research Data</div><textarea name="innovation_research_data" class="form-control"></textarea></div>

</div></div>

<div class="card-section"><div class="section-head"><h2>05 — Contribution to Vadodara Innovation Ecosystem</h2><div class="gj text-muted">વડોદરા ઇનોવેશન ઇકોસિસ્ટમમાં આપનું યોગદાન</div></div><div class="section-body">

<div class="q"><div class="q-title">28. How can your institution support the Vadodara Innovation Ecosystem? <span class="required">*</span></div>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Student Innovator Identification">Student Innovator Identification / વિદ્યાર્થી નવીન વિચારકોની ઓળખ</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Mentor Support">Mentor Support / માર્ગદર્શન</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Technical Expertise">Technical Expertise / તકનીકી નિષ્ણાત સહાય</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Lab / Prototype Facility">Lab / Prototype Facility / પ્રયોગશાળા / પ્રોટોટાઇપ સુવિધા</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Incubation Support">Incubation Support / ઇન્ક્યુબેશન સહાય</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="IPR Guidance">IPR Guidance / બૌદ્ધિક સંપદા માર્ગદર્શન</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Startup Support">Startup Support / સ્ટાર્ટઅપ સહાય</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Industry Connect">Industry Connect / ઉદ્યોગ જોડાણ</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Investor Connect">Investor Connect / રોકાણકાર જોડાણ</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="CSR Support">CSR Support / સીએસઆર સહાય</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Skill / Training">Skill / Training / કૌશલ્ય તાલીમ</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Expert / Speaker Session">Expert / Speaker Session / નિષ્ણાત સત્ર</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Innovation Exhibition">Innovation Exhibition / નવીનતા પ્રદર્શન</label>
<label class="opt"><input type="checkbox" name="ecosystem_support[]" value="Other">Other / અન્ય</label></div>

<div class="q"><div class="q-title">29. Specific Facility / Expertise your Institution can offer</div><textarea name="specific_facility" class="form-control"></textarea></div>

</div></div>

<div class="card-section"><div class="section-head"><h2>06 — Final Confirmation</h2><div class="gj text-muted">અંતિમ પુષ્ટિ</div></div><div class="section-body">

<div class="q"><div class="q-title">30. Institutional Confirmation <span class="required">*</span></div>
<label class="opt"><input type="checkbox" name="confirmation" value="1" required>
I confirm that the information provided in this form has been verified by the institution’s authorized coordinator and is submitted for the Rashtriya Innovation Challenge and Vadodara Innovation Ecosystem.<br>
<span class="gj">હું ખાતરી આપું છું કે આ ફોર્મમાં આપવામાં આવેલી માહિતી સંસ્થાના અધિકૃત સંકલન અધિકારી દ્વારા ચકાસવામાં આવી છે અને રાષ્ટ્રીય ઇનોવેશન ચેલેન્જ તથા વડોદરા ઇનોવેશન ઇકોસિસ્ટમ માટે રજૂ કરવામાં આવી છે.</span>
</label></div>

<div class="q"><div class="q-title">31. Name of Authorized Coordinator <span class="required">*</span></div><input name="authorized_coordinator" class="form-control" required></div>
<div class="q"><div class="q-title">32. Date <span class="required">*</span></div><input type="date" name="confirmation_date" class="form-control" required></div>

</div></div>

<div class="text-center mb-5"><button class="btn-main" type="submit"><i class="bi bi-send me-2"></i>Submit Registration</button></div>
</form>
</main>
<script src="/assets/app.js"></script>
<script>
document.querySelectorAll('input[name="government_supported"]').forEach(r=>r.addEventListener('change',()=>{
  document.getElementById('govFields').classList.toggle('show',document.querySelector('input[name="government_supported"]:checked')?.value==='Yes');
}));
</script>
</body></html>