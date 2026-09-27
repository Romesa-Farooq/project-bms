<?php include __DIR__ . '/includes/header.php'; ?>

<script src="assets/libs/node-waves/waves.min.js"></script>

<style>
    @media print {
        body * { visibility: hidden; }
        .printable-certificate, .printable-certificate * { visibility: visible; }
        .printable-certificate {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
    }
    .certificate-letter {
        font-family: Georgia, 'Times New Roman', serif;
        border: 1px solid #dee2e6;
        padding: 40px;
        background: #fff;
        color: #222;
        line-height: 1.8;
    }
    .certificate-letter .letterhead {
        text-align: center;
        border-bottom: 2px solid #405189;
        padding-bottom: 16px;
        margin-bottom: 24px;
    }
    .certificate-letter .letterhead h3 {
        margin: 0;
        color: #405189;
        font-family: Georgia, 'Times New Roman', serif;
        letter-spacing: 1px;
    }
    .certificate-letter .letterhead small {
        color: #888;
    }
    .certificate-letter .cert-date {
        text-align: right;
        margin-bottom: 20px;
        font-size: 14px;
    }
    .certificate-letter .cert-heading {
        text-align: center;
        font-weight: 700;
        text-decoration: underline;
        margin-bottom: 24px;
    }
    .certificate-letter .cert-signature {
        margin-top: 60px;
    }
</style>

<?php
$employees = [
    ['name' => 'Abdul Hameed',  'designation' => 'Software Engineer',          'department' => 'Development', 'joining' => '2025-01-15'],
    ['name' => 'Hasnain Zahid', 'designation' => 'Talent Acquisition Lead',    'department' => 'HR',          'joining' => '2023-03-01'],
    ['name' => 'Talha Kaleem',  'designation' => 'Recruitment Specialist',     'department' => 'HR',          'joining' => '2024-06-10'],
];

$certificates = [
    [
        'employee'    => 'Talha Kaleem',
        'designation' => 'Recruitment Specialist',
        'department'  => 'HR',
        'joining'     => '10 Jun 2024',
        'leaving'     => 'Present',
        'issuedDate'  => '20 Sep 2026',
        'issuedBy'    => 'HR Admin',
        'purpose'     => 'visa application',
    ],
];
?>

<div class="container-fluid">

    <div class="page-title-box d-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-1"><i class="bi bi-file-earmark-text me-2 text-primary"></i>Experience Certificates</h4>
            <p class="text-muted mb-0">Generate and track employee experience / service certificates</p>
        </div>
        <button type="button" class="btn btn-primary waves-effect waves-light"
                data-bs-toggle="modal" data-bs-target="#generateCertModal">
            <i class="bi bi-plus-lg me-1"></i>Generate Certificate
        </button>
    </div>

    <div class="card">
        <div class="card-header bg-white border-0">
            <h5 class="card-title mb-0">Issued Certificates</h5>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive table-card">
                <table class="table align-middle mb-0" id="certTable">
                    <thead class="table-light">
                        <tr>
                            <th style="width:50px;">Sr No.</th>
                            <th>Employee</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Joining Date</th>
                            <th>Leaving Date</th>
                            <th>Issued On</th>
                            <th>Issued By</th>
                            <th class="text-end" style="width:90px;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="certTableBody">
                        <?php foreach ($certificates as $index => $c): ?>
                            <tr data-employee="<?= htmlspecialchars($c['employee']) ?>"
                                data-designation="<?= htmlspecialchars($c['designation']) ?>"
                                data-department="<?= htmlspecialchars($c['department']) ?>"
                                data-joining="<?= htmlspecialchars($c['joining']) ?>"
                                data-leaving="<?= htmlspecialchars($c['leaving']) ?>"
                                data-issued="<?= htmlspecialchars($c['issuedDate']) ?>"
                                data-issuedby="<?= htmlspecialchars($c['issuedBy']) ?>"
                                data-purpose="<?= htmlspecialchars($c['purpose']) ?>">
                                <td>
                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle" style="width:28px;height:28px;font-size:12px;">
                                        <?= $index + 1 ?>
                                    </span>
                                </td>
                                <td class="fw-medium"><?= htmlspecialchars($c['employee']) ?></td>
                                <td><?= htmlspecialchars($c['designation']) ?></td>
                                <td><?= htmlspecialchars($c['department']) ?></td>
                                <td><?= htmlspecialchars($c['joining']) ?></td>
                                <td><?= htmlspecialchars($c['leaving']) ?></td>
                                <td><?= htmlspecialchars($c['issuedDate']) ?></td>
                                <td><?= htmlspecialchars($c['issuedBy']) ?></td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-light waves-effect waves-light view-cert-btn">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Generate Certificate Modal -->
<div class="modal fade" id="generateCertModal" tabindex="-1" aria-labelledby="generateCertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generateCertModalLabel">Generate Experience Certificate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="generateCertForm">
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Employee</label>
                        <select class="form-select" id="certEmployee" required>
                            <option value="">Select employee</option>
                            <?php foreach ($employees as $emp): ?>
                                <option value="<?= htmlspecialchars($emp['name']) ?>"
                                        data-designation="<?= htmlspecialchars($emp['designation']) ?>"
                                        data-department="<?= htmlspecialchars($emp['department']) ?>"
                                        data-joining="<?= htmlspecialchars($emp['joining']) ?>">
                                    <?= htmlspecialchars($emp['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" id="certDesignation" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Department</label>
                            <input type="text" class="form-control" id="certDepartment" required>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label class="form-label">Joining Date</label>
                            <input type="date" class="form-control" id="certJoining" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Leaving Date</label>
                            <input type="date" class="form-control" id="certLeaving">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="certCurrentlyEmployed">
                                <label class="form-check-label small" for="certCurrentlyEmployed">
                                    Currently employed
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Purpose <span class="text-muted small">(optional)</span></label>
                        <input type="text" class="form-control" id="certPurpose" placeholder="e.g. visa application, bank loan">
                    </div>

                    <div>
                        <label class="form-label">Issued By</label>
                        <input type="text" class="form-control" id="certIssuedBy" value="HR Admin" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Generate &amp; Preview</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Certificate Preview / Print Modal -->
<div class="modal fade" id="certPreviewModal" tabindex="-1" aria-labelledby="certPreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certPreviewModalLabel">Certificate Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="printable-certificate certificate-letter" id="certificateContent">
                    <!-- Filled dynamically by JS -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="printCertBtn">
                    <i class="bi bi-printer me-1"></i>Print
                </button>
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

    function formatDate(dateStr) {
        if (!dateStr) return '';
        const d = new Date(dateStr);
        if (isNaN(d)) return dateStr;
        return d.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' });
    }

    function escapeHtml(str) {
        const div = document.createElement('div');
        div.textContent = str || '';
        return div.innerHTML;
    }

    function buildCertificateHTML(data) {
        const purposeLine = data.purpose
            ? ' This certificate is being issued upon the employee\u2019s request for ' + escapeHtml(data.purpose) + '.'
            : '';

        return '' +
            '<div class="letterhead">' +
                '<h3>SPS</h3>' +
                '<small>Experience / Service Certificate</small>' +
            '</div>' +
            '<div class="cert-date">Date: ' + escapeHtml(data.issuedDate) + '</div>' +
            '<div class="cert-heading">TO WHOM IT MAY CONCERN</div>' +
            '<p>' +
                'This is to certify that <strong>' + escapeHtml(data.employee) + '</strong> was / has been employed with SPS ' +
                'as <strong>' + escapeHtml(data.designation) + '</strong> in the <strong>' + escapeHtml(data.department) + '</strong> department, ' +
                'from <strong>' + escapeHtml(data.joining) + '</strong> to <strong>' + escapeHtml(data.leaving) + '</strong>.' +
            '</p>' +
            '<p>During this period, we found ' + escapeHtml(data.employee) + ' to be sincere, hardworking, and professional in ' +
                'conduct.' + purposeLine +
            '</p>' +
            '<p>We wish ' + escapeHtml(data.employee) + ' success in all future endeavors.</p>' +
            '<div class="cert-signature">' +
                'For SPS<br><br><br>' +
                '____________________________<br>' +
                escapeHtml(data.issuedBy) + '<br>' +
                'Human Resources' +
            '</div>';
    }

    function showCertificatePreview(data) {
        document.getElementById('certificateContent').innerHTML = buildCertificateHTML(data);
        const previewModal = bootstrap.Modal.getInstance(document.getElementById('certPreviewModal'))
            || new bootstrap.Modal(document.getElementById('certPreviewModal'));
        previewModal.show();
    }

    // Auto-fill designation/department/joining date when an employee is chosen
    document.getElementById('certEmployee').addEventListener('change', function () {
        const opt = this.options[this.selectedIndex];
        document.getElementById('certDesignation').value = opt.dataset.designation || '';
        document.getElementById('certDepartment').value = opt.dataset.department || '';
        document.getElementById('certJoining').value = opt.dataset.joining || '';
    });

    // Toggle Leaving Date vs "Currently employed"
    document.getElementById('certCurrentlyEmployed').addEventListener('change', function () {
        const leavingInput = document.getElementById('certLeaving');
        leavingInput.disabled = this.checked;
        if (this.checked) leavingInput.value = '';
    });

    document.getElementById('generateCertForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const tbody = document.getElementById('certTableBody');
        const rowIndex = tbody.querySelectorAll('tr').length;

        const employee    = document.getElementById('certEmployee').value;
        const designation = document.getElementById('certDesignation').value.trim();
        const department  = document.getElementById('certDepartment').value.trim();
        const joining      = formatDate(document.getElementById('certJoining').value);
        const currentlyEmployed = document.getElementById('certCurrentlyEmployed').checked;
        const leaving      = currentlyEmployed ? 'Present' : formatDate(document.getElementById('certLeaving').value);
        const purpose      = document.getElementById('certPurpose').value.trim();
        const issuedBy      = document.getElementById('certIssuedBy').value.trim();
        const issuedDate    = formatDate(new Date().toISOString().slice(0, 10));

        if (!employee) {
            alert('Please select an employee.');
            return;
        }

        const data = { employee, designation, department, joining, leaving, purpose, issuedBy, issuedDate };

        const tr = document.createElement('tr');
        tr.dataset.employee = employee;
        tr.dataset.designation = designation;
        tr.dataset.department = department;
        tr.dataset.joining = joining;
        tr.dataset.leaving = leaving;
        tr.dataset.issued = issuedDate;
        tr.dataset.issuedby = issuedBy;
        tr.dataset.purpose = purpose;

        tr.innerHTML =
            '<td><span class="avatar-title bg-soft-primary text-primary rounded-circle" style="width:28px;height:28px;font-size:12px;">' + (rowIndex + 1) + '</span></td>' +
            '<td class="fw-medium">' + escapeHtml(employee) + '</td>' +
            '<td>' + escapeHtml(designation) + '</td>' +
            '<td>' + escapeHtml(department) + '</td>' +
            '<td>' + escapeHtml(joining) + '</td>' +
            '<td>' + escapeHtml(leaving) + '</td>' +
            '<td>' + escapeHtml(issuedDate) + '</td>' +
            '<td>' + escapeHtml(issuedBy) + '</td>' +
            '<td class="text-end"><button type="button" class="btn btn-sm btn-light waves-effect waves-light view-cert-btn"><i class="bi bi-eye"></i> View</button></td>';

        tbody.appendChild(tr);

        if (typeof Waves !== 'undefined') {
            Waves.init();
        }

        // TODO: replace with an actual POST to save this certificate server-side, e.g.
        // fetch('api/experience-certificates.php', { method: 'POST', body: new FormData(this) })

        const genModal = bootstrap.Modal.getInstance(document.getElementById('generateCertModal'));
        if (genModal) genModal.hide();
        this.reset();
        document.getElementById('certLeaving').disabled = false;

        showCertificatePreview(data);
    });

    // View button for any row (initial PHP rows or newly added ones)
    document.getElementById('certTableBody').addEventListener('click', function (e) {
        const btn = e.target.closest('.view-cert-btn');
        if (!btn) return;

        const row = btn.closest('tr');
        showCertificatePreview({
            employee: row.dataset.employee,
            designation: row.dataset.designation,
            department: row.dataset.department,
            joining: row.dataset.joining,
            leaving: row.dataset.leaving,
            issuedDate: row.dataset.issued,
            issuedBy: row.dataset.issuedby,
            purpose: row.dataset.purpose,
        });
    });

    document.getElementById('printCertBtn').addEventListener('click', function () {
        window.print();
    });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>