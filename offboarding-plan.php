<?php include __DIR__ . '/includes/header.php'; ?>

<script src="assets/libs/node-waves/waves.min.js"></script>

<?php
$responsibleOptions = ['Select Employee', 'Hasnain Zahid'];

$offboardingRows = [
    [
        'task' => 'Resignation from Employe',
        'lines' => [],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Completion of Notice Period',
        'lines' => [],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Offboarding - Voluntary Termination',
        'lines' => [],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Email to IT',
        'lines' => [
            'Email to Helpdesk for ID Deconfiguration',
            'Disable IT Assets',
            'Remove from PKFT Groups',
            'Deactivate Servers and drive access',
            'IT Clearance',
        ],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Email to Accounting',
        'lines' => [
            'To Deactivate TimeLive',
            'Check Insurance Policy,PTO Benefits, Loan etc',
            'Accounting Clearance',
        ],
        'responsible' => 'Hasnain Zahid',
    ],
    [
        'task' => 'Email to BMS',
        'lines' => [
            'Deactivate BMS Account',
            'Remove Employee from Org Chart >> Manage Employees',
            'HR will update reason of leaving in BMS',
        ],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Partner Portal',
        'lines' => [
            'Partner Manager will remove the ex- employees from all the partner portals (IBM, KnowB4, Kaspersky, Sophos etc..)',
        ],
        'responsible' => 'Select Employee',
    ],
    [
        'task' => 'Final Documentation',
        'lines' => [
            'HR will send Official Document to Employee HR will schedule Exit Interview with Employee and will draft a report and will send it to PKHR HR will update all the documents in BMS and HR Server',
        ],
        'responsible' => 'Select Employee',
    ],
];

$moduleName = 'Offboarding - Voluntary Termination';
$rowCount = count($offboardingRows);
?>

<div class="container-fluid">

    <div class="page-title-box d-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-0"><i class="bi bi-card-checklist me-2 text-primary"></i>Offboaridng Plan for PK Employee</h4>
        <button type="button" class="btn btn-primary waves-effect waves-light">
            <i class="bi bi-send me-1"></i>Send Email
        </button>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive table-card">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center bg-soft-info text-dark fw-bold py-2">
                                HR Offboaridng
                            </th>
                        </tr>
                        <tr class="table-light">
                            <th style="width:50px;">Sr No.</th>
                            <th style="width:20%;">Module</th>
                            <th>Task</th>
                            <th style="width:16%;">Responsible Party</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($offboardingRows as $index => $row): ?>
                            <tr class="bg-soft-success">
                                <td class="text-dark"><?= $index + 1 ?></td>

                                <?php if ($index === 0): ?>
                                    <td rowspan="<?= $rowCount ?>" class="align-middle">
                                        <?= htmlspecialchars($moduleName) ?>
                                        <div class="mt-1 d-flex gap-2">
                                            <a href="javascript:void(0);" class="text-dark waves-effect waves-light"><i class="bi bi-pencil-fill fs-14"></i></a>
                                            <a href="javascript:void(0);" class="text-dark waves-effect waves-light"><i class="bi bi-plus-lg fs-14"></i></a>
                                            <a href="javascript:void(0);" class="text-dark waves-effect waves-light"><i class="bi bi-trash fs-14"></i></a>
                                        </div>
                                    </td>
                                <?php endif; ?>

                                <td>
                                    <?php if (!empty($row['lines'])): ?>
                                        <div class="fw-bold mb-1"><?= htmlspecialchars($row['task']) ?></div>
                                        <?php foreach ($row['lines'] as $line): ?>
                                            <div><?= htmlspecialchars($line) ?></div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div><?= htmlspecialchars($row['task']) ?></div>
                                    <?php endif; ?>

                                    <div class="mt-2 d-flex gap-2">
                                        <a href="javascript:void(0);" class="text-dark waves-effect waves-light"><i class="bi bi-pencil-fill fs-14"></i></a>
                                        <a href="javascript:void(0);" class="text-dark waves-effect waves-light"><i class="bi bi-trash fs-14"></i></a>
                                    </div>
                                </td>

                                <td>
                                    <select class="form-select form-select-sm" name="responsible[<?= $index; ?>]">
                                        <?php foreach ($responsibleOptions as $option): ?>
                                            <option <?= $option === $row['responsible'] ? 'selected' : '' ?>>
                                                <?= htmlspecialchars($option) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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