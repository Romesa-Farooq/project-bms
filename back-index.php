
<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Human Resource Management</h3>
            <p class="text-muted mb-0">Employee Management</p>
        </div>

        <button class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>
            Add New
        </button>

    </div>

    <div class="card mb-4">

        <div class="card-body">

            <div class="row g-3">

                <div class="col-md-3">
                    <label class="form-label">Department</label>

                    <select class="form-select">
                        <option selected>All Departments</option>
                        <option>Software Development</option>
                        <option>Human Resources</option>
                        <option>Marketing</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Group</label>

                    <select class="form-select">
                        <option selected>All Groups</option>
                        <option>Development</option>
                        <option>QA</option>
                        <option>Management</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Practice</label>

                    <select class="form-select">
                        <option selected>All Practices</option>
                        <option>Web Development</option>
                        <option>Mobile Development</option>
                        <option>AI / ML</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Status</label>

                    <select class="form-select">
                        <option selected>All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

            </div>

        </div>

    </div>

    <div class="card">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="card-title mb-0">
                    Employees
                </h5>

                <div class="input-group" style="width: 280px;">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search employee..."
                    >

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>
                            <th>#</th>
                            <th>Employee</th>
                            <th>Employee ID</th>
                            <th>Department</th>
                            <th>Group</th>
                            <th>Practice</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar-sm me-2">

                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                            AF
                                        </span>

                                    </div>

                                    <div>

                                        <h6 class="mb-0">
                                            Abdul Hameed
                                        </h6>

                                        <small class="text-muted">
                                            Software Engineer
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>EMP-001</td>

                            <td>Software Development</td>

                            <td>Development</td>

                            <td>Web Development</td>

                            <td>

                                <span class="badge bg-success-subtle text-success">
                                    Active
                                </span>

                            </td>

                            <td>

                                <?php include 'includes/action-menu.php'; ?>

                            </td>

                        </tr>

                        <tr>

                            <td>2</td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar-sm me-2">

                                        <span class="avatar-title rounded-circle bg-info text-white">
                                            SK
                                        </span>

                                    </div>

                                    <div>

                                        <h6 class="mb-0">
                                            Sarah Khan
                                        </h6>

                                        <small class="text-muted">
                                            UI/UX Designer
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>EMP-002</td>

                            <td>Design</td>

                            <td>Creative</td>

                            <td>UI/UX</td>

                            <td>

                                <span class="badge bg-success-subtle text-success">
                                    Active
                                </span>

                            </td>

                            <td>

                                <?php include 'includes/action-menu.php'; ?>

                            </td>

                        </tr>

                        <tr>

                            <td>3</td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar-sm me-2">

                                        <span class="avatar-title rounded-circle bg-warning text-white">
                                            AA
                                        </span>

                                    </div>

                                    <div>

                                        <h6 class="mb-0">
                                            Ahmed Ali
                                        </h6>

                                        <small class="text-muted">
                                            QA Engineer
                                        </small>

                                    </div>

                                </div>

                            </td>

                            <td>EMP-003</td>

                            <td>Quality Assurance</td>

                            <td>QA</td>

                            <td>Testing</td>

                            <td>

                                <span class="badge bg-warning-subtle text-warning">
                                    On Leave
                                </span>

                            </td>

                            <td>

                                <?php include 'includes/action-menu.php'; ?>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">

                <div class="text-muted">
                    Showing 1 to 3 of 3 employees
                </div>

                <nav>

                    <ul class="pagination mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Previous
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                Next
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="hoursDistributionModal" tabindex="-1" aria-labelledby="hoursDistributionLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="hoursDistributionLabel">
                    Hours Distribution
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body">

                <div class="list-group">

                    <button
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#hoursLevel1">

                        <span>
                            <strong>Level 1</strong>
                            <small class="d-block text-muted">Department</small>
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div class="collapse" id="hoursLevel1">

                        <div class="list-group ms-3 my-2">

                            <button
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#hoursLevel2">

                                <span>
                                    <strong>Level 2</strong>
                                    <small class="d-block text-muted">Group</small>
                                </span>

                                <i class="bi bi-chevron-down"></i>

                            </button>

                            <div class="collapse" id="hoursLevel2">

                                <div class="list-group ms-3 my-2">

                                    <div class="list-group-item">

                                        <strong>Level 3</strong>

                                        <small class="d-block text-muted mb-2">
                                            Practice / Hours
                                        </small>

                                        <div class="d-flex justify-content-between">

                                            <span>Web Development</span>

                                            <span class="badge bg-primary">
                                                40 Hours
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="hrTalkModal" tabindex="-1" aria-labelledby="hrTalkLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="hrTalkLabel">
                    HR Talk
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>

            <div class="modal-body">

                <div class="mb-3">

                    <label for="hrTopic" class="form-label">
                        Discussion Topic
                    </label>

                    <select id="hrTopic" class="form-select">

                        <option selected>
                            Select a topic
                        </option>

                        <option>
                            Performance Discussion
                        </option>

                        <option>
                            Career Development
                        </option>

                        <option>
                            Workload & Hours
                        </option>

                        <option>
                            Leave & Attendance
                        </option>

                        <option>
                            General Feedback
                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label for="hrMessage" class="form-label">
                        Message
                    </label>

                    <textarea
                        id="hrMessage"
                        class="form-control"
                        rows="4"
                        placeholder="Enter your message..."></textarea>

                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-light"
                    data-bs-dismiss="modal">
                    Cancel
                </button>

                <button
                    type="button"
                    class="btn btn-primary">
                    Send
                </button>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
