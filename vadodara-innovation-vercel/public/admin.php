<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

// Export CSV handler
if (isset($_GET['export'])) {
    $type = $_GET['export'];
    $conn = db();
    
    if ($type === 'institution') {
        $filename = 'institution_registrations_' . date('Y-m-d') . '.csv';
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);
        
        $output = fopen('php://output', 'w');
        fputcsv($output, [
            'ID', 'Institution Name', 'Type', 'Address', 'Ward/Area', 'Student Strength',
            'Coordinator Name', 'Designation/Dept', 'Mobile', 'Email', 'Awareness Methods',
            'Students Reached', 'Challenge Themes', 'Entry Types', 'Total Entries',
            'Shortlisted Entries', 'Shortlisted Details', 'Activity Report', 'Photos Link',
            'Video Link', 'Maps Link', 'Govt Supported', 'Govt Count', 'Govt Details',
            'Govt Reel Folder', 'Patents', 'Designs', 'Copyrights', 'Trademarks',
            'Startup Data', 'Innovation Research Data', 'Ecosystem Support', 'Specific Facility',
            'Confirmation', 'Authorized Coordinator', 'Confirmation Date', 'Created At'
        ]);
        
        if ($conn instanceof mysqli) {
            $res = $conn->query("SELECT * FROM institution_registrations ORDER BY id DESC");
            while ($row = $res->fetch_assoc()) {
                fputcsv($output, $row);
            }
        } elseif ($conn instanceof SqliteDbWrapper) {
            $pdoProp = (new ReflectionClass($conn))->getProperty('pdo');
            $pdoProp->setAccessible(true);
            $pdo = $pdoProp->getValue($conn);
            $stmt = $pdo->query("SELECT * FROM institution_registrations ORDER BY id DESC");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                fputcsv($output, $row);
            }
        }
        fclose($output);
        exit;
    } elseif ($type === 'ecosystem') {
        $filename = 'ecosystem_registrations_' . date('Y-m-d') . '.csv';
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);
        
        $output = fopen('php://output', 'w');
        fputcsv($output, [
            'ID', 'Full Name', 'Mobile', 'Email', 'Registering As', 'City', 'Vidhan Sabha',
            'Ward Number', 'Area/Locality', 'Google Maps Location', 'Organisation Name',
            'Designation/Role', 'Website/Social', 'Expertise', 'Support Provided',
            'Support Description', 'Startup Name', 'Problem Addressed', 'Solution',
            'Current Stage', 'IPR Status', 'Demo Link', 'Investment Type', 'Startup Stage Interest',
            'Preferred Sector', 'Funding Range', 'Mentor Expertise', 'Mentor Support',
            'Mentor Availability', 'Institution Type', 'Facilities', 'Startups/IPRs Count',
            'Institution Support', 'Support Type', 'Support Details', 'Individual Contribution',
            'Individual Contribution Details', 'Consent', 'Additional Info', 'Created At'
        ]);
        
        if ($conn instanceof mysqli) {
            $res = $conn->query("SELECT * FROM ecosystem_registrations ORDER BY id DESC");
            while ($row = $res->fetch_assoc()) {
                fputcsv($output, $row);
            }
        } elseif ($conn instanceof SqliteDbWrapper) {
            $pdoProp = (new ReflectionClass($conn))->getProperty('pdo');
            $pdoProp->setAccessible(true);
            $pdo = $pdoProp->getValue($conn);
            $stmt = $pdo->query("SELECT * FROM ecosystem_registrations ORDER BY id DESC");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                fputcsv($output, $row);
            }
        }
        fclose($output);
        exit;
    }
}

// Fetch Records for Display
$institutions = [];
$ecosystems = [];
$errorMsg = null;

try {
    $conn = db();
    if ($conn instanceof mysqli) {
        $resInst = $conn->query("SELECT * FROM institution_registrations ORDER BY id DESC");
        if ($resInst) {
            while ($row = $resInst->fetch_assoc()) {
                $institutions[] = $row;
            }
        }
        $resEco = $conn->query("SELECT * FROM ecosystem_registrations ORDER BY id DESC");
        if ($resEco) {
            while ($row = $resEco->fetch_assoc()) {
                $ecosystems[] = $row;
            }
        }
    } elseif ($conn instanceof SqliteDbWrapper) {
        $pdoProp = (new ReflectionClass($conn))->getProperty('pdo');
        $pdoProp->setAccessible(true);
        $pdo = $pdoProp->getValue($conn);
        
        $stmtInst = $pdo->query("SELECT * FROM institution_registrations ORDER BY id DESC");
        if ($stmtInst) {
            $institutions = $stmtInst->fetchAll(PDO::FETCH_ASSOC);
        }
        
        $stmtEco = $pdo->query("SELECT * FROM ecosystem_registrations ORDER BY id DESC");
        if ($stmtEco) {
            $ecosystems = $stmtEco->fetchAll(PDO::FETCH_ASSOC);
        }
    }
} catch (Throwable $e) {
    $errorMsg = $e->getMessage();
}

$totalInstitutions = count($institutions);
$totalEcosystems = count($ecosystems);
$totalRegistrations = $totalInstitutions + $totalEcosystems;

$totalStudentsReached = 0;
$totalEntries = 0;
foreach ($institutions as $inst) {
    $totalStudentsReached += (int)($inst['students_reached'] ?? 0);
    $totalEntries += (int)($inst['total_entries'] ?? 0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard – Vadodara Innovation 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; color: #1e293b; }
        .dashboard-header { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #fff; padding: 2rem 0; margin-bottom: 2rem; border-radius: 0 0 16px 16px; }
        .stat-card { background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 1.25rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03); }
        .stat-value { font-size: 1.8rem; font-weight: 800; color: #0f172a; }
        .stat-label { font-size: 0.85rem; font-weight: 600; color: #64748b; text-transform: uppercase; }
        .table-card { background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 1.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03); }
        .badge-type { font-size: 0.75rem; padding: 0.35em 0.65em; border-radius: 6px; }
        .search-box { max-width: 320px; }
    </style>
</head>
<body>

<div class="dashboard-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="fw-bold mb-1"><i class="bi bi-speedometer2 me-2"></i>Vadodara Innovation 2026 Admin</h2>
                <p class="mb-0 opacity-75">Live Submissions & Registration Data Dashboard</p>
            </div>
            <div>
                <a href="/" class="btn btn-outline-light btn-sm me-2"><i class="bi bi-house me-1"></i>Portal Home</a>
                <a href="/institution-form.php" class="btn btn-light btn-sm me-2"><i class="bi bi-building me-1"></i>Institution Form</a>
                <a href="/ecosystem-form.php" class="btn btn-light btn-sm"><i class="bi bi-people me-1"></i>Ecosystem Form</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">

    <?php if ($errorMsg): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i><strong>Database Error:</strong> <?= htmlspecialchars($errorMsg) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Summary Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-label">Total Submissions</div>
                <div class="stat-value text-primary"><?= number_format($totalRegistrations) ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-label">Institution Forms</div>
                <div class="stat-value text-success"><?= number_format($totalInstitutions) ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-label">Ecosystem Registrations</div>
                <div class="stat-value text-info"><?= number_format($totalEcosystems) ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-card">
                <div class="stat-label">Students Reached</div>
                <div class="stat-value text-warning"><?= number_format($totalStudentsReached) ?></div>
            </div>
        </div>
    </div>

    <!-- Main Content Tabs -->
    <div class="table-card">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <ul class="nav nav-pills" id="adminTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-semibold" id="inst-tab" data-bs-toggle="tab" data-bs-target="#inst-pane" type="button" role="tab">
                        <i class="bi bi-building me-1"></i>Institution Registrations (<?= $totalInstitutions ?>)
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold" id="eco-tab" data-bs-toggle="tab" data-bs-target="#eco-pane" type="button" role="tab">
                        <i class="bi bi-person-lines-fill me-1"></i>Ecosystem Registrations (<?= $totalEcosystems ?>)
                    </button>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <input type="text" id="searchInput" class="form-control form-control-sm search-box" placeholder="🔍 Search records...">
            </div>
        </div>

        <div class="tab-content" id="adminTabsContent">

            <!-- Institution Tab Pane -->
            <div class="tab-pane fade show active" id="inst-pane" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold m-0">Education Institution Data & Participation</h5>
                    <a href="?export=institution" class="btn btn-success btn-sm"><i class="bi bi-file-earmark-spreadsheet me-1"></i>Export CSV</a>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="instTable">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Institution Name</th>
                                <th>Type</th>
                                <th>Coordinator</th>
                                <th>Contact</th>
                                <th>Students Reached</th>
                                <th>Total Entries</th>
                                <th>Submitted At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($institutions)): ?>
                                <tr>
                                    <td colspan="9" class="text-center py-4 text-muted">No institution registrations found yet.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($institutions as $inst): ?>
                                    <tr>
                                        <td class="fw-bold">#<?= htmlspecialchars((string)$inst['id']) ?></td>
                                        <td class="fw-semibold"><?= htmlspecialchars($inst['institution_name'] ?? '') ?></td>
                                        <td><span class="badge bg-primary badge-type"><?= htmlspecialchars($inst['institution_type'] ?? '') ?></span></td>
                                        <td>
                                            <?= htmlspecialchars($inst['coordinator_name'] ?? '') ?><br>
                                            <small class="text-muted"><?= htmlspecialchars($inst['designation_department'] ?? '') ?></small>
                                        </td>
                                        <td>
                                            <i class="bi bi-telephone text-muted"></i> <?= htmlspecialchars($inst['mobile'] ?? '') ?><br>
                                            <i class="bi bi-envelope text-muted"></i> <?= htmlspecialchars($inst['email'] ?? '') ?>
                                        </td>
                                        <td class="fw-bold text-center"><?= number_format((int)($inst['students_reached'] ?? 0)) ?></td>
                                        <td class="fw-bold text-center"><?= number_format((int)($inst['total_entries'] ?? 0)) ?></td>
                                        <td><small class="text-muted"><?= htmlspecialchars($inst['created_at'] ?? '') ?></small></td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm" onclick='showInstModal(<?= json_encode($inst, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP) ?>)'>
                                                <i class="bi bi-eye me-1"></i>Details
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ecosystem Tab Pane -->
            <div class="tab-pane fade" id="eco-pane" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold m-0">Innovation & Support Ecosystem Registrations</h5>
                    <a href="?export=ecosystem" class="btn btn-success btn-sm"><i class="bi bi-file-earmark-spreadsheet me-1"></i>Export CSV</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="ecoTable">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Registering As</th>
                                <th>City / Area</th>
                                <th>Contact</th>
                                <th>Expertise</th>
                                <th>Submitted At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($ecosystems)): ?>
                                <tr>
                                    <td colspan="8" class="text-center py-4 text-muted">No ecosystem registrations found yet.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($ecosystems as $eco): ?>
                                    <tr>
                                        <td class="fw-bold">#<?= htmlspecialchars((string)$eco['id']) ?></td>
                                        <td class="fw-semibold"><?= htmlspecialchars($eco['full_name'] ?? '') ?></td>
                                        <td><span class="badge bg-secondary badge-type"><?= htmlspecialchars($eco['registering_as'] ?? '') ?></span></td>
                                        <td>
                                            <?= htmlspecialchars($eco['city'] ?? '') ?><br>
                                            <small class="text-muted"><?= htmlspecialchars($eco['area_locality'] ?? '') ?></small>
                                        </td>
                                        <td>
                                            <i class="bi bi-telephone text-muted"></i> <?= htmlspecialchars($eco['mobile'] ?? '') ?><br>
                                            <i class="bi bi-envelope text-muted"></i> <?= htmlspecialchars($eco['email'] ?? '') ?>
                                        </td>
                                        <td><small><?= htmlspecialchars($eco['expertise'] ?? '') ?></small></td>
                                        <td><small class="text-muted"><?= htmlspecialchars($eco['created_at'] ?? '') ?></small></td>
                                        <td>
                                            <button class="btn btn-outline-primary btn-sm" onclick='showEcoModal(<?= json_encode($eco, JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP) ?>)'>
                                                <i class="bi bi-eye me-1"></i>Details
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal Viewer -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold" id="modalTitle">Registration Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Dynamic Content -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const modal = new bootstrap.Modal(document.getElementById('detailsModal'));

    function showInstModal(data) {
        document.getElementById('modalTitle').innerText = 'Institution Registration: ' + (data.institution_name || '');
        let html = '<div class="table-responsive"><table class="table table-bordered table-sm">';
        for (const [key, val] of Object.entries(data)) {
            const formattedKey = key.replace(/_/g, ' ').toUpperCase();
            html += `<tr><th style="width:35%; background:#f8fafc;">${formattedKey}</th><td>${val !== null && val !== undefined ? String(val) : '<span class="text-muted">-</span>'}</td></tr>`;
        }
        html += '</table></div>';
        document.getElementById('modalBody').innerHTML = html;
        modal.show();
    }

    function showEcoModal(data) {
        document.getElementById('modalTitle').innerText = 'Ecosystem Registration: ' + (data.full_name || '');
        let html = '<div class="table-responsive"><table class="table table-bordered table-sm">';
        for (const [key, val] of Object.entries(data)) {
            const formattedKey = key.replace(/_/g, ' ').toUpperCase();
            html += `<tr><th style="width:35%; background:#f8fafc;">${formattedKey}</th><td>${val !== null && val !== undefined ? String(val) : '<span class="text-muted">-</span>'}</td></tr>`;
        }
        html += '</table></div>';
        document.getElementById('modalBody').innerHTML = html;
        modal.show();
    }

    // Live search filter
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const query = this.value.toLowerCase();
        const activePane = document.querySelector('.tab-pane.active');
        const rows = activePane.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(query) ? '' : 'none';
        });
    });
</script>
</body>
</html>
