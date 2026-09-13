<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$type = $_GET['type'] ?? '';
$title = $type === 'institution' ? 'Institution Registration Submitted' : 'Ecosystem Registration Submitted';
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><link rel="icon" href="/favicon.ico" sizes="any"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Success</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="/assets/style.css"></head>
<body><main class="wrap"><div class="card-section home-card p-5 text-center">
<div class="display-3 text-success">✓</div><h1 class="fw-bold"><?=htmlspecialchars($title)?></h1>
<p class="text-muted">Your information has been saved successfully.</p><p class="fw-bold">Registration ID: #<?=htmlspecialchars((string)$id)?></p>
<a href="/" class="btn-main text-decoration-none d-inline-block">Back to Home</a>
</div></main></body></html>