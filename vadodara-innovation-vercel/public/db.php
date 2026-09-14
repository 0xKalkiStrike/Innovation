<?php
declare(strict_types=1);

class SqliteStatementWrapper {
    private PDOStatement $stmt;
    private PDO $pdo;
    private array $params = [];
    public int $insert_id = 0;

    public function __construct(PDOStatement $stmt, PDO $pdo) {
        $this->stmt = $stmt;
        $this->pdo = $pdo;
    }

    public function bind_param(string $types, mixed &...$vars): bool {
        $this->params = $vars;
        return true;
    }

    public function execute(): bool {
        $res = $this->stmt->execute($this->params);
        $this->insert_id = (int)$this->pdo->lastInsertId();
        return $res;
    }

    public function close(): bool {
        return true;
    }
}

class SqliteDbWrapper {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function prepare(string $sql): SqliteStatementWrapper {
        $pdoStmt = $this->pdo->prepare($sql);
        return new SqliteStatementWrapper($pdoStmt, $this->pdo);
    }

    public function set_charset(string $charset): bool {
        return true;
    }

    public function close(): bool {
        return true;
    }
}

function init_sqlite_tables(PDO $pdo): void {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS institution_registrations (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            institution_name TEXT NOT NULL,
            institution_type TEXT NOT NULL,
            institution_address TEXT NOT NULL,
            ward_area TEXT NOT NULL,
            total_student_strength INTEGER NOT NULL,
            coordinator_name TEXT NOT NULL,
            designation_department TEXT NOT NULL,
            mobile TEXT NOT NULL,
            email TEXT NOT NULL,
            awareness_methods TEXT NOT NULL,
            students_reached INTEGER NOT NULL,
            challenge_themes TEXT NOT NULL,
            entry_types TEXT NOT NULL,
            total_entries INTEGER NOT NULL,
            shortlisted_entries INTEGER NOT NULL,
            shortlisted_details TEXT NOT NULL,
            activity_report TEXT NOT NULL,
            activity_photos_link TEXT,
            activity_video_link TEXT,
            maps_link TEXT,
            government_supported TEXT NOT NULL,
            government_count INTEGER,
            government_project_details TEXT,
            government_reel_folder TEXT,
            patent_count INTEGER NOT NULL DEFAULT 0,
            design_count INTEGER NOT NULL DEFAULT 0,
            copyright_count INTEGER NOT NULL DEFAULT 0,
            trademark_count INTEGER NOT NULL DEFAULT 0,
            startup_data TEXT,
            innovation_research_data TEXT,
            ecosystem_support TEXT NOT NULL,
            specific_facility TEXT,
            confirmation INTEGER NOT NULL DEFAULT 0,
            authorized_coordinator TEXT NOT NULL,
            confirmation_date TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );

        CREATE TABLE IF NOT EXISTS ecosystem_registrations (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            full_name TEXT NOT NULL,
            mobile TEXT NOT NULL,
            email TEXT NOT NULL,
            registering_as TEXT NOT NULL,
            city TEXT NOT NULL,
            vidhan_sabha TEXT NOT NULL,
            ward_number TEXT NOT NULL,
            area_locality TEXT NOT NULL,
            google_maps_location TEXT,
            organisation_name TEXT,
            designation_role TEXT NOT NULL,
            website_social_link TEXT,
            expertise TEXT NOT NULL,
            support_you_can_provide TEXT NOT NULL,
            support_description TEXT,
            innovation_startup_name TEXT,
            problem_being_addressed TEXT,
            innovation_solution TEXT,
            current_stage TEXT,
            ipr_status TEXT,
            project_demo_link TEXT,
            investment_type TEXT,
            startup_stage_interest TEXT,
            preferred_sector TEXT,
            investment_funding_range TEXT,
            mentor_expertise TEXT,
            mentor_support_offered TEXT,
            mentor_availability TEXT,
            institution_type TEXT,
            facilities_capabilities TEXT,
            number_of_startups_projects_iprs TEXT,
            institution_ecosystem_support TEXT,
            support_type TEXT,
            support_details TEXT,
            individual_contribution TEXT,
            individual_contribution_details TEXT,
            consent INTEGER NOT NULL DEFAULT 0,
            additional_information TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");
}

function db(): object {
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $user = getenv('DB_USER') ?: 'root';
    $pass = getenv('DB_PASSWORD') ?: '';
    $name = getenv('DB_NAME') ?: 'innovation_ecosystem_2026';
    $port = (int)(getenv('DB_PORT') ?: 3306);

    // Attempt MySQL if configured or default
    try {
        if (class_exists('mysqli_driver')) {
            $driver = new mysqli_driver();
            $driver->report_mode = MYSQLI_REPORT_OFF;
        }
        $conn = @new mysqli($host, $user, $pass, $name, $port);
        if (!$conn->connect_error) {
            $conn->set_charset('utf8mb4');
            return $conn;
        }
    } catch (Throwable $e) {
        // MySQL connection failed, proceed to SQLite fallback
    }

    // Fallback to SQLite
    try {
        $sqlitePath = getenv('SQLITE_PATH') ?: (sys_get_temp_dir() . '/innovation_ecosystem.sqlite');
        $pdo = new PDO('sqlite:' . $sqlitePath);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        init_sqlite_tables($pdo);
        return new SqliteDbWrapper($pdo);
    } catch (Throwable $sqliteErr) {
        throw new RuntimeException('Database connection failed: MySQL and SQLite fallback both unavailable (' . $sqliteErr->getMessage() . ')');
    }
}

function post_string(string $key): string {
    return isset($_POST[$key]) && !is_array($_POST[$key])
        ? trim((string)$_POST[$key])
        : '';
}

function post_array(string $key): string {
    if (!isset($_POST[$key])) return '';
    $value = $_POST[$key];
    if (!is_array($value)) return trim((string)$value);
    $value = array_map(fn($v) => trim((string)$v), $value);
    $value = array_values(array_filter($value, fn($v) => $v !== ''));
    return implode(', ', $value);
}

