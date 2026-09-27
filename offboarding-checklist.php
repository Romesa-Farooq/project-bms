<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container-fluid">

    <div class="page-title-box d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="mb-1"><i class="bi bi-card-checklist me-2"></i>Offboarding Checklist</h3>
        </div>
        <a href="index.php" class="btn btn-light">
            <i class="bi bi-arrow-left me-1"></i>Back
        </a>
    </div>

    <?php
    $offboardingSections = [
        'Access & Systems' => [
            'Disable Email',
            'Disable user from Directory Server',
            'Remove all Group Memberships',
            'Disable CSM Account',
            'Disable BMS Account',
            'Disable FTP Account',
            'Disable IBM Cloud Account',
            'Update DHCP Server',
        ],
        'Assets & Handover' => [
            'Hardware handed over',
            'Office Key returned (if applicable)',
            'Desk Key returned (if applicable)',
            'Access Card returned',
            'SPS Corporate Credit Card returned',
            'Biometric attendance user removal',
        ],
        'Administrative' => [
            'Data Backup',
            'Remove from PKFT, PKPT groups',
            'Remove from sharepoint',
            'Remove from IBM Partner World',
            'Final settlement / payroll closure',
            'Exit interview completed',
            'Update Employee data on HR server',
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
                            <th>Checklist item</th>
                            <th style="width:110px;" class="text-center">Applicable</th>
                            <th style="width:130px;" class="text-center">Not Applicable</th>
                            <th style="width:35%;">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($offboardingSections as $sectionName => $items): ?>
                            <tr class="table-light">
                                <td colspan="5" class="fw-bold text-center">
                                    <?= htmlspecialchars($sectionName) ?>
                                </td>
                            </tr>
                            <?php foreach ($items as $index => $itemName):
                                $rowKey = strtolower(str_replace([' ', '&'], ['_', 'and'], $sectionName)) . '_' . ($index + 1);
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