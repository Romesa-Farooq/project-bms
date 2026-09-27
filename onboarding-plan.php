<?php include __DIR__ . '/includes/header.php'; ?>

<?php
function rowActionIcons(string $label): string
{
    $label = htmlspecialchars($label);
    return '
        <span class="table-action-icons">
            <a href="#" class="text-muted me-2" title="Edit ' . $label . '"><i class="bi bi-pencil-fill"></i></a>
            <a href="#" class="text-muted me-2" title="Add under ' . $label . '"><i class="bi bi-plus-lg"></i></a>
            <a href="#" class="text-muted" title="Delete ' . $label . '"><i class="bi bi-trash"></i></a>
        </span>
    ';
}

$responsibleOptions = ['Select Employee', 'Hasnain Zahid', 'Talha Kaleem'];

$onboardingPlan = [
    'Recruitment/Pre Onboarding' => [
        'rowClass' => 'row-green',
        'rows' => [
            ['task' => 'Role Enablement', 'subtask' => "1. The hiring manager will create a role under roles and responsibilities in BMS.\n2. Create a job under manage jobs and fill out the form.", 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Job Analysis', 'subtask' => "1. Send email to PKHR and discuss the position and HR will OPEN it on SPS Website.\n2. HR will post the job on LinkedIn, Indeed, Website", 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Resume Screening + Phone Screening', 'subtask' => 'HR will resume and phone screen the potential candidates and share the report with the hiring manager', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Technical Interview', 'subtask' => 'Hiring manager will short list the candidates and will share the final list with HR to schedule the technical interview.', 'responsible' => 'Select Employee'],
            ['task' => 'Final Interview', 'subtask' => 'Hiring manager and HR will do final interview and fill shortlist the candidates to hire.', 'responsible' => 'Select Employee'],
            ['task' => 'Offer Letter', 'subtask' => 'HR wil prepare the offer letters and will send them to the shortlisted candidates via BMS.', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Offer letter Accepted/Rejected', 'subtask' => 'Those who have accepted the offer we can send the agreement and other letters.', 'responsible' => 'Select Employee'],
        ],
    ],
    'Onboarding' => [
        'rowClass' => 'row-peach',
        'rows' => [
            ['task' => 'Draft Official Documents', 'subtask' => 'HR will draft and send the NDA, Consent Letter, SPS Agreement and send it to the candidates.', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Email to SPS IT for Offical email configuration', 'subtask' => 'HR send email to IT to configure the email address and Device', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Email Accounting for TimeLive', 'subtask' => 'HR will send email to Accounting to configure the timelive', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Email BMS for BMS Enablement', 'subtask' => 'HR will send email to BMS to configure the BMS Account', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'HR and BMS Orientation', 'subtask' => 'HR will send an email to new hire for HR and BMS Orientation', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'IT Orientation', 'subtask' => 'HR will send an email to IT for IT Orientation', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Accounting Orientation', 'subtask' => 'Reporting Manager will give job codes to the new hire', 'responsible' => 'Select Employee'],
            ['task' => 'Job Code', 'subtask' => 'HR will send 0365 Account + Timelive + BMS Account Credentials to new hire', 'responsible' => 'Select Employee'],
            ['task' => 'Getting Started with SPS (Email)', 'subtask' => 'HR will send an Welcome Email to PKFT Emplyoyees', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Send Welcome Email', 'subtask' => 'HR will send an email to Accounting for Accounting Orientation', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Candidate Return Back the Signed Document', 'subtask' => 'HR will send back the counter signed docs to Candidate', 'responsible' => 'Select Employee'],
        ],
    ],
    'Orientation' => [
        'rowClass' => 'row-peach',
        'rows' => [
            [
                'task' => 'HR Oirientation',
                'subtaskHtml' => '
                    <strong>Welcome to SPS</strong><br>
                    if onsite then we can book a meeting room at NSTP and arrange a onboarding lunch.<br>
                    if online then we can have a general welcome introduction<br>
                    <strong>SPS Org Chart</strong><br>
                    AI, Cloud, Security, Events, SPL, Sales, OPS<br>
                    <strong>SPS Website Overview</strong><br>
                    About SPS Services, Products, Verticals, Partners, SPL, Activities<br>
                    <strong>SPS Policies and Benefit Summary</strong><br>
                    HR will explain SPS policies, benefit summary, and Employee Handbook to the new hire<br>
                    <strong>Learning &amp; Development</strong><br>
                    KYC - Getting Started with SPS, Leading your team to success, Operations, Sales, Technical.<br>
                    KYB - OPS, Technical and Sales<br>
                    KYR - OPS, Technical and Sales<br>
                    Partner Management<br>
                    <strong>Personal Success Plan</strong><br>
                    Objectives and Key Results<br>
                    Roles, Personal Mission, Professional Development, KPI1, KPI2, KPI3, KPI4
                ',
                'responsible' => 'Hasnain Zahid',
            ],
            ['task' => 'IT Orientation', 'subtask' => 'Your Device Access, Office 365, Teams, Helpdesk', 'responsible' => 'Talha Kaleem'],
            ['task' => 'BMS Orientation', 'subtask' => 'HR, Sales (Products, Services, Partners, Customers, Contacts,RFP) Markekting, Education and SPL', 'responsible' => 'Hasnain Zahid'],
            ['task' => 'Accounting Orientation', 'subtask' => 'Compensation & Benefits, Job Codes, Time live, Claim Expenses', 'responsible' => 'Select Employee'],
            ['task' => 'Meeting with Reporting Manager', 'subtask' => 'The New hire will meet the Reporting manager. HR will schedule the initial meeting after the Orientation sessions', 'responsible' => 'Select Employee'],
            ['task' => 'Orientation Feedback', 'subtask' => 'HR will send the On Boarding and Orientation Feedback form to new hire', 'responsible' => 'Hasnain Zahid'],
        ],
    ],
    'Post Onboarding' => [
        'rowClass' => 'row-peach',
        'rows' => [
            ['task' => 'Send the Data on HR Server and BMS', 'subtask' => 'HR will save all the data under Legal BMS and HR Server', 'responsible' => 'Hasnain Zahid'],
            ['task' => '15 Days Perfromace Review', 'subtask' => 'HR and Hiring manager will do 15 Days perfromace Review', 'responsible' => 'Select Employee'],
            ['task' => 'One Month Perfromace Review', 'subtask' => 'HR and Hiring manager will do 1 month perfromace Review', 'responsible' => 'Select Employee'],
        ],
    ],
];

$srCounter = 1;
?>

<div class="container-fluid">

    <div class="page-title-box d-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0"><i class="bi bi-card-checklist me-2 text-primary"></i>Onboaridng Plan for PK Employee</h4>
        <button type="button" class="btn btn-primary">
            <i class="bi bi-envelope me-1"></i>Send Email
        </button>
    </div>

    <div class="card onboarding-plan-card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0 onboarding-plan-table">
                    <thead>
                        <tr>
                            <th colspan="5" class="text-center section-banner">HR Onboaridng</th>
                        </tr>
                        <tr class="table-light">
                            <th style="width:50px;">Sr No.</th>
                            <th style="width:14%;">Module</th>
                            <th style="width:20%;">Task</th>
                            <th>Sub Task</th>
                            <th style="width:14%;">Responsible Party</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($onboardingPlan as $moduleName => $moduleData):
                            $rowCount = count($moduleData['rows']);
                            foreach ($moduleData['rows'] as $rowIndex => $row): ?>
                                <tr class="<?= htmlspecialchars($moduleData['rowClass']) ?>">
                                    <td class="text-muted"><?= $srCounter++ ?></td>

                                    <?php if ($rowIndex === 0): ?>
                                        <td rowspan="<?= $rowCount ?>" class="align-top fw-medium">
                                            <?= htmlspecialchars($moduleName) ?>
                                            <?= rowActionIcons($moduleName) ?>
                                        </td>
                                    <?php endif; ?>

                                    <td>
                                        <?= htmlspecialchars($row['task']) ?>
                                        <?= rowActionIcons($row['task']) ?>
                                    </td>

                                    <td class="text-muted">
                                        <?= $row['subtaskHtml'] ?? nl2br(htmlspecialchars($row['subtask'])) ?>
                                        <?= rowActionIcons($row['task'] . ' subtask') ?>
                                    </td>

                                    <td>
                                        <select class="form-select form-select-sm">
                                            <?php foreach ($responsibleOptions as $option): ?>
                                                <option <?= $option === $row['responsible'] ? 'selected' : '' ?>>
                                                    <?= htmlspecialchars($option) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                            <?php endforeach;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<style>
    .onboarding-plan-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 16px rgba(36, 75, 99, .08);
        overflow: hidden;
    }

    .onboarding-plan-table thead .section-banner {
        background: #cfe9f2;
        color: #1f5f79;
        font-weight: 600;
        letter-spacing: .02em;
        padding: 10px 0;
    }

    .onboarding-plan-table thead th {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .03em;
        color: #6b7785;
    }

    .onboarding-plan-table td {
        padding: 14px 16px;
        vertical-align: top;
    }

    .onboarding-plan-table tr.row-green td {
        background: #e9f7ec;
    }

    .onboarding-plan-table tr.row-peach td {
        background: #fdece0;
    }

    .onboarding-plan-table tr.row-green:hover td {
        background: #dcf1e1;
    }

    .onboarding-plan-table tr.row-peach:hover td {
        background: #fbe0cd;
    }

    .onboarding-plan-table .table-action-icons a {
        display: inline-block;
        font-size: 12px;
        opacity: .65;
        transition: opacity .15s ease, color .15s ease;
    }

    .onboarding-plan-table .table-action-icons a:hover {
        opacity: 1;
        color: #3199bd !important;
    }

    .onboarding-plan-table .form-select-sm {
        border-radius: 8px;
    }
</style>

<?php include __DIR__ . '/includes/footer.php'; ?>