<?php include 'includes/header.php'; ?>
<?php
$employees = [
    ['initials' => 'AH', 'name' => 'Abdul Hameed', 'status' => 'Active', 'worker' => 'Full Time', 'company' => 'SPS', 'type' => 'Employee', 'group' => 'Development', 'practice' => 'Web Development', 'level' => 'L2', 'mobile' => '+92 300 1234567', 'email' => 'abdul@example.com', 'tone' => 'primary'],
    ['initials' => 'SK', 'name' => 'Sarah Khan', 'status' => 'Active', 'worker' => 'Full Time', 'company' => 'SPS', 'type' => 'Employee', 'group' => 'Creative', 'practice' => 'UI/UX', 'level' => 'L2', 'mobile' => '+92 301 2345678', 'email' => 'sarah@example.com', 'tone' => 'info'],
    ['initials' => 'AA', 'name' => 'Ahmed Ali', 'status' => 'On Leave', 'worker' => 'Contract', 'company' => 'SPS', 'type' => 'Consultant', 'group' => 'QA', 'practice' => 'Testing', 'level' => 'L1', 'mobile' => '+92 302 3456789', 'email' => 'ahmed@example.com', 'tone' => 'warning'],
    ['initials' => 'FN', 'name' => 'Fatima Noor', 'status' => 'Active', 'worker' => 'Full Time', 'company' => 'SPS', 'type' => 'Employee', 'group' => 'Operations', 'practice' => 'Delivery', 'level' => 'L3', 'mobile' => '+92 303 4567890', 'email' => 'fatima@example.com', 'tone' => 'success'],
    ['initials' => 'HM', 'name' => 'Hamza Malik', 'status' => 'Inactive', 'worker' => 'Part Time', 'company' => 'SPS', 'type' => 'Employee', 'group' => 'Management', 'practice' => 'Strategy', 'level' => 'L4', 'mobile' => '+92 304 5678901', 'email' => 'hamza@example.com', 'tone' => 'secondary'],
];
?>
<div class="container-fluid">
    <div class="page-title-box d-flex justify-content-between align-items-center mb-4">
        <div>
            <div class="eyebrow mb-1">People operations</div>
            <h3 class="mb-1">Human Resource Management</h3>
            <p class="text-muted mb-0">Employee Management </p>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i class="bi bi-plus-lg me-1"></i>Add New</button>
    </div>

    <div class="card filter-card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div><div class="section-label">Directory filters</div><h6 class="mb-0 mt-1">Find the right employee</h6></div>
                <button class="btn btn-sm btn-light" type="button" id="resetFilters"><i class="bi bi-arrow-counterclockwise me-1"></i>Reset</button>
            </div>
            <div class="row g-3">
                <div class="col-md-3"><label class="form-label small">Department</label><select class="form-select employee-filter" data-filter="department"><option value="">All Departments</option><option>Software Development</option><option>Quality Assurance</option><option>Operations</option><option>Management</option></select></div>
                <div class="col-md-3"><label class="form-label small">Group</label><select class="form-select employee-filter" data-filter="group"><option value="">All Groups</option><option>Development</option><option>Creative</option><option>QA</option><option>Operations</option><option>Management</option></select></div>
                <div class="col-md-3"><label class="form-label small">Practice</label><select class="form-select employee-filter" data-filter="practice"><option value="">All Practices</option><option>Web Development</option><option>UI/UX</option><option>Testing</option><option>Delivery</option><option>Strategy</option></select></div>
                <div class="col-md-3"><label class="form-label small">Status</label><select class="form-select employee-filter" data-filter="status"><option value="">All Status</option><option>Active</option><option>Inactive</option><option>On Leave</option></select></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3 py-3">
            <div><h5 class="card-title mb-1">Employees</h5><p class="text-muted small mb-0"><span id="visibleCount"><?= count($employees) ?></span> employees in the directory</p></div>
            <div class="input-group" style="max-width:320px;"><span class="input-group-text bg-white"><i class="bi bi-search"></i></span><input type="search" class="form-control" id="employeeSearch" placeholder="Search name, email, group..."></div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive table-scroll">
                <table class="table table-hover align-middle table-bms mb-0" id="employeeTable">
                    <thead><tr><th><input class="form-check-input" type="checkbox" id="selectAll" aria-label="Select all employees"></th><th>Name</th><th>Status</th><th>Worker</th><th>Company</th><th>Type</th><th>Group</th><th>Practice</th><th>Level</th><th>Mobile No.</th><th>Email</th><th>Action</th></tr></thead>
                    <tbody id="employeeTableBody">
                    <?php foreach ($employees as $employee): ?>
                        <tr data-search="<?= htmlspecialchars(strtolower(implode(' ', $employee))) ?>" data-status="<?= htmlspecialchars($employee['status']) ?>" data-department="<?= htmlspecialchars(in_array($employee['group'], ['Development', 'Creative']) ? 'Software Development' : ($employee['group'] === 'QA' ? 'Quality Assurance' : ($employee['group'] === 'Management' ? 'Management' : 'Operations'))) ?>" data-group="<?= htmlspecialchars($employee['group']) ?>" data-practice="<?= htmlspecialchars($employee['practice']) ?>">
                            <td><input class="form-check-input employee-check" type="checkbox" aria-label="Select <?= htmlspecialchars($employee['name']) ?>"></td>
                            <td><div class="d-flex align-items-center gap-2"><span class="avatar-initial bg-<?= $employee['tone'] ?>-subtle text-<?= $employee['tone'] ?>"><?= $employee['initials'] ?></span><div><div class="employee-name"><?= htmlspecialchars($employee['name']) ?></div><div class="employee-email"><?= htmlspecialchars($employee['email']) ?></div></div></div></td>
                            <td><span class="badge bg-<?= $employee['tone'] ?>-subtle text-<?= $employee['tone'] ?>"><?= htmlspecialchars($employee['status']) ?></span></td>
                            <td><?= htmlspecialchars($employee['worker']) ?></td><td><?= htmlspecialchars($employee['company']) ?></td><td><?= htmlspecialchars($employee['type']) ?></td><td><?= htmlspecialchars($employee['group']) ?></td><td><?= htmlspecialchars($employee['practice']) ?></td><td><span class="badge bg-light text-dark"><?= htmlspecialchars($employee['level']) ?></span></td><td><?= htmlspecialchars($employee['mobile']) ?></td><td><?= htmlspecialchars($employee['email']) ?></td><td><?php include 'includes/action-menu.php'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-3 pt-3 border-top"><div class="small text-muted">Showing <span id="showingCount"><?= count($employees) ?></span> of <span id="totalCount"><?= count($employees) ?></span> employees</div><nav><ul class="pagination pagination-sm mb-0"><li class="page-item disabled"><a class="page-link" href="#">Previous</a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item disabled"><a class="page-link" href="#">Next</a></li></ul></nav></div>
        </div>
    </div>
</div>

<!-- Add New Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="addEmployeeForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="newEmpName" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="newEmpEmail" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mobile No.</label>
                            <input type="text" class="form-control" id="newEmpMobile" placeholder="+92 3XX XXXXXXX">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" id="newEmpCompany" value="SPS">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Worker</label>
                            <select class="form-select" id="newEmpWorker">
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Contract</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Type</label>
                            <select class="form-select" id="newEmpType">
                                <option>Employee</option>
                                <option>Consultant</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Group</label>
                            <select class="form-select" id="newEmpGroup">
                                <option>Development</option>
                                <option>Creative</option>
                                <option>QA</option>
                                <option>Operations</option>
                                <option>Management</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Practice</label>
                            <select class="form-select" id="newEmpPractice">
                                <option>Web Development</option>
                                <option>UI/UX</option>
                                <option>Testing</option>
                                <option>Delivery</option>
                                <option>Strategy</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Level</label>
                            <select class="form-select" id="newEmpLevel">
                                <option>L1</option>
                                <option>L2</option>
                                <option>L3</option>
                                <option>L4</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select" id="newEmpStatus">
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>On Leave</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg me-1"></i>Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var searchInput   = document.getElementById('employeeSearch');
    var filterSelects = document.querySelectorAll('.employee-filter');
    var resetBtn      = document.getElementById('resetFilters');
    var tableBody     = document.getElementById('employeeTableBody');
    var visibleCountEl = document.getElementById('visibleCount');
    var showingCountEl = document.getElementById('showingCount');
    var totalCountEl   = document.getElementById('totalCount');
    var selectAll      = document.getElementById('selectAll');

    var departmentMap = {
        'Development': 'Software Development',
        'Creative': 'Software Development',
        'QA': 'Quality Assurance',
        'Management': 'Management',
        'Operations': 'Operations'
    };

    var toneByStatus = {
        'Active': 'success',
        'On Leave': 'warning',
        'Inactive': 'secondary'
    };

    function applyFilters() {
        var searchTerm = (searchInput.value || '').toLowerCase().trim();
        var activeFilters = {};
        filterSelects.forEach(function (select) {
            if (select.value) {
                activeFilters[select.dataset.filter] = select.value;
            }
        });

        var rows = tableBody.querySelectorAll('tr');
        var visible = 0;

        rows.forEach(function (row) {
            var matchesSearch = !searchTerm || row.dataset.search.indexOf(searchTerm) !== -1;
            var matchesFilters = true;

            Object.keys(activeFilters).forEach(function (key) {
                if (row.dataset[key] !== activeFilters[key]) {
                    matchesFilters = false;
                }
            });

            var isVisible = matchesSearch && matchesFilters;
            row.style.display = isVisible ? '' : 'none';
            if (isVisible) visible++;
        });

        visibleCountEl.textContent = visible;
        showingCountEl.textContent = visible;
    }

    searchInput.addEventListener('input', applyFilters);
    filterSelects.forEach(function (select) {
        select.addEventListener('change', applyFilters);
    });

    resetBtn.addEventListener('click', function () {
        searchInput.value = '';
        filterSelects.forEach(function (select) { select.value = ''; });
        applyFilters();
    });

    selectAll.addEventListener('change', function () {
        var visibleChecks = tableBody.querySelectorAll('tr:not([style*="display: none"]) .employee-check');
        visibleChecks.forEach(function (cb) { cb.checked = selectAll.checked; });
    });

    // Reuse an already-rendered action menu as a template for new rows
    var actionMenuTemplate = tableBody.querySelector('tr td:last-child')
        ? tableBody.querySelector('tr td:last-child').innerHTML
        : '';

    document.getElementById('addEmployeeForm').addEventListener('submit', function (e) {
        e.preventDefault();

        var name = document.getElementById('newEmpName').value.trim();
        var email = document.getElementById('newEmpEmail').value.trim();
        if (!name || !email) return;

        var mobile = document.getElementById('newEmpMobile').value.trim();
        var company = document.getElementById('newEmpCompany').value.trim() || 'SPS';
        var worker = document.getElementById('newEmpWorker').value;
        var type = document.getElementById('newEmpType').value;
        var group = document.getElementById('newEmpGroup').value;
        var practice = document.getElementById('newEmpPractice').value;
        var level = document.getElementById('newEmpLevel').value;
        var status = document.getElementById('newEmpStatus').value;

        var initials = name.split(' ').filter(Boolean).map(function (w) { return w[0]; }).slice(0, 2).join('').toUpperCase();
        var tone = toneByStatus[status] || 'secondary';
        var department = departmentMap[group] || 'Operations';

        var searchBlob = [initials, name, status, worker, company, type, group, practice, level, mobile, email, tone].join(' ').toLowerCase();

        var row = document.createElement('tr');
        row.dataset.search = searchBlob;
        row.dataset.status = status;
        row.dataset.department = department;
        row.dataset.group = group;
        row.dataset.practice = practice;

        row.innerHTML =
            '<td><input class="form-check-input employee-check" type="checkbox" aria-label="Select ' + name + '"></td>' +
            '<td><div class="d-flex align-items-center gap-2"><span class="avatar-initial bg-' + tone + '-subtle text-' + tone + '">' + initials + '</span>' +
            '<div><div class="employee-name">' + name + '</div><div class="employee-email">' + email + '</div></div></div></td>' +
            '<td><span class="badge bg-' + tone + '-subtle text-' + tone + '">' + status + '</span></td>' +
            '<td>' + worker + '</td><td>' + company + '</td><td>' + type + '</td><td>' + group + '</td><td>' + practice + '</td>' +
            '<td><span class="badge bg-light text-dark">' + level + '</span></td>' +
            '<td>' + mobile + '</td><td>' + email + '</td>' +
            '<td>' + actionMenuTemplate + '</td>';

        tableBody.appendChild(row);

        var newTotal = parseInt(totalCountEl.textContent, 10) + 1;
        totalCountEl.textContent = newTotal;

        applyFilters();

        this.reset();
        var modalEl = document.getElementById('addEmployeeModal');
        bootstrap.Modal.getOrCreateInstance(modalEl).hide();
    });

});
</script>

<?php include 'includes/footer.php'; ?>