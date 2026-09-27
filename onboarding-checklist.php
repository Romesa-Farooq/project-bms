<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container-fluid">

    <div class="page-title-box d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1"><i class="bi bi-card-checklist me-2"></i>OnBoarding Checklist for PK Employee</h3>
        </div>
        <a href="index.php" class="btn btn-light">
            <i class="bi bi-arrow-left me-1"></i>Back
        </a>
    </div>

    <?php
    $onboardingSections = [
        'Employee Documents' => [
            'Resume',
            'Offer Letter',
            'Job Description',
            'SPS Employee Service Agreement',
            'Employee Confidential and Proprietary Information and Non-Disclosure Agreement',
            'Background check Consent Letter',
            'Personal Information Form',
            'Emergency Contact Form',
            'Direct Deposit Form',
            'Employees Latest Degree, Photographs and copy of CNIC',
            'Experience letter',
            'Email Configuration request to help desk',
            'Time - Live configuration request to Accounting',
            'BMS Email Configuration request to BMS-Dev',
            'Reference Check Report',
        ],
        'Orientation' => [
            'Email accounting for Time- Live Orientation',
            'Email IT department for IT orientation',
            '101 - SPS Overview',
            '110 - Working at SPS - Part One',
            '120 - Working at SPS - Part Two',
            '130 - Working at SPS - Part Three',
            '130-01 - Guidelines to Social Computing',
            '140 - Succeeding at SPS',
            'BMS Orientation',
            'Send SPS Orientation Feed back form',
        ],
        'Administrative' => [
            'Welcome to SPS Team! Email to PKFT',
            'Set up in TimeLive system',
            'Getting Started with SPS! Email to Employee',
            'Asset Management form',
            'Office Key Assigned (if applicable)',
            'Desk Key (if applicable)',
            'Access Card Assigned',
            'Background Check report',
            'Payroll Information Form',
            'SPS Corporate Credit Card',
            'Add in PKFT, PKPT groups',
            'Add in sharepoint',
            'Add in IBM Partner World',
            'Send On boarding Feedback form',
            'Update Employee data on HR server',
            'Files',
        ],
    ];
    ?>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width:50px;">Sr No.</th>
                            <th>Name</th>
                            <th style="width:110px;" class="text-center">Applicable</th>
                            <th style="width:130px;" class="text-center">Not Applicable</th>
                            <th style="width:35%;">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($onboardingSections as $sectionName => $items): ?>
                            <tr class="table-light">
                                <td colspan="5" class="fw-bold text-center">
                                    <?= htmlspecialchars($sectionName) ?>
                                </td>
                            </tr>
                            <?php foreach ($items as $index => $itemName):
                                $rowKey = strtolower(str_replace(' ', '_', $sectionName)) . '_' . ($index + 1);
                            ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= htmlspecialchars($itemName) ?></td>
                                    <td class="text-center">
                                        <input type="radio" class="form-check-input" name="<?= $rowKey ?>" value="applicable">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" class="form-check-input" name="<?= $rowKey ?>" value="not_applicable">
                                    </td>
                                    <td>
                                        <textarea class="form-control form-control-sm" rows="1"></textarea>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-end bg-white">
            <button type="button" class="btn btn-primary">
                <i class="bi bi-check2-circle me-1"></i>Save Checklist
            </button>
        </div>
    </div>

</div>

<?php include __DIR__ . '/includes/footer.php'; ?>