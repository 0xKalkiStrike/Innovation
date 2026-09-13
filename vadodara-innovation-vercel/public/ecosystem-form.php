<!doctype html>
<html lang="en"><head>
<meta charset="utf-8"><link rel="icon" href="/favicon.ico" sizes="any"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Vadodara Innovation & Support Ecosystem Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Noto+Sans+Gujarati:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/style.css"></head><body>
<header class="hero"><div class="hero-inner">
<h1>Rashtriya Innovation Challenge 2026</h1>
<div class="gj">વડોદરા ઇનોવેશન અને સહયોગ ઇકોસિસ્ટમ – સામાન્ય નોંધણી ફોર્મ</div>
<p class="mt-3">Common registration for innovators, startups, mentors, investors, institutions, industry and supporters.</p>
<span class="badge-date">Last Date: 4 October 2026 / ૪ ઑક્ટોબર ૨૦૨૬</span>
</div></header>
<main class="wrap">
<form action="/api/submit-ecosystem.php" method="POST" id="ecosystemForm" novalidate>

<div class="card-section"><div class="section-head"><h2>PART 1 — Basic Information</h2><div class="gj text-muted">ભાગ ૧ – મૂળભૂત માહિતી</div></div><div class="section-body">
<div class="q"><div class="q-title">1. Full Name <span class="required">*</span></div><div class="hint gj">સંપૂર્ણ નામ</div><input name="full_name" class="form-control" required></div>
<div class="q"><div class="q-title">2. Mobile Number <span class="required">*</span></div><div class="hint gj">મોબાઇલ નંબર</div><input type="tel" name="mobile" maxlength="10" pattern="[0-9]{10}" class="form-control" required></div>
<div class="q"><div class="q-title">3. Email ID <span class="required">*</span></div><div class="hint gj">ઇ-મેઇલ</div><input type="email" name="email" class="form-control" required></div>
<div class="q"><div class="q-title">4. You are registering as <span class="required">*</span></div><div class="hint gj">આપ કઈ ભૂમિકામાં નોંધણી કરી રહ્યા છો?</div>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Innovator">Innovator / નવીન વિચારક</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Startup">Startup / સ્ટાર્ટઅપ</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Mentor">Mentor / માર્ગદર્શક</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Skill Expert">Skill Expert / કૌશલ્ય નિષ્ણાત</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Investor">Investor / રોકાણકાર</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Venture Capital">Venture Capital / વેન્ચર કેપિટલ</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Incubation Centre">Incubation Centre / ઇન્ક્યુબેશન સેન્ટર</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Educational Institution">Educational Institution / શૈક્ષણિક સંસ્થા</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Industry">Industry / ઉદ્યોગ</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="CSR Organisation">CSR Organisation / CSR સંસ્થા</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="NGO">NGO / બિનસરકારી સંસ્થા</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Individual Helping Hand">Individual Helping Hand / વ્યક્તિગત સહયોગી</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Innovation Promoter">Innovation Promoter / નવીનતા પ્રોત્સાહક</label>
<label class="opt"><input type="checkbox" name="registering_as[]" value="Other">Other / અન્ય</label>
<div class="small text-muted mt-2">Selected roles: <strong id="roleCount">0</strong></div></div>
</div></div>

<div class="card-section"><div class="section-head"><h2>PART 2 — Location Details</h2><div class="gj text-muted">ભાગ ૨ – સ્થળની વિગતો</div></div><div class="section-body">
<div class="q"><div class="q-title">5. City <span class="required">*</span></div><select name="city" class="form-select" required><option value="">Select City</option><option>Vadodara / વડોદરા</option><option>Other / અન્ય</option></select></div>
<div class="q"><div class="q-title">6. Vidhan Sabha Constituency <span class="required">*</span></div><select name="vidhan_sabha" class="form-select" required><option value="">Select Constituency</option><option>Savli / સાવલી</option><option>Vaghodia / વાઘોડિયા</option><option>Vadodara City / વડોદરા શહેર</option><option>Other / અન્ય</option></select></div>
<div class="q"><div class="q-title">7. Ward Number <span class="required">*</span></div><select name="ward_number" class="form-select" required><option value="">Select Ward</option><option>Ward No. 1</option><option>Ward No. 2</option><option>Ward No. 3</option><option>Ward No. 4</option><option>Ward No. 5</option><option>Ward No. 6</option><option>Ward No. 7</option><option>Ward No. 8</option><option>Ward No. 9</option><option>Ward No. 10</option><option>Ward No. 11</option><option>Ward No. 12</option><option>Ward No. 13</option><option>Ward No. 14</option><option>Other</option></select></div>
<div class="q"><div class="q-title">8. Area / Locality <span class="required">*</span></div><input name="area_locality" class="form-control" required></div>
<div class="q"><div class="q-title">9. Google Maps Location</div><input type="url" name="google_maps_location" class="form-control"></div>
</div></div>

<div class="card-section"><div class="section-head"><h2>PART 3 — Organisation / Professional Details</h2><div class="gj text-muted">ભાગ ૩ – સંસ્થા / વ્યવસાયિક વિગતો</div></div><div class="section-body">
<div class="q"><div class="q-title">10. Organisation / Institution Name</div><input name="organisation_name" class="form-control"></div>
<div class="q"><div class="q-title">11. Designation / Role <span class="required">*</span></div><input name="designation_role" class="form-control" required></div>
<div class="q"><div class="q-title">12. Website / LinkedIn / Social Media Link</div><input type="url" name="website_social_link" class="form-control"></div>
</div></div>

<div class="card-section"><div class="section-head"><h2>PART 4 — Expertise / Area of Interest</h2><div class="gj text-muted">ભાગ ૪ – નિષ્ણાતતા / રસનું ક્ષેત્ર</div></div><div class="section-body">
<div class="q"><div class="q-title">13. Your Area of Expertise / Interest <span class="required">*</span></div>
<label class="opt"><input type="checkbox" name="expertise[]" value="Technology">Technology / ટેક્નોલોજી</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Engineering">Engineering / એન્જિનિયરિંગ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Electronics">Electronics / ઇલેક્ટ્રોનિક્સ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Software">Software / સોફ્ટવેર</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Artificial Intelligence">Artificial Intelligence / આર્ટિફિશિયલ ઇન્ટેલિજન્સ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Robotics">Robotics / રોબોટિક્સ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="IoT">IoT / આઈઓટી</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="EV / Electric Mobility">EV / Electric Mobility</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Space Technology">Space Technology</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Defence Technology">Defence Technology</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Healthcare">Healthcare / હેલ્થકેર</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Agriculture">Agriculture / કૃષિ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Environment / Energy">Environment / Energy</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Manufacturing">Manufacturing / ઉત્પાદન</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="IPR / Patent / Design">IPR / Patent / Design</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Business / Marketing">Business / Marketing</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Finance / Funding">Finance / Funding</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Education">Education / શિક્ષણ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Skill Development">Skill Development / કૌશલ્ય વિકાસ</label>
<label class="opt"><input type="checkbox" name="expertise[]" value="Other">Other / અન્ય</label>
</div></div>

<div class="card-section"><div class="section-head"><h2>PART 5 — Support You Can Provide</h2><div class="gj text-muted">ભાગ ૫ – આપ કયો સહયોગ આપી શકો?</div></div><div class="section-body">
<div class="q"><div class="q-title">14. I can support the Innovation Ecosystem through <span class="required">*</span></div>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Innovation Mentoring">Innovation Mentoring</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Startup Mentoring">Startup Mentoring</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Technical Expertise">Technical Expertise</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Skill Training">Skill Training</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Prototype Development">Prototype Development</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Lab / Testing Facility">Lab / Testing Facility</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="IPR / Patent / Design Support">IPR / Patent / Design Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Incubation Support">Incubation Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Investment">Investment</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Funding">Funding</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Venture Capital">Venture Capital</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Industry Connect">Industry Connect</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Market Connect">Market Connect</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Manufacturing Support">Manufacturing Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="CSR Support">CSR Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Student Support">Student Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Research Collaboration">Research Collaboration</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Event / Exhibition Support">Event / Exhibition Support</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Promotion & Publicity">Promotion & Publicity</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Networking">Networking</label>
<label class="opt"><input type="checkbox" name="support_you_can_provide[]" value="Other">Other / અન્ય</label>
</div>
<div class="q"><div class="q-title">15. Briefly describe your support</div><textarea name="support_description" class="form-control"></textarea></div>
</div></div>

<div class="card-section conditional" id="innovatorStartupSection"><div class="section-head"><h2>PART 6 — Innovator / Startup Details</h2><div class="gj text-muted">ભાગ ૬ – નવીન વિચારક / સ્ટાર્ટઅપ</div></div><div class="section-body">
<div class="notice">This section appears when Innovator or Startup is selected.</div>
<div class="q"><div class="q-title">16. Innovation / Startup Name</div><input name="innovation_startup_name" class="form-control"></div>
<div class="q"><div class="q-title">17. Problem Being Addressed</div><textarea name="problem_being_addressed" class="form-control"></textarea></div>
<div class="q"><div class="q-title">18. Innovation / Solution in Brief</div><textarea name="innovation_solution" class="form-control"></textarea></div>
<div class="q"><div class="q-title">19. Current Stage</div><select name="current_stage" class="form-select"><option value="">Select</option><option>Idea</option><option>Concept</option><option>Prototype</option><option>MVP</option><option>Product Ready</option><option>Market Ready</option><option>Revenue Generating</option><option>Scaling</option></select></div>
<div class="q"><div class="q-title">20. IPR Status</div><label class="opt"><input type="checkbox" name="ipr_status[]" value="Patent">Patent</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Design">Design</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Copyright">Copyright</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Trademark">Trademark</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Applied">Applied</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Granted">Granted</label><label class="opt"><input type="checkbox" name="ipr_status[]" value="Not Applied">Not Applied</label></div>
<div class="q"><div class="q-title">21. Website / Project / Demo Link</div><input type="url" name="project_demo_link" class="form-control"></div>
</div></div>

<div class="card-section conditional" id="investorSection"><div class="section-head"><h2>PART 7 — Investor / Venture Capital</h2><div class="gj text-muted">ભાગ ૭ – રોકાણકાર / વેન્ચર કેપિટલ</div></div><div class="section-body">
<div class="notice">This section appears when Investor or Venture Capital is selected.</div>
<div class="q"><div class="q-title">22. Type of Investment</div><label class="opt"><input type="checkbox" name="investment_type[]" value="Angel Investment">Angel Investment</label><label class="opt"><input type="checkbox" name="investment_type[]" value="Seed Investment">Seed Investment</label><label class="opt"><input type="checkbox" name="investment_type[]" value="Venture Capital">Venture Capital</label><label class="opt"><input type="checkbox" name="investment_type[]" value="Strategic Investment">Strategic Investment</label><label class="opt"><input type="checkbox" name="investment_type[]" value="Grant">Grant</label><label class="opt"><input type="checkbox" name="investment_type[]" value="CSR Funding">CSR Funding</label><label class="opt"><input type="checkbox" name="investment_type[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">23. Startup Stage of Interest</div><label class="opt"><input type="checkbox" name="startup_stage_interest[]" value="Idea Stage">Idea Stage</label><label class="opt"><input type="checkbox" name="startup_stage_interest[]" value="Prototype Stage">Prototype Stage</label><label class="opt"><input type="checkbox" name="startup_stage_interest[]" value="Early Stage">Early Stage</label><label class="opt"><input type="checkbox" name="startup_stage_interest[]" value="Growth Stage">Growth Stage</label><label class="opt"><input type="checkbox" name="startup_stage_interest[]" value="Any Stage">Any Stage</label></div>
<div class="q"><div class="q-title">24. Preferred Sector</div><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Technology">Technology</label><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Healthcare">Healthcare</label><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Agriculture">Agriculture</label><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Manufacturing">Manufacturing</label><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Education">Education</label><label class="opt"><input type="checkbox" name="preferred_sector[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">25. Investment / Funding Range</div><input name="investment_funding_range" class="form-control" placeholder="Example: ₹5 Lakh – ₹25 Lakh"></div>
</div></div>

<div class="card-section conditional" id="mentorSection"><div class="section-head"><h2>PART 8 — Mentor / Skill Expert</h2><div class="gj text-muted">ભાગ ૮ – માર્ગદર્શક / કૌશલ્ય નિષ્ણાત</div></div><div class="section-body">
<div class="notice">This section appears when Mentor or Skill Expert is selected.</div>
<div class="q"><div class="q-title">26. Area of Expertise</div><textarea name="mentor_expertise" class="form-control"></textarea></div>
<div class="q"><div class="q-title">27. Support Offered</div><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Technical">Technical</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Business">Business</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="IPR / Patent">IPR / Patent</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Product Development">Product Development</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Manufacturing">Manufacturing</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Marketing">Marketing</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Finance">Finance</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Startup Strategy">Startup Strategy</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Skill Training">Skill Training</label><label class="opt"><input type="checkbox" name="mentor_support_offered[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">28. Availability</div><select name="mentor_availability" class="form-select"><option value="">Select</option><option>Online</option><option>Offline</option><option>Both</option></select></div>
</div></div>

<div class="card-section conditional" id="institutionSection"><div class="section-head"><h2>PART 9 — Incubation / Educational Institution</h2><div class="gj text-muted">ભાગ ૯ – ઇન્ક્યુબેશન / શૈક્ષણિક સંસ્થા</div></div><div class="section-body">
<div class="notice">This section appears when Incubation Centre or Educational Institution is selected.</div>
<div class="q"><div class="q-title">29. Type of Institution</div><select name="institution_type" class="form-select"><option value="">Select</option><option>School</option><option>College</option><option>University</option><option>Polytechnic</option><option>ITI</option><option>Research Institution</option><option>Incubation Centre</option><option>Other</option></select></div>
<div class="q"><div class="q-title">30. Facilities / Capabilities Available</div><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Innovation Lab">Innovation Lab</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Prototype Lab">Prototype Lab</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Testing Facility">Testing Facility</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Incubation">Incubation</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="IPR Support">IPR Support</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Startup Mentoring">Startup Mentoring</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Research Facility">Research Facility</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Industry Connect">Industry Connect</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Student Innovation">Student Innovation</label><label class="opt"><input type="checkbox" name="facilities_capabilities[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">31. Number of Startups / Projects / IPRs</div><textarea name="number_of_startups_projects_iprs" class="form-control"></textarea></div>
<div class="q"><div class="q-title">32. How can your Institution support Vadodara Innovation Ecosystem?</div><textarea name="institution_ecosystem_support" class="form-control"></textarea></div>
</div></div>

<div class="card-section conditional" id="industrySection"><div class="section-head"><h2>PART 10 — Industry / CSR / NGO / Supporter</h2><div class="gj text-muted">ભાગ ૧૦ – ઉદ્યોગ / CSR / NGO / સહયોગી</div></div><div class="section-body">
<div class="notice">This section appears when Industry, CSR Organisation or NGO is selected.</div>
<div class="q"><div class="q-title">33. Type of Support</div><label class="opt"><input type="checkbox" name="support_type[]" value="Financial Support">Financial Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="CSR Support">CSR Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="Technical Support">Technical Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="Equipment / Material">Equipment / Material</label><label class="opt"><input type="checkbox" name="support_type[]" value="Manufacturing Support">Manufacturing Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="Internship">Internship</label><label class="opt"><input type="checkbox" name="support_type[]" value="Employment">Employment</label><label class="opt"><input type="checkbox" name="support_type[]" value="Market Access">Market Access</label><label class="opt"><input type="checkbox" name="support_type[]" value="Mentoring">Mentoring</label><label class="opt"><input type="checkbox" name="support_type[]" value="Student Support">Student Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="Event Support">Event Support</label><label class="opt"><input type="checkbox" name="support_type[]" value="Promotion">Promotion</label><label class="opt"><input type="checkbox" name="support_type[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">34. Brief Details of Support</div><textarea name="support_details" class="form-control"></textarea></div>
</div></div>

<div class="card-section conditional" id="individualSection"><div class="section-head"><h2>PART 11 — Individual Helping Hand</h2><div class="gj text-muted">ભાગ ૧૧ – વ્યક્તિગત સહયોગી</div></div><div class="section-body">
<div class="q"><div class="q-title">35. I would like to contribute through:</div><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Mentoring">Mentoring</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Financial Support">Financial Support</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Technical Support">Technical Support</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Student Support">Student Support</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Equipment / Material Support">Equipment / Material Support</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Networking">Networking</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Promotion">Promotion</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Volunteering">Volunteering</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Events">Events</label><label class="opt"><input type="checkbox" name="individual_contribution[]" value="Other">Other</label></div>
<div class="q"><div class="q-title">36. How would you like to contribute?</div><textarea name="individual_contribution_details" class="form-control"></textarea></div>
</div></div>

<div class="card-section"><div class="section-head"><h2>PART 12 — Final Confirmation</h2><div class="gj text-muted">ભાગ ૧૨ – અંતિમ પુષ્ટિ</div></div><div class="section-body">
<div class="q"><div class="q-title">37. Consent <span class="required">*</span></div><label class="opt"><input type="checkbox" name="consent" value="1" required>I agree to be part of the Vadodara Innovation & Support Ecosystem and may be contacted for relevant innovation, startup, mentoring, skill, investment, incubation, industry or other support opportunities.<br><span class="gj">હું વડોદરા ઇનોવેશન અને સહયોગ ઇકોસિસ્ટમનો ભાગ બનવા સંમત છું અને સંબંધિત સહયોગની તકો માટે મારો સંપર્ક કરી શકાય છે.</span></label></div>
<div class="q"><div class="q-title">38. Additional Information</div><textarea name="additional_information" class="form-control"></textarea></div>
</div></div>

<div class="text-center mb-5"><button class="btn-main" type="submit"><i class="bi bi-send me-2"></i>Submit Registration</button></div>
</form></main>
<script src="/assets/app.js"></script>
</body></html>