<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rashtriya Innovation Challenge 2026 – Vadodara Innovation & Support Ecosystem</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Gujarati:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        :root {
            --primary: #4f46e5;
            --primary-dark: #3730a3;
            --secondary: #7c3aed;
            --dark: #0f172a;
            --text: #1e293b;
            --muted: #64748b;
            --border: #e2e8f0;
            --background: #f5f7fb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--text);
            font-family: "Inter", "Noto Sans Gujarati", Arial, sans-serif;
        }

        /* ================= HERO ================= */

        .hero {
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(
                    circle at 90% 10%,
                    rgba(124,58,237,.40),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #0f172a,
                    #312e81
                );

            color: white;
            padding: 55px 20px 80px;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: rgba(255,255,255,.04);
            top: -150px;
            left: -100px;
        }

        .hero-container {
            max-width: 1100px;
            margin: auto;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            border-radius: 50px;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.18);
            font-size: 13px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(28px, 5vw, 46px);
            font-weight: 800;
            line-height: 1.18;
            margin-bottom: 12px;
        }

        .hero-gujarati {
            font-family: "Noto Sans Gujarati", sans-serif;
            font-size: clamp(18px, 3vw, 25px);
            opacity: .94;
            line-height: 1.5;
            margin-bottom: 25px;
        }

        .date-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            border-radius: 10px;
            background: white;
            color: var(--primary-dark);
            font-weight: 700;
        }

        /* ================= CONTAINER ================= */

        .main-container {
            max-width: 1100px;
            margin: -45px auto 60px;
            position: relative;
            z-index: 5;
        }

        /* ================= INTRO ================= */

        .intro-card {
            background: white;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 22px;
            box-shadow: 0 12px 40px rgba(15,23,42,.08);
        }

        .intro-card p {
            color: #475569;
            line-height: 1.75;
        }

        .purpose-title {
            font-weight: 800;
            font-size: 18px;
        }

        /* ================= PROGRESS ================= */

        .progress-card {
            background: white;
            border-radius: 14px;
            padding: 18px 22px;
            margin-bottom: 22px;
            box-shadow: 0 7px 25px rgba(15,23,42,.06);
            position: sticky;
            top: 10px;
            z-index: 50;
        }

        .progress-info {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            font-weight: 700;
            color: var(--muted);
            margin-bottom: 8px;
        }

        .progress {
            height: 8px;
            border-radius: 20px;
            background: #e2e8f0;
        }

        .progress-bar {
            background: linear-gradient(
                90deg,
                var(--primary),
                var(--secondary)
            );
            border-radius: 20px;
            transition: width .3s ease;
        }

        /* ================= SECTION ================= */

        .form-section {
            background: white;
            border-radius: 18px;
            margin-bottom: 22px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(15,23,42,.06);
        }

        .section-header {
            padding: 22px 28px;
            display: flex;
            align-items: center;
            gap: 15px;

            background:
                linear-gradient(
                    135deg,
                    #f8fafc,
                    #eef2ff
                );

            border-bottom: 1px solid var(--border);
        }

        .section-number {
            width: 45px;
            height: 45px;
            min-width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;

            color: white;
            background: linear-gradient(
                135deg,
                var(--primary),
                var(--secondary)
            );

            font-weight: 800;
        }

        .section-header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 800;
        }

        .section-header p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 14px;
            font-family: "Noto Sans Gujarati", sans-serif;
        }

        .section-body {
            padding: 30px;
        }

        /* ================= QUESTIONS ================= */

        .question {
            margin-bottom: 30px;
        }

        .question:last-child {
            margin-bottom: 0;
        }

        .question-title {
            font-size: 15px;
            font-weight: 700;
            line-height: 1.5;
            margin-bottom: 3px;
        }

        .question-gujarati {
            font-family: "Noto Sans Gujarati", sans-serif;
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 11px;
        }

        .required {
            color: #dc2626;
        }

        .form-control,
        .form-select {
            min-height: 48px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 11px 14px;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79,70,229,.12);
        }

        /* ================= OPTIONS ================= */

        .options {
            display: grid;
            gap: 9px;
        }

        .option {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 10px;
            cursor: pointer;
            transition: .2s;
        }

        .option:hover {
            background: #f8faff;
            border-color: #a5b4fc;
        }

        .option input {
            width: 17px;
            height: 17px;
            margin-top: 3px;
            accent-color: var(--primary);
            flex-shrink: 0;
        }

        .option-text {
            font-size: 14px;
            line-height: 1.55;
        }

        .option-gujarati {
            font-family: "Noto Sans Gujarati", sans-serif;
            color: var(--muted);
        }

        /* ================= CONDITIONAL ================= */

        .conditional {
            display: none;
        }

        .conditional.show {
            display: block;
        }

        .conditional-note {
            padding: 13px 15px;
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            color: #3730a3;
            border-radius: 10px;
            margin-bottom: 25px;
            font-size: 13px;
        }

        /* ================= ROLE CARDS ================= */

        .role-counter {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 15px;
            background: #f8fafc;
            border-radius: 10px;
            margin-top: 12px;
            color: var(--muted);
            font-size: 13px;
        }

        .role-count {
            font-weight: 800;
            color: var(--primary);
        }

        /* ================= SUBMIT ================= */

        .submit-card {
            background: white;
            padding: 35px;
            text-align: center;
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(15,23,42,.06);
        }

        .submit-icon {
            font-size: 55px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .btn-submit {
            border: 0;
            padding: 14px 38px;
            border-radius: 12px;

            color: white;
            font-size: 16px;
            font-weight: 700;

            background: linear-gradient(
                135deg,
                var(--primary),
                var(--secondary)
            );

            box-shadow: 0 8px 20px rgba(79,70,229,.25);
            transition: .2s;
        }

        .btn-submit:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(79,70,229,.32);
        }

        /* ================= FOOTER ================= */

        footer {
            text-align: center;
            color: #94a3b8;
            padding: 20px;
            font-size: 13px;
        }

        /* ================= MOBILE ================= */

        @media(max-width:768px) {

            .hero {
                padding: 40px 18px 65px;
            }

            .main-container {
                margin: -30px 12px 40px;
            }

            .section-body {
                padding: 22px 18px;
            }

            .section-header {
                padding: 18px;
            }

            .section-header h2 {
                font-size: 17px;
            }

            .progress-card {
                position: relative;
                top: 0;
            }

            .intro-card {
                padding: 21px;
            }

        }

    </style>
</head>

<body>


<!-- ========================================================= -->
<!-- HERO -->
<!-- ========================================================= -->

<header class="hero">

    <div class="hero-container">

        <div class="hero-badge">
            <i class="bi bi-lightbulb-fill"></i>
            Rashtriya Innovation Challenge 2026
        </div>

        <h1>
            Rashtriya Innovation Challenge 2026
            <br>
            Vadodara Innovation & Support Ecosystem
        </h1>

        <div class="hero-gujarati">
            રાષ્ટ્રીય ઇનોવેશન ચેલેન્જ ૨૦૨૬
            <br>
            વડોદરા ઇનોવેશન અને સહયોગ ઇકોસિસ્ટમ
        </div>

        <div class="date-badge">

            <i class="bi bi-calendar-event"></i>

            Last Date:
            4 October 2026 /
            ૪ ઑક્ટોબર ૨૦૨૬

        </div>

    </div>

</header>


<main class="main-container">


<!-- ========================================================= -->
<!-- INTRO -->
<!-- ========================================================= -->

<div class="intro-card">

    <div class="purpose-title mb-3">

        <i class="bi bi-info-circle-fill text-primary me-2"></i>

        Common Registration Form /
        સામાન્ય નોંધણી ફોર્મ

    </div>

    <p>

        This common registration form is designed to build a city-wide
        database and connect Innovators, Startups, Mentors, Skill Experts,
        Investors, Venture Capital, Incubation Centres, Educational
        Institutions, Industries, CSR organisations, NGOs and Individual
        Supporters for innovation, startup development and ecosystem
        collaboration in Vadodara.

    </p>

    <p class="mb-0">

        આ સામાન્ય નોંધણી ફોર્મનો હેતુ વડોદરા શહેરમાં નવીનતા,
        સ્ટાર્ટઅપ વિકાસ અને સહયોગી ઇકોસિસ્ટમને મજબૂત બનાવવા માટે
        નવીન વિચારકો, સ્ટાર્ટઅપ, માર્ગદર્શકો, કૌશલ્ય નિષ્ણાતો,
        રોકાણકારો, વેન્ચર કેપિટલ, ઇન્ક્યુબેશન સેન્ટરો,
        શૈક્ષણિક સંસ્થાઓ, ઉદ્યોગો, CSR સંસ્થાઓ, NGO તથા
        વ્યક્તિગત સહયોગીઓનો સંયુક્ત ડેટાબેઝ તૈયાર કરવાનો છે.

    </p>

</div>


<!-- ========================================================= -->
<!-- PROGRESS -->
<!-- ========================================================= -->

<div class="progress-card">

    <div class="progress-info">

        <span id="progressText">
            Section 1 of 12
        </span>

        <span id="progressPercent">
            8%
        </span>

    </div>

    <div class="progress">

        <div
            class="progress-bar"
            id="progressBar"
            style="width:8%">
        </div>

    </div>

</div>


<form
    action="submit_ecosystem.php"
    method="POST"
    id="ecosystemForm"
    novalidate>


<!-- ========================================================= -->
<!-- PART 1 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            01
        </div>

        <div>

            <h2>
                PART 1 – Basic Information
            </h2>

            <p>
                ભાગ ૧ – મૂળભૂત માહિતી
            </p>

        </div>

    </div>


    <div class="section-body">


        <!-- Q1 -->

        <div class="question">

            <div class="question-title">
                1. Full Name
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                સંપૂર્ણ નામ
            </div>

            <input
                type="text"
                name="full_name"
                class="form-control"
                placeholder="Enter full name / સંપૂર્ણ નામ"
                required>

        </div>


        <!-- Q2 -->

        <div class="question">

            <div class="question-title">
                2. Mobile Number
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                મોબાઇલ નંબર
            </div>

            <input
                type="tel"
                name="mobile"
                id="mobile"
                class="form-control"
                maxlength="10"
                placeholder="10 digit mobile number"
                required>

        </div>


        <!-- Q3 -->

        <div class="question">

            <div class="question-title">
                3. Email ID
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                ઇ-મેઇલ
            </div>

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="example@email.com"
                required>

        </div>


        <!-- Q4 -->

        <div class="question">

            <div class="question-title">
                4. You are registering as
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                આપ કઈ ભૂમિકામાં નોંધણી કરી રહ્યા છો?
            </div>


            <div class="options">

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Innovator">
                    <span class="option-text">Innovator / નવીન વિચારક</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Startup">
                    <span class="option-text">Startup / સ્ટાર્ટઅપ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Mentor">
                    <span class="option-text">Mentor / માર્ગદર્શક</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Skill Expert">
                    <span class="option-text">Skill Expert / કૌશલ્ય નિષ્ણાત</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Investor">
                    <span class="option-text">Investor / રોકાણકાર</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Venture Capital">
                    <span class="option-text">Venture Capital / વેન્ચર કેપિટલ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Incubation Centre">
                    <span class="option-text">Incubation Centre / ઇન્ક્યુબેશન સેન્ટર</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Educational Institution">
                    <span class="option-text">Educational Institution / શૈક્ષણિક સંસ્થા</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Industry">
                    <span class="option-text">Industry / ઉદ્યોગ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="CSR Organisation">
                    <span class="option-text">CSR Organisation / CSR સંસ્થા</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="NGO">
                    <span class="option-text">NGO / બિનસરકારી સંસ્થા</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Individual Helping Hand">
                    <span class="option-text">Individual Helping Hand / વ્યક્તિગત સહયોગી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Innovation Promoter">
                    <span class="option-text">Innovation Promoter / નવીનતા પ્રોત્સાહક</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="registering_as[]" value="Other">
                    <span class="option-text">Other / અન્ય</span>
                </label>

            </div>

            <div class="role-counter">

                <span>
                    Selected Roles
                </span>

                <span
                    class="role-count"
                    id="roleCount">
                    0
                </span>

            </div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 2 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            02
        </div>

        <div>

            <h2>
                PART 2 – Location Details
            </h2>

            <p>
                ભાગ ૨ – સ્થળની વિગતો
            </p>

        </div>

    </div>


    <div class="section-body">


        <!-- Q5 -->

        <div class="question">

            <div class="question-title">
                5. City
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                શહેર
            </div>

            <select
                name="city"
                class="form-select"
                required>

                <option value="">
                    Select City / શહેર પસંદ કરો
                </option>

                <option value="Vadodara">
                    Vadodara / વડોદરા
                </option>

                <option value="Other">
                    Other / અન્ય
                </option>

            </select>

        </div>


        <!-- Q6 -->

        <div class="question">

            <div class="question-title">
                6. Vidhan Sabha Constituency
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                વિસ્તાર
            </div>

            <input
                type="text"
                name="vidhan_sabha"
                class="form-control"
                required
                placeholder="Enter Vidhan Sabha">

        </div>


        <div class="question">

            <div class="question-title">
                7. Ward Number
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                વોર્ડ નંબર
            </div>

            <input
                type="text"
                name="ward_number"
                class="form-control"
                required
                placeholder="Enter Ward Number">

        </div>

        <!-- Q8 -->

        <div class="question">

            <div class="question-title">
                8. Area / Locality
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                વિસ્તાર
            </div>

            <input
                type="text"
                name="area_locality"
                class="form-control"
                required
                placeholder="Enter area / locality">

        </div>


        <!-- Q9 -->

        <div class="question">

            <div class="question-title">
                9. Google Maps Location
            </div>

            <div class="question-gujarati">
                ગૂગલ મેપ સ્થાન કડી
            </div>

            <div class="input-group">
                <input
                    type="url"
                    name="google_maps_location"
                    id="google_maps_location"
                    class="form-control"
                    placeholder="Current location will appear here..."
                    readonly>
                <button
                    type="button"
                    class="btn btn-primary"
                    id="getLocationBtn"
                    onclick="getCurrentLocation()">
                    <i class="bi bi-geo-alt-fill me-1"></i>
                    Current Location
                </button>
            </div>
            <div id="locationStatus" class="mt-2 small text-muted"></div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 3 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            03
        </div>

        <div>

            <h2>
                PART 3 – Organisation / Professional Details
            </h2>

            <p>
                ભાગ ૩ – સંસ્થા / વ્યવસાયિક વિગતો
            </p>

        </div>

    </div>


    <div class="section-body">


        <!-- Q10 -->

        <div class="question">

            <div class="question-title">
                10. Organisation / Institution Name
            </div>

            <div class="question-gujarati">
                સંસ્થા / સંસ્થાનું નામ
            </div>

            <input
                type="text"
                name="organisation_name"
                class="form-control"
                placeholder="Organisation / Institution Name">

        </div>


        <!-- Q11 -->

        <div class="question">

            <div class="question-title">
                11. Designation / Role
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                હોદ્દો / ભૂમિકા
            </div>

            <input
                type="text"
                name="designation_role"
                class="form-control"
                required
                placeholder="Designation / Role">

        </div>


        <!-- Q12 -->

        <div class="question">

            <div class="question-title">
                12. Website / LinkedIn / Social Media Link
            </div>

            <div class="question-gujarati">
                વેબસાઇટ / લિન્ક્ડઇન / સોશિયલ મીડિયા કડી
            </div>

            <input
                type="url"
                name="website_social_link"
                class="form-control"
                placeholder="https://...">

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 4 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            04
        </div>

        <div>

            <h2>
                PART 4 – Expertise / Area of Interest
            </h2>

            <p>
                ભાગ ૪ – નિષ્ણાતતા / રસનું ક્ષેત્ર
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="question">

            <div class="question-title">
                13. Your Area of Expertise / Interest
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                આપની નિષ્ણાતતા / રસનું ક્ષેત્ર
            </div>


            <div class="options">

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Technology">
                    <span class="option-text">Technology / ટેક્નોલોજી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Engineering">
                    <span class="option-text">Engineering / એન્જિનિયરિંગ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Electronics">
                    <span class="option-text">Electronics / ઇલેક્ટ્રોનિક્સ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Software">
                    <span class="option-text">Software / સોફ્ટવેર</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Artificial Intelligence">
                    <span class="option-text">Artificial Intelligence / આર્ટિફિશિયલ ઇન્ટેલિજન્સ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Robotics">
                    <span class="option-text">Robotics / રોબોટિક્સ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="IoT">
                    <span class="option-text">IoT / આઈઓટી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="EV / Electric Mobility">
                    <span class="option-text">EV / Electric Mobility / ઈવી / ઇલેક્ટ્રિક મોબિલિટી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Space Technology">
                    <span class="option-text">Space Technology / અવકાશ ટેક્નોલોજી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Defence Technology">
                    <span class="option-text">Defence Technology / સંરક્ષણ ટેક્નોલોજી</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Healthcare">
                    <span class="option-text">Healthcare / હેલ્થકેર</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Agriculture">
                    <span class="option-text">Agriculture / કૃષિ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Environment / Energy">
                    <span class="option-text">Environment / Energy / પર્યાવરણ / ઊર્જા</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Manufacturing">
                    <span class="option-text">Manufacturing / ઉત્પાદન</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="IPR / Patent / Design">
                    <span class="option-text">IPR / Patent / Design / IPR / પેટન્ટ / ડિઝાઇન</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Business / Marketing">
                    <span class="option-text">Business / Marketing / બિઝનેસ / માર્કેટિંગ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Finance / Funding">
                    <span class="option-text">Finance / Funding / નાણાં / ફંડિંગ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Education">
                    <span class="option-text">Education / શિક્ષણ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Skill Development">
                    <span class="option-text">Skill Development / કૌશલ્ય વિકાસ</span>
                </label>

                <label class="option">
                    <input type="checkbox" name="expertise[]" value="Other">
                    <span class="option-text">Other / અન્ય</span>
                </label>

            </div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 5 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            05
        </div>

        <div>

            <h2>
                PART 5 – Support You Can Provide
            </h2>

            <p>
                ભાગ ૫ – આપ કયો સહયોગ આપી શકો?
            </p>

        </div>

    </div>


    <div class="section-body">


        <div class="question">

            <div class="question-title">
                14. I can support the Innovation Ecosystem through:
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                હું ઇનોવેશન ઇકોસિસ્ટમમાં નીચે મુજબ સહયોગ આપી શકું છું:
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Innovation Mentoring"><span class="option-text">Innovation Mentoring / નવીનતા માર્ગદર્શન</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Startup Mentoring"><span class="option-text">Startup Mentoring / સ્ટાર્ટઅપ માર્ગદર્શન</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Technical Expertise"><span class="option-text">Technical Expertise / તકનીકી નિષ્ણાત સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Skill Training"><span class="option-text">Skill Training / કૌશલ્ય તાલીમ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Prototype Development"><span class="option-text">Prototype Development / પ્રોટોટાઇપ વિકાસ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Lab / Testing Facility"><span class="option-text">Lab / Testing Facility / પ્રયોગશાળા / પરીક્ષણ સુવિધા</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="IPR / Patent / Design Support"><span class="option-text">IPR / Patent / Design Support / IPR / પેટન્ટ / ડિઝાઇન સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Incubation Support"><span class="option-text">Incubation Support / ઇન્ક્યુબેશન સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Investment"><span class="option-text">Investment / રોકાણ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Funding"><span class="option-text">Funding / ફંડિંગ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Venture Capital"><span class="option-text">Venture Capital / વેન્ચર કેપિટલ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Industry Connect"><span class="option-text">Industry Connect / ઉદ્યોગ જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Market Connect"><span class="option-text">Market Connect / બજાર જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Manufacturing Support"><span class="option-text">Manufacturing Support / ઉત્પાદન સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="CSR Support"><span class="option-text">CSR Support / CSR સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Student Support"><span class="option-text">Student Support / વિદ્યાર્થી સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Research Collaboration"><span class="option-text">Research Collaboration / સંશોધન સહયોગ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Event / Exhibition Support"><span class="option-text">Event / Exhibition Support / કાર્યક્રમ / પ્રદર્શન સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Promotion & Publicity"><span class="option-text">Promotion & Publicity / પ્રચાર-પ્રસાર</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Networking"><span class="option-text">Networking / ઇકોસિસ્ટમ જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="support_you_can_provide[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q15 -->

        <div class="question">

            <div class="question-title">
                15. Briefly describe your support
            </div>

            <div class="question-gujarati">
                આપ કયો વિશેષ સહયોગ આપી શકો તેની સંક્ષિપ્ત માહિતી
            </div>

            <textarea
                name="support_description"
                class="form-control"
                placeholder="Describe your support..."></textarea>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 6 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="innovatorStartupSection">

    <div class="section-header">

        <div class="section-number">
            06
        </div>

        <div>

            <h2>
                PART 6 – Innovator / Startup Details
            </h2>

            <p>
                ભાગ ૬ – નવીન વિચારક / સ્ટાર્ટઅપ વિગતો
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="conditional-note">
            <i class="bi bi-info-circle me-1"></i>
            This section is shown when Innovator or Startup is selected.
        </div>


        <!-- Q16 -->

        <div class="question">

            <div class="question-title">
                16. Innovation / Startup Name
            </div>

            <div class="question-gujarati">
                નવીનતા / સ્ટાર્ટઅપનું નામ
            </div>

            <input
                type="text"
                name="innovation_startup_name"
                class="form-control">

        </div>


        <!-- Q17 -->

        <div class="question">

            <div class="question-title">
                17. Problem Being Addressed
            </div>

            <div class="question-gujarati">
                કઈ સમસ્યાનું નિરાકરણ કરવામાં આવી રહ્યું છે?
            </div>

            <textarea
                name="problem_being_addressed"
                class="form-control"></textarea>

        </div>


        <!-- Q18 -->

        <div class="question">

            <div class="question-title">
                18. Innovation / Solution in Brief
            </div>

            <div class="question-gujarati">
                નવીનતા / ઉકેલની સંક્ષિપ્ત માહિતી
            </div>

            <textarea
                name="innovation_solution"
                class="form-control"></textarea>

        </div>


        <!-- Q19 -->

        <div class="question">

            <div class="question-title">
                19. Current Stage
            </div>

            <div class="question-gujarati">
                વર્તમાન તબક્કો
            </div>

            <select
                name="current_stage"
                class="form-select">

                <option value="">Select Stage</option>
                <option>Idea / વિચાર</option>
                <option>Concept / સંકલ્પના</option>
                <option>Prototype / પ્રોટોટાઇપ</option>
                <option>MVP</option>
                <option>Product Ready / ઉત્પાદન તૈયાર</option>
                <option>Market Ready / બજાર માટે તૈયાર</option>
                <option>Revenue Generating / આવક શરૂ</option>
                <option>Scaling / વિસ્તરણ</option>

            </select>

        </div>


        <!-- Q20 -->

        <div class="question">

            <div class="question-title">
                20. IPR Status
            </div>

            <div class="question-gujarati">
                IPR સ્થિતિ
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Patent"><span class="option-text">Patent / પેટન્ટ</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Design"><span class="option-text">Design / ડિઝાઇન</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Copyright"><span class="option-text">Copyright / કૉપિરાઇટ</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Trademark"><span class="option-text">Trademark / ટ્રેડમાર્ક</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Applied"><span class="option-text">Applied / અરજી કરેલ</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Granted"><span class="option-text">Granted / મંજૂર</span></label>

                <label class="option"><input type="checkbox" name="ipr_status[]" value="Not Applied"><span class="option-text">Not Applied / અરજી કરેલ નથી</span></label>

            </div>

        </div>


        <!-- Q21 -->

        <div class="question">

            <div class="question-title">
                21. Website / Project / Demo Link
            </div>

            <div class="question-gujarati">
                વેબસાઇટ / પ્રોજેક્ટ / ડેમો કડી
            </div>

            <input
                type="url"
                name="project_demo_link"
                class="form-control"
                placeholder="https://...">

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 7 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="investorSection">

    <div class="section-header">

        <div class="section-number">
            07
        </div>

        <div>

            <h2>
                PART 7 – Investor / Venture Capital
            </h2>

            <p>
                ભાગ ૭ – રોકાણકાર / વેન્ચર કેપિટલ
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="conditional-note">
            This section is shown when Investor or Venture Capital is selected.
        </div>


        <!-- Q22 -->

        <div class="question">

            <div class="question-title">
                22. Type of Investment
            </div>

            <div class="question-gujarati">
                રોકાણનો પ્રકાર
            </div>

            <div class="options">

                <label class="option"><input type="checkbox" name="investment_type[]" value="Angel Investment"><span class="option-text">Angel Investment / એન્જલ રોકાણ</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="Seed Investment"><span class="option-text">Seed Investment / સીડ રોકાણ</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="Venture Capital"><span class="option-text">Venture Capital / વેન્ચર કેપિટલ</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="Strategic Investment"><span class="option-text">Strategic Investment / વ્યૂહાત્મક રોકાણ</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="Grant"><span class="option-text">Grant / અનુદાન</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="CSR Funding"><span class="option-text">CSR Funding / CSR ફંડિંગ</span></label>

                <label class="option"><input type="checkbox" name="investment_type[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q23 -->

        <div class="question">

            <div class="question-title">
                23. Startup Stage of Interest
            </div>

            <div class="question-gujarati">
                કયા તબક્કાના સ્ટાર્ટઅપમાં રસ છે?
            </div>

            <div class="options">

                <label class="option"><input type="checkbox" name="startup_stage_interest[]" value="Idea Stage"><span class="option-text">Idea Stage / વિચાર તબક્કો</span></label>

                <label class="option"><input type="checkbox" name="startup_stage_interest[]" value="Prototype Stage"><span class="option-text">Prototype Stage / પ્રોટોટાઇપ તબક્કો</span></label>

                <label class="option"><input type="checkbox" name="startup_stage_interest[]" value="Early Stage"><span class="option-text">Early Stage / પ્રારંભિક તબક્કો</span></label>

                <label class="option"><input type="checkbox" name="startup_stage_interest[]" value="Growth Stage"><span class="option-text">Growth Stage / વિકાસ તબક્કો</span></label>

                <label class="option"><input type="checkbox" name="startup_stage_interest[]" value="Any Stage"><span class="option-text">Any Stage / કોઈપણ તબક્કો</span></label>

            </div>

        </div>


        <!-- Q24 -->

        <div class="question">

            <div class="question-title">
                24. Preferred Sector
            </div>

            <div class="question-gujarati">
                પસંદગીનું ક્ષેત્ર
            </div>

            <div class="options">

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Technology"><span class="option-text">Technology / ટેક્નોલોજી</span></label>

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Healthcare"><span class="option-text">Healthcare / હેલ્થકેર</span></label>

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Agriculture"><span class="option-text">Agriculture / કૃષિ</span></label>

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Manufacturing"><span class="option-text">Manufacturing / ઉત્પાદન</span></label>

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Education"><span class="option-text">Education / શિક્ષણ</span></label>

                <label class="option"><input type="checkbox" name="preferred_sector[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q25 -->

        <div class="question">

            <div class="question-title">
                25. Investment / Funding Range
            </div>

            <div class="question-gujarati">
                રોકાણ / ફંડિંગની અંદાજિત શ્રેણી
            </div>

            <input
                type="text"
                name="investment_funding_range"
                class="form-control"
                placeholder="Example: ₹5 Lakh – ₹25 Lakh">

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 8 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="mentorSection">

    <div class="section-header">

        <div class="section-number">
            08
        </div>

        <div>

            <h2>
                PART 8 – Mentor / Skill Expert
            </h2>

            <p>
                ભાગ ૮ – માર્ગદર્શક / કૌશલ્ય નિષ્ણાત
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="conditional-note">
            This section is shown when Mentor or Skill Expert is selected.
        </div>


        <!-- Q26 -->

        <div class="question">

            <div class="question-title">
                26. Area of Expertise
            </div>

            <div class="question-gujarati">
                નિષ્ણાતતાનું ક્ષેત્ર
            </div>

            <textarea
                name="mentor_expertise"
                class="form-control"
                placeholder="Describe your expertise..."></textarea>

        </div>


        <!-- Q27 -->

        <div class="question">

            <div class="question-title">
                27. Support Offered
            </div>

            <div class="question-gujarati">
                કયા પ્રકારનું માર્ગદર્શન / કૌશલ્ય આપી શકો?
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Technical"><span class="option-text">Technical / તકનીકી</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Business"><span class="option-text">Business / બિઝનેસ</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="IPR / Patent"><span class="option-text">IPR / Patent / IPR / પેટન્ટ</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Product Development"><span class="option-text">Product Development / ઉત્પાદન વિકાસ</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Manufacturing"><span class="option-text">Manufacturing / ઉત્પાદન પ્રક્રિયા</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Marketing"><span class="option-text">Marketing / માર્કેટિંગ</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Finance"><span class="option-text">Finance / નાણાં</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Startup Strategy"><span class="option-text">Startup Strategy / સ્ટાર્ટઅપ વ્યૂહરચના</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Skill Training"><span class="option-text">Skill Training / કૌશલ્ય તાલીમ</span></label>

                <label class="option"><input type="checkbox" name="mentor_support_offered[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q28 -->

        <div class="question">

            <div class="question-title">
                28. Availability
            </div>

            <div class="question-gujarati">
                ઉપલબ્ધતા
            </div>

            <select
                name="mentor_availability"
                class="form-select">

                <option value="">
                    Select Availability
                </option>

                <option>Online / ઓનલાઈન</option>
                <option>Offline / રૂબરૂ</option>
                <option>Both / બંને</option>

            </select>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 9 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="institutionSection">

    <div class="section-header">

        <div class="section-number">
            09
        </div>

        <div>

            <h2>
                PART 9 – Incubation / Educational Institution
            </h2>

            <p>
                ભાગ ૯ – ઇન્ક્યુબેશન / શૈક્ષણિક સંસ્થા
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="conditional-note">
            This section is shown when Incubation Centre or Educational Institution is selected.
        </div>


        <!-- Q29 -->

        <div class="question">

            <div class="question-title">
                29. Type of Institution
            </div>

            <div class="question-gujarati">
                સંસ્થાનો પ્રકાર
            </div>

            <select
                name="institution_type"
                class="form-select">

                <option value="">Select Type</option>

                <option>School / શાળા</option>
                <option>College / મહાવિદ્યાલય</option>
                <option>University / યુનિવર્સિટી</option>
                <option>Polytechnic / પોલિટેકનિક</option>
                <option>ITI / આઈ.ટી.આઈ.</option>
                <option>Research Institution / સંશોધન સંસ્થા</option>
                <option>Incubation Centre / ઇન્ક્યુબેશન સેન્ટર</option>
                <option>Other / અન્ય</option>

            </select>

        </div>


        <!-- Q30 -->

        <div class="question">

            <div class="question-title">
                30. Facilities / Capabilities Available
            </div>

            <div class="question-gujarati">
                ઉપલબ્ધ સુવિધાઓ / ક્ષમતાઓ
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Innovation Lab"><span class="option-text">Innovation Lab / ઇનોવેશન લેબ</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Prototype Lab"><span class="option-text">Prototype Lab / પ્રોટોટાઇપ લેબ</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Testing Facility"><span class="option-text">Testing Facility / પરીક્ષણ સુવિધા</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Incubation"><span class="option-text">Incubation / ઇન્ક્યુબેશન</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="IPR Support"><span class="option-text">IPR Support / IPR સહાય</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Startup Mentoring"><span class="option-text">Startup Mentoring / સ્ટાર્ટઅપ માર્ગદર્શન</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Research Facility"><span class="option-text">Research Facility / સંશોધન સુવિધા</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Industry Connect"><span class="option-text">Industry Connect / ઉદ્યોગ જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Student Innovation"><span class="option-text">Student Innovation / વિદ્યાર્થી નવીનતા</span></label>

                <label class="option"><input type="checkbox" name="facilities_capabilities[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q31 -->

        <div class="question">

            <div class="question-title">
                31. Number of Startups / Projects / IPRs
            </div>

            <div class="question-gujarati">
                સ્ટાર્ટઅપ / પ્રોજેક્ટ / IPRની સંખ્યા
            </div>

            <textarea
                name="number_of_startups_projects_iprs"
                class="form-control"
                placeholder="Provide relevant numbers/details..."></textarea>

        </div>


        <!-- Q32 -->

        <div class="question">

            <div class="question-title">
                32. How can your Institution support Vadodara Innovation Ecosystem?
            </div>

            <div class="question-gujarati">
                આપની સંસ્થા વડોદરા ઇનોવેશન ઇકોસિસ્ટમને કેવી રીતે સહયોગ આપી શકે?
            </div>

            <textarea
                name="institution_ecosystem_support"
                class="form-control"
                placeholder="Describe how your institution can contribute..."></textarea>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 10 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="industrySection">

    <div class="section-header">

        <div class="section-number">
            10
        </div>

        <div>

            <h2>
                PART 10 – Industry / CSR / NGO / Supporter
            </h2>

            <p>
                ભાગ ૧૦ – ઉદ્યોગ / CSR / NGO / સહયોગી
            </p>

        </div>

    </div>


    <div class="section-body">

        <div class="conditional-note">
            This section is shown when Industry, CSR Organisation or NGO is selected.
        </div>


        <!-- Q33 -->

        <div class="question">

            <div class="question-title">
                33. Type of Support
            </div>

            <div class="question-gujarati">
                સહયોગનો પ્રકાર
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="support_type[]" value="Financial Support"><span class="option-text">Financial Support / આર્થિક સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="CSR Support"><span class="option-text">CSR Support / CSR સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Technical Support"><span class="option-text">Technical Support / તકનીકી સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Equipment / Material"><span class="option-text">Equipment / Material / સાધન / સામગ્રી</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Manufacturing Support"><span class="option-text">Manufacturing Support / ઉત્પાદન સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Internship"><span class="option-text">Internship / ઇન્ટર્નશિપ</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Employment"><span class="option-text">Employment / રોજગાર</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Market Access"><span class="option-text">Market Access / બજાર જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Mentoring"><span class="option-text">Mentoring / માર્ગદર્શન</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Student Support"><span class="option-text">Student Support / વિદ્યાર્થી સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Event Support"><span class="option-text">Event Support / કાર્યક્રમ સહાય</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Promotion"><span class="option-text">Promotion / પ્રચાર-પ્રસાર</span></label>

                <label class="option"><input type="checkbox" name="support_type[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q34 -->

        <div class="question">

            <div class="question-title">
                34. Brief Details of Support
            </div>

            <div class="question-gujarati">
                આપવાના સહયોગની સંક્ષિપ્ત વિગતો
            </div>

            <textarea
                name="support_details"
                class="form-control"></textarea>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 11 -->
<!-- ========================================================= -->

<section
    class="form-section conditional"
    id="individualSection">

    <div class="section-header">

        <div class="section-number">
            11
        </div>

        <div>

            <h2>
                PART 11 – Individual Helping Hand
            </h2>

            <p>
                ભાગ ૧૧ – વ્યક્તિગત સહયોગી
            </p>

        </div>

    </div>


    <div class="section-body">


        <!-- Q35 -->

        <div class="question">

            <div class="question-title">
                35. I would like to contribute through:
            </div>

            <div class="question-gujarati">
                હું નીચે મુજબ સહયોગ આપવા ઇચ્છું છું:
            </div>


            <div class="options">

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Mentoring"><span class="option-text">Mentoring / માર્ગદર્શન</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Financial Support"><span class="option-text">Financial Support / આર્થિક સહાય</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Technical Support"><span class="option-text">Technical Support / તકનીકી સહાય</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Student Support"><span class="option-text">Student Support / વિદ્યાર્થી સહાય</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Equipment / Material Support"><span class="option-text">Equipment / Material Support / સાધન / સામગ્રી સહાય</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Networking"><span class="option-text">Networking / જોડાણ</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Promotion"><span class="option-text">Promotion / પ્રચાર-પ્રસાર</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Volunteering"><span class="option-text">Volunteering / સ્વયંસેવક સેવા</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Events"><span class="option-text">Events / કાર્યક્રમો</span></label>

                <label class="option"><input type="checkbox" name="individual_contribution[]" value="Other"><span class="option-text">Other / અન્ય</span></label>

            </div>

        </div>


        <!-- Q36 -->

        <div class="question">

            <div class="question-title">
                36. How would you like to contribute?
            </div>

            <div class="question-gujarati">
                આપ કઈ રીતે સહયોગ આપવા ઇચ્છો છો?
            </div>

            <textarea
                name="individual_contribution_details"
                class="form-control"
                placeholder="Describe your contribution..."></textarea>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- PART 12 -->
<!-- ========================================================= -->

<section class="form-section">

    <div class="section-header">

        <div class="section-number">
            12
        </div>

        <div>

            <h2>
                PART 12 – Final Confirmation
            </h2>

            <p>
                ભાગ ૧૨ – અંતિમ પુષ્ટિ
            </p>

        </div>

    </div>


    <div class="section-body">


        <!-- Q37 -->

        <div class="question">

            <div class="question-title">
                37. Consent
                <span class="required">*</span>
            </div>

            <div class="question-gujarati">
                સંમતિ
            </div>


            <div class="option">

                <input
                    type="checkbox"
                    name="consent"
                    id="consent"
                    value="1"
                    required>

                <label
                    for="consent"
                    class="option-text">

                    <strong>
                        English:
                    </strong>

                    <br>

                    I agree to be part of the Vadodara Innovation &
                    Support Ecosystem and may be contacted for relevant
                    innovation, startup, mentoring, skill, investment,
                    incubation, industry or other support opportunities.

                    <br><br>

                    <strong>
                        ગુજરાતી:
                    </strong>

                    <br>

                    હું વડોદરા ઇનોવેશન અને સહયોગ ઇકોસિસ્ટમનો ભાગ બનવા
                    સંમત છું અને નવીનતા, સ્ટાર્ટઅપ, માર્ગદર્શન,
                    કૌશલ્ય, રોકાણ, ઇન્ક્યુબેશન, ઉદ્યોગ જોડાણ અથવા
                    અન્ય સહયોગની સંબંધિત તકો માટે મારો સંપર્ક
                    કરી શકાય છે.

                </label>

            </div>

        </div>


        <!-- Q38 -->

        <div class="question">

            <div class="question-title">
                38. Additional Information
            </div>

            <div class="question-gujarati">
                વધારાની માહિતી
            </div>

            <textarea
                name="additional_information"
                class="form-control"
                placeholder="Any additional information..."></textarea>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SUBMIT -->
<!-- ========================================================= -->

<div class="submit-card">

    <div class="submit-icon">

        <i class="bi bi-send-check-fill"></i>

    </div>

    <h3 class="fw-bold">
        Submit Registration
    </h3>

    <p class="text-muted">

        Please review all information before submitting.

        <br>

        સબમિટ કરતા પહેલાં તમામ માહિતી ચકાસી લો.

    </p>

    <button
        type="submit"
        class="btn-submit">

        <i class="bi bi-check-circle me-2"></i>

        Submit Registration /
        નોંધણી સબમિટ કરો

    </button>

</div>


</form>


<footer>

    Rashtriya Innovation Challenge 2026
    · Vadodara Innovation & Support Ecosystem

</footer>


</main>


<!-- ========================================================= -->
<!-- JAVASCRIPT -->
<!-- ========================================================= -->

<script>

function getCurrentLocation() {
    const button = document.getElementById("getLocationBtn");
    const input = document.getElementById("google_maps_location");
    const status = document.getElementById("locationStatus");

    if (!navigator.geolocation) {
        status.innerHTML = '<span class="text-danger">Location is not supported by this browser.</span>';
        return;
    }

    button.disabled = true;
    button.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Getting Location...';
    status.innerHTML = '<span class="text-primary">Please allow location permission...</span>';

    navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const googleMapsURL = `https://www.google.com/maps?q=${latitude},${longitude}`;
        input.value = googleMapsURL;
        status.innerHTML = '<span class="text-success"><i class="bi bi-check-circle-fill"></i> Current location captured successfully.</span>';
        button.disabled = false;
        button.innerHTML = '<i class="bi bi-check-circle-fill me-1"></i> Location Added';
    }, function(error) {
        button.disabled = false;
        button.innerHTML = '<i class="bi bi-geo-alt-fill me-1"></i> Current Location';
        let message = "Unable to get your current location.";
        if (error.code === error.PERMISSION_DENIED) message = "Location permission denied. Please allow location access.";
        else if (error.code === error.POSITION_UNAVAILABLE) message = "Location information is unavailable.";
        else if (error.code === error.TIMEOUT) message = "Location request timed out. Please try again.";
        status.innerHTML = `<span class="text-danger"><i class="bi bi-exclamation-circle-fill"></i> ${message}</span>`;
    }, { enableHighAccuracy: true, timeout: 15000, maximumAge: 0 });
}

<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


    /* =====================================================
       ROLE CONDITIONAL LOGIC
    ===================================================== */

    const roleInputs =
        document.querySelectorAll(
            'input[name="registering_as[]"]'
        );


    const roleCount =
        document.getElementById(
            "roleCount"
        );


    const innovatorSection =
        document.getElementById(
            "innovatorStartupSection"
        );


    const investorSection =
        document.getElementById(
            "investorSection"
        );


    const mentorSection =
        document.getElementById(
            "mentorSection"
        );


    const institutionSection =
        document.getElementById(
            "institutionSection"
        );


    const industrySection =
        document.getElementById(
            "industrySection"
        );


    const individualSection =
        document.getElementById(
            "individualSection"
        );


    function updateRoleSections() {


        let roles = [];


        roleInputs.forEach(
            function (input) {

                if (input.checked) {

                    roles.push(
                        input.value
                    );

                }

            }
        );


        roleCount.textContent =
            roles.length;


        /* Innovator / Startup */

        if (
            roles.includes("Innovator") ||
            roles.includes("Startup")
        ) {

            innovatorSection.classList.add(
                "show"
            );

        } else {

            innovatorSection.classList.remove(
                "show"
            );

        }


        /* Investor / VC */

        if (
            roles.includes("Investor") ||
            roles.includes("Venture Capital")
        ) {

            investorSection.classList.add(
                "show"
            );

        } else {

            investorSection.classList.remove(
                "show"
            );

        }


        /* Mentor / Skill Expert */

        if (
            roles.includes("Mentor") ||
            roles.includes("Skill Expert")
        ) {

            mentorSection.classList.add(
                "show"
            );

        } else {

            mentorSection.classList.remove(
                "show"
            );

        }


        /* Institution / Incubation */

        if (
            roles.includes(
                "Incubation Centre"
            ) ||
            roles.includes(
                "Educational Institution"
            )
        ) {

            institutionSection.classList.add(
                "show"
            );

        } else {

            institutionSection.classList.remove(
                "show"
            );

        }


        /* Industry / CSR / NGO */

        if (
            roles.includes("Industry") ||
            roles.includes("CSR Organisation") ||
            roles.includes("NGO")
        ) {

            industrySection.classList.add(
                "show"
            );

        } else {

            industrySection.classList.remove(
                "show"
            );

        }


        /* Individual */

        if (
            roles.includes(
                "Individual Helping Hand"
            )
        ) {

            individualSection.classList.add(
                "show"
            );

        } else {

            individualSection.classList.remove(
                "show"
            );

        }

    }


    roleInputs.forEach(
        function (input) {

            input.addEventListener(
                "change",
                updateRoleSections
            );

        }
    );


    /* Initial state */

    updateRoleSections();


    /* =====================================================
       MOBILE VALIDATION
    ===================================================== */

    const mobile =
        document.getElementById(
            "mobile"
        );


    mobile.addEventListener(
        "input",
        function () {

            this.value =
                this.value.replace(
                    /\D/g,
                    ""
                );

        }
    );


    /* =====================================================
       CHECKBOX GROUP VALIDATION
    ===================================================== */

    function checkboxGroupValid(
        name
    ) {

        const boxes =
            document.querySelectorAll(
                'input[name="' +
                name +
                '[]"]'
            );


        if (!boxes.length) {

            return true;

        }


        return Array.from(boxes)
            .some(
                function (box) {

                    return box.checked;

                }
            );

    }


    /* =====================================================
       FORM VALIDATION
    ===================================================== */

    const form =
        document.getElementById(
            "ecosystemForm"
        );


    form.addEventListener(
        "submit",
        function (event) {

            event.preventDefault();


            let valid =
                form.checkValidity();


            /*
            Required checkbox groups
            */

            const requiredGroups = [

                "registering_as",
                "expertise",
                "support_you_can_provide"

            ];


            requiredGroups.forEach(
                function (group) {

                    if (
                        !checkboxGroupValid(
                            group
                        )
                    ) {

                        valid = false;

                    }

                }
            );


            if (!valid) {

                event.stopPropagation();

                form.classList.add(
                    "was-validated"
                );


                alert(
                    "Please complete all required fields."
                );


                const invalid =
                    form.querySelector(
                        ":invalid"
                    );


                if (invalid) {

                    invalid.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });

                    invalid.focus();

                }


                return;

            }


            /*
            Confirm before submit
            */

            const confirmed =
                confirm(
                    "Are you sure you want to submit this registration?\n\n" +
                    "શું તમે આ નોંધણી સબમિટ કરવા માંગો છો?"
                );


            if (!confirmed) {

                return;

            }


            /*
            Actual PHP submission
            */

            form.submit();

        }
    );


    /* =====================================================
       PROGRESS BAR
    ===================================================== */

    const sections =
        document.querySelectorAll(
            ".form-section"
        );


    const progressBar =
        document.getElementById(
            "progressBar"
        );


    const progressText =
        document.getElementById(
            "progressText"
        );


    const progressPercent =
        document.getElementById(
            "progressPercent"
        );


    function updateProgress() {


        const visibleSections =
            Array.from(sections)
                .filter(
                    function (section) {

                        return section.offsetParent !== null;

                    }
                );


        if (!visibleSections.length) {

            return;

        }


        const scrollPosition =
            window.scrollY +
            window.innerHeight * 0.25;


        let currentIndex = 0;


        visibleSections.forEach(
            function (
                section,
                index
            ) {

                if (
                    scrollPosition >=
                    section.offsetTop
                ) {

                    currentIndex =
                        index;

                }

            }
        );


        const current =
            currentIndex + 1;


        const total =
            visibleSections.length;


        const percentage =
            Math.round(
                (current / total) * 100
            );


        progressBar.style.width =
            percentage + "%";


        progressText.textContent =
            "Section " +
            current +
            " of " +
            total;


        progressPercent.textContent =
            percentage +
            "%";

    }


    window.addEventListener(
        "scroll",
        updateProgress
    );


    updateProgress();


});

</script>


<!-- Bootstrap JS -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>
</html>
