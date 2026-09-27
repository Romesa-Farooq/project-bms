<?php include __DIR__ . '/includes/header.php'; ?>

<script src="assets/libs/node-waves/waves.min.js"></script>

<?php
$priorityStyles = [
    'High'   => 'bg-soft-danger text-danger',
    'Medium' => 'bg-soft-warning text-warning',
    'Low'    => 'bg-soft-secondary text-secondary',
];

$statusStyles = [
    'Open'        => 'bg-soft-info text-info',
    'In Progress' => 'bg-soft-primary text-primary',
    'Filled'      => 'bg-soft-success text-success',
    'On Hold'     => 'bg-soft-dark text-dark',
];

$responsibleOptions = ['Select Employee', 'Hasnain Zahid', 'Talha Kaleem'];

$demandRows = [
    [
        'client' => 'IBM',
        'position' => 'Cloud Security Engineer',
        'headcount' => 2,
        'priority' => 'High',
        'status' => 'Open',
        'responsible' => 'Hasnain Zahid',
        'notes' => 'Client needs candidates with active security clearance experience.',
    ],
    [
        'client' => 'Sophos',
        'position' => 'Software Engineer (Backend)',
        'headcount' => 1,
        'priority' => 'Medium',
        'status' => 'In Progress',
        'responsible' => 'Talha Kaleem',
        'notes' => 'Technical interviews scheduled for shortlisted candidates.',
    ],
    [
        'client' => 'Kaspersky',
        'position' => 'QA Automation Engineer',
        'headcount' => 1,
        'priority' => 'Medium',
        'status' => 'Open',
        'responsible' => 'Select Employee',
        'notes' => '',
    ],
    [
        'client' => 'KnowB4',
        'position' => 'Sales Executive',
        'headcount' => 3,
        'priority' => 'Low',
        'status' => 'On Hold',
        'responsible' => 'Select Employee',
        'notes' => 'Client paused hiring for this quarter.',
    ],
    [
        'client' => 'Internal - SPS',
        'position' => 'HR Coordinator',
        'headcount' => 1,
        'priority' => 'High',
        'status' => 'Filled',
        'responsible' => 'Hasnain Zahid',
        'notes' => 'Offer accepted, start date confirmed.',
    ],
];
?>

<div class="container-fluid">

    <div class="page-title-box d-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-1"><i class="bi bi-briefcase me-2 text-primary"></i>Demand</h4>
            <p class="text-muted mb-0">Client staffing demands and open positions</p>
        </div>
        <button type="button" class="btn btn-primary waves-effect waves-light"
                data-bs-toggle="modal" data-bs-target="#addDemandModal">
            <i class="bi bi-plus-lg me-1"></i>Add Demand
        </button>
    </div>

    <div class="card">
        <div class="card-header bg-white border-0">
            <div class="d-flex flex-wrap gap-2" id="statusCountsWrap">
                <?php
                $counts = array_count_values(array_column($demandRows, 'status'));
                foreach ($statusStyles as $status => $style):
                    if (!empty($counts[$status])):
                ?>
                    <span class="badge <?= $style ?>"><?= htmlspecialchars($status) ?> (<?= $counts[$status] ?>)</span>
                <?php endif; endforeach; ?>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive table-card">
                <table class="table align-middle mb-0" id="demandTable">
                    <thead class="table-light">
                        <tr>
                            <th style="width:50px;">Sr No.</th>
                            <th>Client</th>
                            <th>Position</th>
                            <th class="text-center" style="width:100px;">Headcount</th>
                            <th style="width:100px;">Priority</th>
                            <th style="width:120px;">Status</th>
                            <th style="width:16%;">Responsible</th>
                            <th style="width:22%;">Notes</th>
                        </tr>
                    </thead>
                    <tbody id="demandTableBody">
                        <?php foreach ($demandRows as $index => $row): ?>
                            <tr>
                                <td>
                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle" style="width:28px;height:28px;font-size:12px;">
                                        <?= $index + 1 ?>
                                    </span>
                                </td>
                                <td class="fw-medium"><?= htmlspecialchars($row['client']) ?></td>
                                <td>
                                    <?= htmlspecialchars($row['position']) ?>
                                    <div class="mt-1 d-flex gap-2">
                                        <a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-pencil-fill fs-14"></i></a>
                                        <a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-trash fs-14"></i></a>
                                    </div>
                                </td>
                                <td class="text-center"><?= (int) $row['headcount'] ?></td>
                                <td>
                                    <span class="badge <?= $priorityStyles[$row['priority']] ?? 'bg-soft-secondary text-secondary' ?>">
                                        <?= htmlspecialchars($row['priority']) ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge <?= $statusStyles[$row['status']] ?? 'bg-soft-secondary text-secondary' ?>">
                                        <?= htmlspecialchars($row['status']) ?>
                                    </span>
                                </td>
                                <td>
                                    <select class="form-select form-select-sm" name="responsible[<?= $index ?>]">
                                        <?php foreach ($responsibleOptions as $option): ?>
                                            <option <?= $option === $row['responsible'] ? 'selected' : '' ?>>
                                                <?= htmlspecialchars($option) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="text-muted">
                                    <?= $row['notes'] !== '' ? htmlspecialchars($row['notes']) : '<span class="text-muted fst-italic">No notes</span>' ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Reusable option list for newly added rows (kept in sync with $responsibleOptions server-side) -->
<template id="responsibleOptionsTemplate">
    <?php foreach ($responsibleOptions as $option): ?>
        <option><?= htmlspecialchars($option) ?></option>
    <?php endforeach; ?>
</template>

<!-- Add Demand Modal -->
<div class="modal fade" id="addDemandModal" tabindex="-1" aria-labelledby="addDemandModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDemandModalLabel">Add Demand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addDemandForm">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Client</label>
                        <input type="text" class="form-control" id="demandClient" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" id="demandPosition" required>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label class="form-label">Headcount</label>
                            <input type="number" class="form-control" id="demandHeadcount" min="1" value="1" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Priority</label>
                            <select class="form-select" id="demandPriority">
                                <option>High</option>
                                <option selected>Medium</option>
                                <option>Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label class="form-label">Status</label>
                            <select class="form-select" id="demandStatus">
                                <option selected>Open</option>
                                <option>In Progress</option>
                                <option>Filled</option>
                                <option>On Hold</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Responsible</label>
                            <select class="form-select" id="demandResponsible">
                                <?php foreach ($responsibleOptions as $option): ?>
                                    <option><?= htmlspecialchars($option) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Notes</label>
                        <textarea class="form-control" id="demandNotes" rows="2" placeholder="Optional notes"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Demand</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Waves !== 'undefined') {
            Waves.init();
        }
    });

    const priorityStyles = {
        'High': 'bg-soft-danger text-danger',
        'Medium': 'bg-soft-warning text-warning',
        'Low': 'bg-soft-secondary text-secondary'
    };
    const statusStyles = {
        'Open': 'bg-soft-info text-info',
        'In Progress': 'bg-soft-primary text-primary',
        'Filled': 'bg-soft-success text-success',
        'On Hold': 'bg-soft-dark text-dark'
    };

    function escapeHtml(str) {
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    function updateStatusCounts() {
        const counts = {};
        document.querySelectorAll('#demandTableBody tr td:nth-child(6) .badge').forEach(function (badge) {
            const text = badge.textContent.trim();
            counts[text] = (counts[text] || 0) + 1;
        });

        const wrap = document.getElementById('statusCountsWrap');
        wrap.innerHTML = '';
        Object.keys(statusStyles).forEach(function (status) {
            if (counts[status]) {
                const span = document.createElement('span');
                span.className = 'badge ' + statusStyles[status];
                span.textContent = status + ' (' + counts[status] + ')';
                wrap.appendChild(span);
            }
        });
    }

    document.getElementById('addDemandForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const tbody = document.getElementById('demandTableBody');
        const rowIndex = tbody.querySelectorAll('tr').length;

        const client      = document.getElementById('demandClient').value.trim();
        const position    = document.getElementById('demandPosition').value.trim();
        const headcount   = document.getElementById('demandHeadcount').value;
        const priority    = document.getElementById('demandPriority').value;
        const status      = document.getElementById('demandStatus').value;
        const responsible = document.getElementById('demandResponsible').value;
        const notes       = document.getElementById('demandNotes').value.trim();

        const tr = document.createElement('tr');
        tr.innerHTML =
            '<td><span class="avatar-title bg-soft-primary text-primary rounded-circle" style="width:28px;height:28px;font-size:12px;">' + (rowIndex + 1) + '</span></td>' +
            '<td class="fw-medium">' + escapeHtml(client) + '</td>' +
            '<td>' + escapeHtml(position) +
                '<div class="mt-1 d-flex gap-2">' +
                    '<a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-pencil-fill fs-14"></i></a>' +
                    '<a href="javascript:void(0);" class="text-muted waves-effect waves-light"><i class="bi bi-trash fs-14"></i></a>' +
                '</div>' +
            '</td>' +
            '<td class="text-center">' + headcount + '</td>' +
            '<td><span class="badge ' + (priorityStyles[priority] || 'bg-soft-secondary text-secondary') + '">' + priority + '</span></td>' +
            '<td><span class="badge ' + (statusStyles[status] || 'bg-soft-secondary text-secondary') + '">' + status + '</span></td>' +
            '<td class="responsible-cell"></td>' +
            '<td class="text-muted">' + (notes !== '' ? escapeHtml(notes) : '<span class="text-muted fst-italic">No notes</span>') + '</td>';

        const responsibleSelect = document.createElement('select');
        responsibleSelect.className = 'form-select form-select-sm';
        responsibleSelect.name = 'responsible[' + rowIndex + ']';
        responsibleSelect.innerHTML = document.getElementById('responsibleOptionsTemplate').innerHTML;
        responsibleSelect.value = responsible;
        tr.querySelector('.responsible-cell').appendChild(responsibleSelect);

        tbody.appendChild(tr);
        updateStatusCounts();

        if (typeof Waves !== 'undefined') {
            Waves.init();
        }

        const modalEl = document.getElementById('addDemandModal');
        const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
        modalInstance.hide();
        this.reset();

        // TODO: replace with an actual POST to save this demand server-side, e.g.
        // fetch('api/demands.php', { method: 'POST', body: new FormData(this) })
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>