
<?php include 'includes/header.php'; ?>

<?php
$objectives = [
    [
        'code' => 'C1',
        'title' => 'Financial Leadership Objectives',
        'icon' => 'bi-cash-coin',
        'tone' => 'success'
    ],
    [
        'code' => 'C2',
        'title' => 'Customer Leadership Objectives',
        'icon' => 'bi-person-heart',
        'tone' => 'primary'
    ],
    [
        'code' => 'C2',
        'title' => 'Partner Leadership Objectives',
        'icon' => 'bi-people',
        'tone' => 'info'
    ],
    [
        'code' => 'C2',
        'title' => 'Industry Leadership Objectives',
        'icon' => 'bi-buildings',
        'tone' => 'warning'
    ],
    [
        'code' => 'C3',
        'title' => 'Competencies Leadership Objectives',
        'icon' => 'bi-lightbulb',
        'tone' => 'danger'
    ],
    [
        'code' => 'C4',
        'title' => 'Team Leadership Objectives',
        'icon' => 'bi-diagram-3',
        'tone' => 'secondary'
    ]
];
?>

<div class="container-fluid">

    <div class="page-title-box">
        <div>
            <div class="eyebrow mb-1">Performance center</div>
            <h3 class="mb-1">Welcome to BMS Admin</h3>
            <p class="text-muted mb-0">
                Review your leadership objectives, quarterly progress, and team commitments.
            </p>
        </div>

        <a href="index.php" class="btn btn-light">
            <i class="bi bi-arrow-left me-1"></i>
            People
        </a>
    </div>

    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">
                <i class="bi bi-list-check me-2 text-primary"></i>
                Leadership objectives
            </h5>

            <ul class="nav nav-pills nav-sm">
                <li class="nav-item">
                    <a class="nav-link active" href="#roles">Roles</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#kpi">KPI</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#psp">PSP</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="row g-3">

                <?php foreach ($objectives as $objective): ?>

                    <div class="col-md-6 col-xl-4">
                        <div class="card objective-card border h-100">

                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <span class="objective-icon">
                                        <i class="bi <?= $objective['icon'] ?>"></i>
                                    </span>

                                    <span class="badge bg-<?= $objective['tone'] ?>-subtle text-<?= $objective['tone'] ?>">
                                        <?= $objective['code'] ?>
                                    </span>
                                </div>

                                <h6 class="mb-3">
                                    <?= $objective['title'] ?>
                                </h6>

                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span>
                                        <i class="bi bi-bullseye me-1"></i>
                                        Corporate Goals
                                    </span>

                                    <span>
                                        <i class="bi bi-person-check me-1"></i>
                                        My Goals
                                    </span>
                                </div>

                                <div class="d-flex gap-1">
                                    <?php for ($q = 1; $q <= 4; $q++): ?>
                                        <span class="objective-pill">
                                            Q<?= $q ?>
                                        </span>
                                    <?php endfor; ?>
                                </div>

                                <div class="progress mt-3" style="height: 5px;">
                                    <?php
                                    $loop = array_search($objective, $objectives, true);
                                    $progress = 45 + ($loop * 8);
                                    ?>

                                    <div
                                        class="progress-bar bg-<?= $objective['tone'] ?>"
                                        style="width: <?= $progress ?>%;"
                                    ></div>
                                </div>

                                <div class="d-flex justify-content-between mt-2 small text-muted">
                                    <span>Progress</span>
                                    <span><?= $progress ?>%</span>
                                </div>

                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="row g-4">

        <div class="col-lg-8">

            <div class="card h-100">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Quarterly focus
                    </h5>
                </div>

                <div class="card-body table-scroll">

                    <table class="table compact-table mb-0">

                        <thead>
                            <tr>
                                <th>Objective</th>
                                <th>Q1</th>
                                <th>Q2</th>
                                <th>Q3</th>
                                <th>Q4</th>
                                <th>Owner</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Improve delivery predictability</td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Done
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Done
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-warning-subtle text-warning">
                                        In progress
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark">
                                        Planned
                                    </span>
                                </td>

                                <td>Romesa</td>
                            </tr>

                            <tr>
                                <td>Build customer feedback loop</td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Done
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-warning-subtle text-warning">
                                        In progress
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark">
                                        Planned
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark">
                                        Planned
                                    </span>
                                </td>

                                <td>Romesa</td>
                            </tr>

                            <tr>
                                <td>Grow engineering capability</td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Done
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Done
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-warning-subtle text-warning">
                                        In progress
                                    </span>
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark">
                                        Planned
                                    </span>
                                </td>

                                <td>Technology</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card h-100">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        This quarter
                    </h5>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Completed</span>
                        <strong>8 / 14</strong>
                    </div>

                    <div class="progress mb-4" style="height: 8px;">
                        <div
                            class="progress-bar bg-success"
                            style="width: 57%;"
                        ></div>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Corporate goals</span>
                        <strong>6</strong>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">My goals</span>
                        <strong>8</strong>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span class="text-muted">Next review</span>
                        <strong>30 Sep 2026</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>

