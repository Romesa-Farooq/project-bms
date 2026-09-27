<?php include __DIR__ . '/includes/header.php'; ?>

<script src="assets/libs/node-waves/waves.min.js"></script>

<?php
$orientationModules = [
    [
        'sr' => 1,
        'title' => 'HR Orientation',
        'topics' => [
            ['title' => 'Welcome to SPS', 'link' => '#'],
            ['text' => 'if onsite then we can book a meeting room at NSTP and arrange an onboarding lunch. if online then we can have a general welcome introduction SPS'],
            ['title' => 'Org Chart', 'link' => '#'],
            ['text' => 'AI, Cloud, Security, Events, SPL, Sales, OPS'],
            ['title' => 'SPS Website Overview', 'link' => '#'],
            ['text' => 'About SPS Services, Products, Verticals, Partners, SPL, Activities'],
            ['title' => 'SPS Policies and Benefit Summary', 'link' => '#'],
            ['text' => 'HR will explain SPS policies, benefit summary, and Employee Handbook to the new hire']
        ],
        'day' => 'Monday',
        'date' => '2024-03-16',
        'duration' => '3 hours',
        'feedback' => ''
    ],
    [
        'sr' => 2,
        'title' => 'IT Orientation',
        'topics' => [
            ['text' => 'Your Device Access'],
            ['text' => 'Office 365 account activation'],
            ['text' => 'Teams account activation and policy'],
            ['text' => 'Helpdesk Services']
        ],
        'day' => '', 'date' => '', 'duration' => '', 'feedback' => ''
    ],
    [
        'sr' => 3,
        'title' => 'Accounting Orientation',
        'topics' => [
            ['text' => 'Compensation & Benefits'],
            ['text' => 'Job Codes'],
            ['text' => 'Time live'],
            ['text' => 'Claim Expenses']
        ],
        'day' => '', 'date' => '', 'duration' => '', 'feedback' => ''
    ],
    [
        'sr' => 4,
        'title' => 'BMS Orientation',
        'topics' => [
            ['text' => 'Sales (Products, Services, Partners, Customers, Contacts, RFP)'],
            ['text' => 'Marketing'],
            ['text' => 'Education'],
            ['text' => 'Spinnlabs']
        ],
        'day' => '', 'date' => '', 'duration' => '', 'feedback' => ''
    ],
    [
        'sr' => 5,
        'title' => 'Learning & Development',
        'topics' => [
            ['title' => 'KYC - Know Your Company', 'link' => '#'],
            ['title' => 'KYB - Know Your Business', 'link' => '#'],
            ['title' => 'KYR - Know Your Role', 'link' => '#'],
            ['title' => 'Partner Management', 'link' => '#']
        ],
        'day' => '', 'date' => '', 'duration' => '', 'feedback' => ''
    ]
];
?>

<div class="container-fluid">

    <div class="row align-items-center mb-3">
        <div class="col">
            <h4 class="card-title mb-0 d-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-text fs-5 align-middle text-muted"></i>
                Orientation Plan for PK Employee
            </h4>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary waves-effect waves-light">
                <i class="bi bi-send align-middle me-1"></i> Send Email
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <form action="" method="POST">
                        <div class="table-responsive table-card">
                            <table class="table table-bordered align-top mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th colspan="6" class="text-center bg-soft-primary text-dark fw-bold py-2">
                                            Orientation Plan
                                        </th>
                                    </tr>
                                    <tr class="bg-soft-secondary">
                                        <th style="width: 50px;">Sr No.</th>
                                        <th style="width: 30%;">
                                            Training Module
                                            <a href="javascript:void(0);" class="ms-1 text-dark waves-effect waves-light">
                                                <i class="bi bi-plus-lg fs-14 fw-bold"></i>
                                            </a>
                                        </th>
                                        <th style="width: 15%;">Day</th>
                                        <th style="width: 15%;">Date</th>
                                        <th style="width: 15%;">Duration</th>
                                        <th style="width: 25%;">Feedback</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($orientationModules as $index => $module): ?>
                                        <tr>
                                            <td class="text-center">
                                                <span class="avatar-title bg-soft-primary text-primary rounded-circle" style="width:28px;height:28px;font-size:12px;">
                                                    <?= $module['sr']; ?>
                                                </span>
                                            </td>

                                            <td>
                                                <div class="fw-bold text-dark mb-2"><?= htmlspecialchars($module['title']); ?></div>

                                                <div class="module-topics-list fs-13 text-muted">
                                                    <?php foreach ($module['topics'] as $topic): ?>
                                                        <?php if (isset($topic['title'])): ?>
                                                            <div class="mb-1">
                                                                <a href="<?= $topic['link'] ?? '#'; ?>" class="text-primary text-decoration-underline">
                                                                    <?= htmlspecialchars($topic['title']); ?>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if (isset($topic['text'])): ?>
                                                            <div class="mb-2 text-secondary">
                                                                <?= htmlspecialchars($topic['text']); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>

                                                <div class="mt-2 d-flex gap-2">
                                                    <a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-pencil-fill fs-14"></i></a>
                                                    <a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-trash fs-14"></i></a>
                                                </div>
                                            </td>

                                            <td>
                                                <input type="text" name="day[<?= $index; ?>]" class="form-control form-control-sm bg-white" value="<?= htmlspecialchars($module['day']); ?>">
                                            </td>

                                            <td>
                                                <div class="input-group input-group-sm">
                                                    <input type="date" name="date[<?= $index; ?>]" class="form-control bg-white" value="<?= htmlspecialchars($module['date']); ?>">
                                                </div>
                                            </td>

                                            <td>
                                                <input type="text" name="duration[<?= $index; ?>]" class="form-control form-control-sm bg-white" value="<?= htmlspecialchars($module['duration']); ?>">
                                            </td>

                                            <td>
                                                <textarea name="feedback[<?= $index; ?>]" class="form-control form-control-sm bg-white" rows="4"><?= htmlspecialchars($module['feedback']); ?></textarea>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Waves !== 'undefined') {
            Waves.init();
        }
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>