<?php include 'includes/header.php'; ?>

<style>
    /* ---- Legacy blue-panel look (shared with profile.php) ---- */
    .legacy-emp-detail {
        background: #eef2f5;
        padding: 10px 0 30px;
    }
    .legacy-emp-detail .eyebrow { display: none; }

    .legacy-emp-detail .page-title-box h3 {
        font-weight: 400;
        color: #333;
        margin-bottom: 4px;
    }

    /* Cards -> flat blue-header panels */
    .legacy-emp-detail .card {
        background: #fff;
        border: 1px solid #d7dee3;
        border-radius: 0;
        box-shadow: none;
    }
    .legacy-emp-detail .card-header {
        background: #4a95bf;
        border: none;
        border-radius: 0;
        padding: 10px 16px;
    }
    .legacy-emp-detail .card-header h3,
    .legacy-emp-detail .card-header h4,
    .legacy-emp-detail .card-header h5,
    .legacy-emp-detail .card-header .card-title {
        color: #fff;
        margin: 0;
        font-weight: 400;
        font-size: 15px;
    }
    .legacy-emp-detail .card-header .btn,
    .legacy-emp-detail .card-header select {
        background: transparent;
        border: 1px solid rgba(255,255,255,.6);
        color: #fff;
        font-size: 12px;
        padding: 3px 10px;
        border-radius: 2px;
    }
    .legacy-emp-detail .card-header .btn:hover {
        background: rgba(255,255,255,.15);
        color: #fff;
    }
    .legacy-emp-detail .card-header select {
        background: rgba(255,255,255,.15);
    }
    .legacy-emp-detail .card-header select option { color: #333; }
    .legacy-emp-detail .card-body {
        padding: 18px 20px;
    }

    /* Form fields */
    .legacy-emp-detail .form-label {
        font-weight: 600;
        font-size: 13px;
        color: #333;
        margin-bottom: 6px;
    }
    .legacy-emp-detail .form-control,
    .legacy-emp-detail .form-select {
        border: 1px solid #c7d0d6;
        border-radius: 2px;
        font-size: 13px;
        background: #fff;
        box-shadow: none;
    }
    .legacy-emp-detail .form-control:focus,
    .legacy-emp-detail .form-select:focus {
        border-color: #4a95bf;
        box-shadow: 0 0 0 2px rgba(74,149,191,.15);
    }
    .legacy-emp-detail .form-control[readonly] {
        background: #eef1f4;
    }
    .legacy-emp-detail .input-group-text {
        background: #eef1f4;
        border: 1px solid #c7d0d6;
        border-radius: 2px;
        font-size: 13px;
    }

    /* Buttons */
    .legacy-emp-detail .btn-primary {
        background: #4a95bf;
        border-color: #4a95bf;
        border-radius: 2px;
        font-size: 13px;
    }
    .legacy-emp-detail .btn-primary:hover {
        background: #3d80a6;
        border-color: #3d80a6;
    }
    .legacy-emp-detail .btn-light {
        background: #eef1f4;
        border: 1px solid #c7d0d6;
        border-radius: 2px;
        font-size: 13px;
        color: #333;
    }
    .legacy-emp-detail .btn-light:hover {
        background: #e2e7eb;
    }

    /* Tables */
    .legacy-emp-detail .table {
        font-size: 13px;
    }
    .legacy-emp-detail .table thead th {
        background: #eef1f4;
        border: 1px solid #d7dee3;
        font-weight: 600;
        color: #333;
    }
    .legacy-emp-detail .table td {
        border: 1px solid #e3e8eb;
        vertical-align: middle;
    }
    .legacy-emp-detail .table tbody tr:hover {
        background: #f7f9fa;
    }

    /* Badges */
    .legacy-emp-detail .badge {
        border-radius: 3px;
        font-weight: 400;
        font-size: 12px;
        border: 1px solid transparent;
    }
    .legacy-emp-detail .badge.bg-success-subtle {
        background: #eafaf1 !important;
        color: #1e7e42 !important;
        border-color: #bfe6cf;
    }
    .legacy-emp-detail .badge.bg-primary-subtle {
        background: #eaf3fb !important;
        color: #2f6fa8 !important;
        border-color: #c3dcf0;
    }

    /* Avatar */
    .legacy-emp-detail .avatar-initial {
        background: #4a95bf !important;
        color: #fff !important;
        border-radius: 50% !important;
    }
</style>

<div class="container-fluid legacy-emp-detail">

    <div class="page-title-box d-flex justify-content-between align-items-center mb-4">
        <div>
            <div class="eyebrow mb-1">Employee record</div>
            <h3 class="mb-1">Employee Detail</h3>
            <p class="text-muted mb-0">
                Complete employee profile, roles, history, and organizational information
            </p>
        </div>

        <a href="index.php" class="btn btn-light">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>

    <div class="row g-4">

        <div class="col-xl-4">

            <div class="card mb-4">
                <div class="card-body">

                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar-initial bg-primary-subtle text-primary rounded-circle me-3 d-flex align-items-center justify-content-center"
                             style="width:60px;height:60px;font-size:20px;">
                            AH
                        </div>

                        <div>
                            <h4 class="mb-1">Abdul Hameed</h4>
                            <p class="text-muted mb-1">Software Engineer</p>
                            <span class="badge bg-success-subtle text-success">Active</span>
                        </div>
                    </div>

                    <div class="row g-3">

                        <div class="col-6">
                            <div class="text-muted small">Employee ID</div>
                            <div class="fw-medium">EMP-001</div>
                        </div>

                        <div class="col-6">
                            <div class="text-muted small">Employee Type</div>
                            <div class="fw-medium">Employee</div>
                        </div>

                        <div class="col-6">
                            <div class="text-muted small">Date of Hire</div>
                            <div class="fw-medium">15 Jan 2025</div>
                        </div>

                        <div class="col-6">
                            <div class="text-muted small">Level</div>
                            <div class="fw-medium">L2</div>
                        </div>

                        <div class="col-6">
                            <div class="text-muted small">Group</div>
                            <div class="fw-medium">Development</div>
                        </div>

                        <div class="col-6">
                            <div class="text-muted small">Location</div>
                            <div class="fw-medium">Islamabad</div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Employee Information</h5>

                    <button type="button" class="btn btn-sm btn-light">
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" value="Abdul Hameed">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Type</label>
                            <select class="form-select">
                                <option selected>Employee</option>
                                <option>Contractor</option>
                                <option>Intern</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Work Status</label>
                            <select class="form-select">
                                <option selected>Active</option>
                                <option>Inactive</option>
                                <option>On Leave</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="abdul@example.com">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Personal Email</label>
                            <input type="email" class="form-control" value="abdul.personal@example.com">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Employee CNIC</label>
                            <input type="text" class="form-control" value="35202-1234567-1">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-select">
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" value="1999-05-12">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label">Residential Address</label>
                            <textarea class="form-control" rows="2">Islamabad, Pakistan</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Job Title</label>
                            <select class="form-select">
                                <option selected>Software Engineer</option>
                                <option>Associate Engineer</option>
                                <option>Senior Software Engineer</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Business Area</label>
                            <input type="text" class="form-control" value="Technology">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Location</label>
                            <select class="form-select">
                                <option selected>Islamabad</option>
                                <option>Lahore</option>
                                <option>Karachi</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Office Location</label>
                            <select class="form-select">
                                <option selected>SPS Islamabad</option>
                                <option>Remote</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Department</label>
                            <select class="form-select">
                                <option selected>Software Development</option>
                                <option>Human Resources</option>
                                <option>Finance</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Group</label>
                            <select class="form-select">
                                <option selected>Development</option>
                                <option>Management</option>
                                <option>Operations</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Practice</label>
                            <select class="form-select">
                                <option selected>Software Engineering</option>
                                <option>Data Science</option>
                                <option>Quality Assurance</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hire Source</label>
                            <select class="form-select">
                                <option selected>Direct Hiring</option>
                                <option>Referral</option>
                                <option>Campus Recruitment</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Employee Picture</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company</label>
                            <select class="form-select">
                                <option selected>SPS</option>
                                <option>SPS Pakistan</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Educational Level</label>
                            <select class="form-select">
                                <option selected>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>Intermediate</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Upload Degree</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Field of Studies</label>
                            <select class="form-select">
                                <option selected>Computer Science</option>
                                <option>Software Engineering</option>
                                <option>Information Technology</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">CNIC Front Picture</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">CNIC Back Picture</label>
                            <input type="file" class="form-control">
                        </div>

                    </div>

                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i>
                        Save Employee Details
                    </button>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Guardian / Parent Information</h5>

                    <button type="button" class="btn btn-sm btn-light">
                        <i class="bi bi-pencil"></i>
                    </button>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Parent / Guardian Name</label>
                            <input type="text" class="form-control" value="Muhammad Hameed">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Relationship</label>
                            <input type="text" class="form-control" value="Father">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" value="+92 300 7654321">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" value="Islamabad, Pakistan">
                        </div>

                    </div>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">Employee Education</h5>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">University</label>
                        <input type="text" class="form-control" value="COMSATS University Islamabad">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Field of Study</label>
                        <input type="text" class="form-control" value="Computer Science">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Passing Year</label>
                        <input type="text" class="form-control" value="2021">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" value="BS Computer Science">
                    </div>

                    <div>
                        <label class="form-label">Grade / GPA</label>
                        <input type="text" class="form-control" value="3.65 / 4.00">
                    </div>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">Supervisor</h5>
                </div>

                <div class="card-body">

                    <label class="form-label">Supervisor</label>

                    <select class="form-select mb-3">
                        <option selected>Azam Hussain</option>
                        <option>Ahmed Shah</option>
                        <option>Ali Raza</option>
                    </select>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="text-muted small">Name</div>
                            <div class="fw-medium">Azam Hussain</div>
                        </div>

                        <div class="col-md-6">
                            <div class="text-muted small">Email</div>
                            <div class="fw-medium">xyz@example.com</div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">Learning &amp; Development</h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Course Name</th>
                                <th>Training Taken</th>
                                <th>Test Taken</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Secure Software Development</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Leadership Essentials</td>
                                <td>Yes</td>
                                <td>Pending</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Advanced Web Development</td>
                                <td>Yes</td>
                                <td>Yes</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Attachments</h5>

                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add New
                    </button>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                            <strong>Employment Contract.pdf</strong>

                            <div class="text-muted small">
                                Uploaded 15 Jan 2025
                            </div>
                        </div>

                        <button class="btn btn-sm btn-light">
                            View
                        </button>

                    </div>

                    <p class="text-muted small mt-3 mb-0">
                        Resume is managed from the employee's <a href="profile.php">Profile</a> page.
                    </p>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">Communication Skills</h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add New
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Added By</th>
                                <th>Speaking</th>
                                <th>Writing</th>
                                <th>Listening</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>HR Admin</td>
                                <td>Excellent</td>
                                <td>Good</td>
                                <td>Excellent</td>
                                <td>15 Jan 2025</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>HR Admin</td>
                                <td>Good</td>
                                <td>Good</td>
                                <td>Good</td>
                                <td>10 Jun 2025</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4" id="certifications">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Employee Certifications
                    </h5>

                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add Certification
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Vendor</th>
                                <th>Group</th>
                                <th>Practice</th>
                                <th>Product</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>URL</th>
                                <th>Type</th>
                                <th>Completed On</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Microsoft</td>
                                <td>Cloud</td>
                                <td>Technology</td>
                                <td>Azure</td>
                                <td>Azure Fundamentals</td>
                                <td>AZ-900</td>
                                <td><a href="#">View</a></td>
                                <td>Professional</td>
                                <td>10 Mar 2025</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Meta</td>
                                <td>Development</td>
                                <td>Frontend</td>
                                <td>Web</td>
                                <td>Meta Front-End Developer</td>
                                <td>FE-001</td>
                                <td><a href="#">View</a></td>
                                <td>Professional</td>
                                <td>20 Jun 2025</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>IBM</td>
                                <td>Data</td>
                                <td>Data Science</td>
                                <td>Python</td>
                                <td>Python for Data Science</td>
                                <td>PY-DS</td>
                                <td><a href="#">View</a></td>
                                <td>Professional</td>
                                <td>15 Aug 2024</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">Employee Badges</h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add Badge
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Vendor</th>
                                <th>Group</th>
                                <th>Practice</th>
                                <th>Product</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Completed On</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Microsoft</td>
                                <td>Cloud</td>
                                <td>Technology</td>
                                <td>Azure</td>
                                <td>Cloud Fundamentals</td>
                                <td><a href="#">View</a></td>
                                <td>10 Mar 2025</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Meta</td>
                                <td>Development</td>
                                <td>Frontend</td>
                                <td>Web</td>
                                <td>Frontend Developer</td>
                                <td><a href="#">View</a></td>
                                <td>20 Jun 2025</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card mb-4">

                <div class="card-body">

                    <div class="text-muted small mb-1">
                        Job Title
                    </div>

                    <h5 class="mb-0">
                        Software Engineer
                    </h5>

                </div>

            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Corporate Roles
                    </h5>

                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i>
                        Add
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Role</th>
                                <th>Level</th>
                                <th>Level Title</th>
                                <th>Rank</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td><a href="#">Developer</a></td>
                                <td>2</td>
                                <td>Associate</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="btn btn-sm btn-light text-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="#">Technical Lead</a></td>
                                <td>3</td>
                                <td>Senior</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="btn btn-sm btn-light text-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Departmental Roles
                    </h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Role</th>
                                <th>Level</th>
                                <th>Level Title</th>
                                <th>Rank</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Web Platform Lead</td>
                                <td>L2</td>
                                <td>Practice Lead</td>
                                <td>1</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Software Development</td>
                                <td>L2</td>
                                <td>Associate</td>
                                <td>2</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Employment History
                    </h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr.</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Job Title</th>
                                <th>Corp. Role</th>
                                <th>Dept. Role</th>
                                <th>Functional Role</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Jan 2025</td>
                                <td>Present</td>
                                <td>Software Engineer</td>
                                <td>Developer</td>
                                <td>Web Platform Lead</td>
                                <td>Engineering</td>
                                <td>1 Year 8 Months</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Jul 2023</td>
                                <td>Dec 2024</td>
                                <td>Associate Engineer</td>
                                <td>Developer</td>
                                <td>Developer</td>
                                <td>Engineering</td>
                                <td>1 Year 6 Months</td>
                                <td>
                                    <button class="btn btn-sm btn-light">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Department Attributes
                    </h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Customer-facing</td>
                                <td>Yes</td>
                                <td><a href="#">Edit</a></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Billable</td>
                                <td>Yes</td>
                                <td><a href="#">Edit</a></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Security Clearance</td>
                                <td>Standard</td>
                                <td><a href="#">Edit</a></td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Projects
                    </h5>

                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>SPS Digital Workplace</td>
                                <td>Lead</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Active
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Client Portal Modernization</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        Active
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Products
                    </h5>

                    <button class="btn btn-sm btn-light">
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>BMS Platform</td>
                                <td>Business Management</td>
                                <td>Developer</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Employee Portal</td>
                                <td>Web Application</td>
                                <td>Developer</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h5 class="card-title mb-0">
                        Compensation Framework &amp; KPIs
                    </h5>

                    <select class="form-select form-select-sm w-auto">
                        <option>2026 - Q1</option>
                        <option>2025 - Q4</option>
                        <option>2025 - Q3</option>
                    </select>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>KPI</th>
                                <th>Target</th>
                                <th>Actual</th>
                                <th>Weight</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Project Delivery</td>
                                <td>95%</td>
                                <td>98%</td>
                                <td>30%</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        Exceeding
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Customer Satisfaction</td>
                                <td>90%</td>
                                <td>92%</td>
                                <td>25%</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success">
                                        On Track
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>Learning &amp; Development</td>
                                <td>2 Courses</td>
                                <td>3 Courses</td>
                                <td>15%</td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        Complete
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Personal Leadership
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Leadership Incentives</th>
                                <th>% Multiplier</th>
                                <th>Practice Multiplier</th>
                                <th>KPI Target</th>
                                <th>KPI Actual</th>
                                <th>Bonus Target</th>
                                <th>Bonus Actual</th>
                                <th>Plan</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>Leadership Incentive</td>
                                <td>1.10</td>
                                <td>1.05</td>
                                <td>90%</td>
                                <td>94%</td>
                                <td>10%</td>
                                <td>12%</td>
                                <td>Annual</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Corporate Leadership
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Vendor Name</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                                <th>KPI Actual</th>
                                <th>Bonus Target</th>
                                <th>Bonus Actual</th>
                                <th>Plan</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>IBM</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                                <td>93%</td>
                                <td>10%</td>
                                <td>11%</td>
                                <td>Annual</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>HPI SD</td>
                                <td>1.02</td>
                                <td>1.05</td>
                                <td>85%</td>
                                <td>88%</td>
                                <td>8%</td>
                                <td>9%</td>
                                <td>Annual</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Cisco</td>
                                <td>1.04</td>
                                <td>1.06</td>
                                <td>88%</td>
                                <td>90%</td>
                                <td>9%</td>
                                <td>10%</td>
                                <td>Annual</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Vendors
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Vendor Name</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                                <th>KPI Actual</th>
                                <th>Bonus Target</th>
                                <th>Bonus Actual</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>IBM</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                                <td>93%</td>
                                <td>10%</td>
                                <td>11%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>HPI SD</td>
                                <td>1.02</td>
                                <td>1.05</td>
                                <td>85%</td>
                                <td>88%</td>
                                <td>8%</td>
                                <td>9%</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Cisco</td>
                                <td>1.04</td>
                                <td>1.06</td>
                                <td>88%</td>
                                <td>90%</td>
                                <td>9%</td>
                                <td>10%</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Products
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Department</th>
                                <th>Group</th>
                                <th>Practice</th>
                                <th>Vendor</th>
                                <th>Product Name</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Technical</td>
                                <td>AI</td>
                                <td>Automation</td>
                                <td>Microsoft</td>
                                <td>Azure</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Technical</td>
                                <td>AI</td>
                                <td>Automation</td>
                                <td>HPI</td>
                                <td>UiPath Platform</td>
                                <td>1.03</td>
                                <td>1.05</td>
                                <td>85%</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Technical</td>
                                <td>Data</td>
                                <td>Data Science</td>
                                <td>IBM</td>
                                <td>Jira</td>
                                <td>1.02</td>
                                <td>1.04</td>
                                <td>88%</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Services
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Department</th>
                                <th>Group</th>
                                <th>Practice</th>
                                <th>Vendor</th>
                                <th>Service Name</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Technical</td>
                                <td>Cloud</td>
                                <td>Development</td>
                                <td>Microsoft</td>
                                <td>Cloud Development</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Technical</td>
                                <td>AI</td>
                                <td>Automation</td>
                                <td>IBM</td>
                                <td>AI Services</td>
                                <td>1.03</td>
                                <td>1.05</td>
                                <td>85%</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Practices
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Department</th>
                                <th>Group</th>
                                <th>Practice</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Corporate</td>
                                <td>R&amp;D</td>
                                <td>Fabric</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Corporate</td>
                                <td>R&amp;D</td>
                                <td>Surviverse</td>
                                <td>1.03</td>
                                <td>1.05</td>
                                <td>85%</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Sales</td>
                                <td>Energy</td>
                                <td>Energy</td>
                                <td>1.02</td>
                                <td>1.04</td>
                                <td>88%</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Customers
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Customer Name</th>
                                <th>Department</th>
                                <th>Group</th>
                                <th>Practice</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Albert Einstein Health System</td>
                                <td>Technical</td>
                                <td>Healthcare</td>
                                <td>Software</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Aqua America, Inc.</td>
                                <td>Technical</td>
                                <td>Utilities</td>
                                <td>Technology</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Armstrong Group of Companies</td>
                                <td>Sales</td>
                                <td>Enterprise</td>
                                <td>Consulting</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Partners
                    </h5>
                </div>

                <div class="card-body table-responsive">

                    <table class="table table-sm table-hover align-middle mb-0">

                        <thead class="table-light">
                            <tr>
                                <th>Sr No.</th>
                                <th>Partner Name</th>
                                <th>Practice</th>
                                <th>Practice Multiplier</th>
                                <th>% Multiplier</th>
                                <th>KPI Target</th>
                                <th>KPI Actual</th>
                                <th>Bonus Target</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>CAS-Severn</td>
                                <td>Technology</td>
                                <td>1.05</td>
                                <td>1.10</td>
                                <td>90%</td>
                                <td>93%</td>
                                <td>10%</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>TechData</td>
                                <td>Cloud</td>
                                <td>1.03</td>
                                <td>1.05</td>
                                <td>85%</td>
                                <td>88%</td>
                                <td>8%</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Ingram Micro</td>
                                <td>Distribution</td>
                                <td>1.02</td>
                                <td>1.04</td>
                                <td>88%</td>
                                <td>90%</td>
                                <td>9%</td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            </div>

            <div class="card mb-4">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Employee Loaded Cost
                        <span class="text-muted">(Q1 - 2026)</span>
                    </h5>

                </div>

                <div class="card-body">

                    <div class="row mb-3">

                        <div class="col-md-6">
                            <span class="text-muted">Name:</span>
                            <strong> Abdul Hameed</strong>
                        </div>

                        <div class="col-md-6">
                            <span class="text-muted">Location:</span>
                            <strong> Islamabad</strong>
                        </div>

                    </div>

                    <div class="alert alert-light border mb-4">
                        <small class="text-muted">
                            All inputs are based on annual values.
                        </small>
                    </div>

                    <h6 class="mb-3">
                        Loaded Rate
                    </h6>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">
                                Base Hourly Rate
                            </label>

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="0">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                Individual Load
                            </label>

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="0.00">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                Practice Load
                            </label>

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="0.00">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">
                                Loaded Rate
                            </label>

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" value="0.00" readonly>
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-primary mt-4">
                        Update Loaded Rate
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>