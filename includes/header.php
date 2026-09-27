<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPS-BMS | Human Resource Management</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.min.css">
    <link rel="stylesheet" href="css/custom.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { background: #f4f7fb; }
        .bms-navbar { background: #3199bd; box-shadow: 0 2px 12px rgba(36, 75, 99, .12); }
        .bms-navbar .navbar-brand, .bms-navbar .nav-link { color: white; }
        .bms-navbar .nav-link:hover, .bms-navbar .nav-link.active { color: #eaf7fb; background: rgba(255,255,255,.12); }
        .bms-navbar .navbar-toggler { border-color: rgba(255,255,255,.45); }
        .bms-navbar .navbar-toggler-icon { filter: brightness(0) invert(1); }
        .page-content { padding: 24px; }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg bms-navbar">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php">
            <span class="bms-brand-mark"><i class="bi bi-grid-1x2-fill"></i></span>
            <span>SPS-BMS</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#bmsNavigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="bmsNavigation">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="bi bi-people me-1"></i>People</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php"><i class="bi bi-person-badge me-1"></i>Profile</a>
                </li>

            </ul>

            <span class="text-white small">
                <i class="bi bi-person-circle"></i>
                Welcome Admin <i class="bi bi-chevron-down ms-1"></i>
            </span>

        </div>
    </div>
</nav>

<div class="page-content">