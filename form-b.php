<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-12">

            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Form-B</h4>
                    <p class="text-muted mb-0 mt-1">
                        Employee employment, compensation, and administrative information
                    </p>
                </div>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Employee Management
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            Abdul Hameed
                        </li>

                        <li class="breadcrumb-item active">
                            Form-B
                        </li>

                    </ol>
                </div>

            </div>

        </div>
    </div>


    <!-- Employee Header -->

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center flex-wrap gap-3">

                        <div class="avatar-lg flex-shrink-0">

                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary fs-3">
                                AH
                            </span>

                        </div>

                        <div class="flex-grow-1">

                            <h5 class="mb-1">
                                Abdul Hameed
                            </h5>

                            <p class="text-muted mb-2">
                                Software Engineer · Development
                            </p>

                            <span class="badge bg-success-subtle text-success">
                                Active Employee
                            </span>

                        </div>

                        <div class="d-flex gap-2">

                            <a href="employee-detail.php"
                               class="btn btn-light">

                                <i class="ri-arrow-left-line align-bottom me-1"></i>
                                Employee Detail

                            </a>

                            <button type="button"
                                    class="btn btn-primary"
                                    id="topSaveBtn">

                                <i class="ri-save-line align-bottom me-1"></i>
                                Save Form

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <form id="formB">


        <!-- Employment Details -->

        <div class="row">

            <div class="col-xl-8">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Employment Details
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Current employment and organizational information
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Employee Name
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="employee_name"
                                       value="Abdul Hameed">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Employee ID
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="employee_id"
                                       value="EMP-001">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Department
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="department"
                                       value="Development">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Designation
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="designation"
                                       value="Software Engineer">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Employee Group
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="employee_group"
                                       value="Development">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Employment Type
                                </label>

                                <select class="form-select"
                                        name="employment_type">

                                    <option selected>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Contract</option>
                                    <option>Intern</option>

                                </select>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Date of Joining
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="joining_date"
                                       value="2025-01-15">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Employment Status
                                </label>

                                <select class="form-select"
                                        name="employment_status">

                                    <option selected>Active</option>
                                    <option>On Leave</option>
                                    <option>Inactive</option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Employee Status -->

            <div class="col-xl-4">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Employee Status
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Employee Level
                            </label>

                            <select class="form-select"
                                    name="employee_level">

                                <option>L1</option>
                                <option selected>L2</option>
                                <option>L3</option>
                                <option>L4</option>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Location
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="location"
                                   value="Islamabad">

                        </div>

                        <div>

                            <label class="form-label">
                                Supervisor
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="supervisor"
                                   value="Abid Shah">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Compensation -->

        <div class="row">

            <div class="col-xl-7">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Compensation Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Salary and compensation details
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Basic Salary
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        PKR
                                    </span>

                                    <input type="number"
                                           class="form-control"
                                           name="basic_salary"
                                           placeholder="Enter basic salary">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Pay Frequency
                                </label>

                                <select class="form-select"
                                        name="pay_frequency">

                                    <option selected>Monthly</option>
                                    <option>Weekly</option>
                                    <option>Bi-Weekly</option>
                                    <option>Annual</option>

                                </select>

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Salary Grade
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="salary_grade"
                                       placeholder="Enter salary grade">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Effective From
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="salary_effective_date">

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Allowances -->

            <div class="col-xl-5">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Allowances
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Transport Allowance
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    PKR
                                </span>

                                <input type="number"
                                       class="form-control"
                                       name="transport_allowance"
                                       placeholder="0">

                            </div>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Medical Allowance
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    PKR
                                </span>

                                <input type="number"
                                       class="form-control"
                                       name="medical_allowance"
                                       placeholder="0">

                            </div>

                        </div>

                        <div>

                            <label class="form-label">
                                Other Allowance
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    PKR
                                </span>

                                <input type="number"
                                       class="form-control"
                                       name="other_allowance"
                                       placeholder="0">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Working Information -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Working Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Working schedule and attendance information
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-4">

                                <label class="form-label">
                                    Working Days
                                </label>

                                <select class="form-select"
                                        name="working_days">

                                    <option selected>Monday - Friday</option>
                                    <option>Monday - Saturday</option>
                                    <option>Sunday - Thursday</option>
                                    <option>Other</option>

                                </select>

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">
                                    Working Hours
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="working_hours"
                                       value="09:00 AM - 05:00 PM">

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">
                                    Work Mode
                                </label>

                                <select class="form-select"
                                        name="work_mode">

                                    <option selected>Onsite</option>
                                    <option>Remote</option>
                                    <option>Hybrid</option>

                                </select>

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">
                                    Shift
                                </label>

                                <select class="form-select"
                                        name="shift">

                                    <option selected>General Shift</option>
                                    <option>Morning Shift</option>
                                    <option>Evening Shift</option>
                                    <option>Night Shift</option>

                                </select>

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">
                                    Weekly Hours
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="weekly_hours"
                                       value="40">

                            </div>

                            <div class="col-md-4">

                                <label class="form-label">
                                    Attendance Type
                                </label>

                                <select class="form-select"
                                        name="attendance_type">

                                    <option selected>Regular</option>
                                    <option>Flexible</option>
                                    <option>Shift Based</option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Leave Information -->

        <div class="row">

            <div class="col-xl-6">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Leave Information
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Annual Leave
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="annual_leave"
                                       value="14">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Sick Leave
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="sick_leave"
                                       value="10">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Casual Leave
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="casual_leave"
                                       value="10">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Leave Year
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="leave_year"
                                       value="2026">

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Benefits -->

            <div class="col-xl-6">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Benefits &amp; Facilities
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="medical_benefit"
                                           id="medicalBenefit"
                                           checked>

                                    <label class="form-check-label"
                                           for="medicalBenefit">
                                        Medical Benefit
                                    </label>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="provident_fund"
                                           id="providentFund">

                                    <label class="form-check-label"
                                           for="providentFund">
                                        Provident Fund
                                    </label>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="life_insurance"
                                           id="lifeInsurance">

                                    <label class="form-check-label"
                                           for="lifeInsurance">
                                        Life Insurance
                                    </label>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="transport_facility"
                                           id="transportFacility">

                                    <label class="form-check-label"
                                           for="transportFacility">
                                        Transport Facility
                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Administrative Information -->

        <div class="row">

            <div class="col-xl-8">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Administrative Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Internal administrative details
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Cost Center
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="cost_center"
                                       placeholder="Enter cost center">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Job Code
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="job_code"
                                       placeholder="Enter job code">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Reporting Manager
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="reporting_manager"
                                       value="Abid Shah">

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">
                                    Effective Date
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="effective_date">

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-4">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Form Status
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select class="form-select"
                                    name="form_status">

                                <option selected>Draft</option>
                                <option>Submitted</option>
                                <option>Reviewed</option>
                                <option>Approved</option>

                            </select>

                        </div>

                        <div>

                            <label class="form-label">
                                Review Notes
                            </label>

                            <textarea class="form-control"
                                      name="review_notes"
                                      rows="4"
                                      placeholder="Add review notes..."></textarea>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Remarks -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Remarks
                        </h5>

                    </div>

                    <div class="card-body">

                        <textarea class="form-control"
                                  name="remarks"
                                  rows="5"
                                  placeholder="Enter any additional remarks or information..."></textarea>

                    </div>

                </div>

            </div>

        </div>


        <!-- Form Actions -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">

                            <div id="formStatus"
                                 class="text-muted fs-13">
                            </div>

                            <div class="d-flex gap-2">

                                <a href="employee-detail.php"
                                   class="btn btn-light">

                                    <i class="ri-arrow-left-line align-bottom me-1"></i>
                                    Back

                                </a>

                                <button type="reset"
                                        class="btn btn-light">

                                    <i class="ri-refresh-line align-bottom me-1"></i>
                                    Reset

                                </button>

                                <button type="submit"
                                        class="btn btn-primary">

                                    <i class="ri-save-line align-bottom me-1"></i>
                                    Save Form

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>


<script>

document.getElementById("formB").addEventListener("submit", function (event) {

    event.preventDefault();

    const status = document.getElementById("formStatus");

    status.innerHTML = `
        <span class="text-success">
            <i class="ri-checkbox-circle-line me-1"></i>
            Form-B saved successfully at
            ${new Date().toLocaleTimeString()}
        </span>
    `;

    console.log("Form-B submitted successfully.");

});


document.getElementById("topSaveBtn").addEventListener("click", function () {

    document.getElementById("formB").requestSubmit();

});


document.getElementById("formB").addEventListener("reset", function () {

    setTimeout(function () {

        document.getElementById("formStatus").innerHTML = `
            <span class="text-muted">
                Form has been reset.
            </span>
        `;

    }, 50);

});

</script>


<?php include 'includes/footer.php'; ?>