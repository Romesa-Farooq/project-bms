<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <!-- Page Title -->
    <div class="row">
        <div class="col-12">

            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Form-A</h4>
                    <p class="text-muted mb-0 mt-1">
                        Employee information and employment details
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
                            Form-A
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


    <form id="formA">


        <!-- ========================================= -->
        <!-- PERSONAL INFORMATION -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Personal Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Basic information of the employee
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Full Name
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="full_name"
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


                            <div class="col-md-4">

                                <label class="form-label">
                                    Gender
                                </label>

                                <select class="form-select"
                                        name="gender">

                                    <option selected>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>

                                </select>

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Date of Birth
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="date_of_birth">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    CNIC
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="cnic"
                                       placeholder="XXXXX-XXXXXXX-X">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Nationality
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="nationality"
                                       value="Pakistani">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Marital Status
                                </label>

                                <select class="form-select"
                                        name="marital_status">

                                    <option selected>Single</option>
                                    <option>Married</option>
                                    <option>Other</option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- CONTACT INFORMATION -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-xl-8">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Contact Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Employee contact and residential information
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Mobile Number
                                </label>

                                <input type="tel"
                                       class="form-control"
                                       name="mobile"
                                       value="+92 300 1234567">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Personal Email
                                </label>

                                <input type="email"
                                       class="form-control"
                                       name="personal_email"
                                       value="abdul.personal@example.com">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Official Email
                                </label>

                                <input type="email"
                                       class="form-control"
                                       name="official_email"
                                       value="abdul@example.com">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Preferred Contact
                                </label>

                                <select class="form-select"
                                        name="preferred_contact">

                                    <option selected>Email</option>
                                    <option>Phone</option>
                                    <option>WhatsApp</option>

                                </select>

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Home Address
                                </label>

                                <textarea class="form-control"
                                          name="home_address"
                                          rows="3">House 14, Islamabad, Pakistan</textarea>

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    City
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="city"
                                       value="Islamabad">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Province
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="province"
                                       value="Islamabad Capital Territory">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Country
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="country"
                                       value="Pakistan">

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Emergency Contact -->

            <div class="col-xl-4">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Emergency Contact
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Contact Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="emergency_name"
                                   value="Father">

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Relationship
                            </label>

                            <select class="form-select"
                                    name="emergency_relation">

                                <option selected>Father</option>
                                <option>Mother</option>
                                <option>Spouse</option>
                                <option>Sibling</option>
                                <option>Other</option>

                            </select>

                        </div>


                        <div>

                            <label class="form-label">
                                Contact Number
                            </label>

                            <input type="tel"
                                   class="form-control"
                                   name="emergency_phone"
                                   value="+92 301 7654321">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- EMPLOYMENT INFORMATION -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Employment Information
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Current employment and organizational details
                        </p>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-4">

                                <label class="form-label">
                                    Job Title
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="job_title"
                                       value="Software Engineer">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Department
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="department"
                                       value="Development">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Employee Group
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="employee_group"
                                       value="Development">

                            </div>


                            <div class="col-md-4">

                                <label class="form-label">
                                    Date of Hire
                                </label>

                                <input type="date"
                                       class="form-control"
                                       name="hire_date"
                                       value="2025-01-15">

                            </div>


                            <div class="col-md-4">

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


                            <div class="col-md-4">

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


                            <div class="col-md-4">

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


                            <div class="col-md-4">

                                <label class="form-label">
                                    Location
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="location"
                                       value="Islamabad">

                            </div>


                            <div class="col-md-4">

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

        </div>


        <!-- ========================================= -->
        <!-- EDUCATION -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-xl-7">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Education
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Highest Qualification
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="qualification"
                                       placeholder="Enter qualification">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Field of Study
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="field_of_study"
                                       placeholder="Enter field">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Institution
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="institution"
                                       placeholder="Enter institution">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Completion Year
                                </label>

                                <input type="number"
                                       class="form-control"
                                       name="completion_year"
                                       placeholder="YYYY">

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-xl-5">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Professional Skills
                        </h5>

                    </div>

                    <div class="card-body">

                        <label class="form-label">
                            Primary Skills
                        </label>

                        <textarea class="form-control"
                                  name="skills"
                                  rows="4"
                                  placeholder="Enter employee skills...">Web Development, Software Engineering, Technical Leadership</textarea>

                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- ROLES & RESPONSIBILITIES -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-1">
                            Roles &amp; Responsibilities
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Primary responsibilities assigned to the employee
                        </p>

                    </div>

                    <div class="card-body">

                        <textarea class="form-control"
                                  name="responsibilities"
                                  rows="5"
                                  placeholder="Enter roles and responsibilities...">Develop and maintain software applications.
Participate in technical discussions and planning.
Maintain code quality and documentation.
Support team members with technical issues.
Contribute to project delivery and continuous improvement.</textarea>

                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- ADDITIONAL INFORMATION -->
        <!-- ========================================= -->

        <div class="row">

            <div class="col-xl-6">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Additional Information
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Bio
                            </label>

                            <textarea class="form-control"
                                      name="bio"
                                      rows="4"
                                      placeholder="Enter employee bio...">Software engineer focused on building dependable web products, improving delivery practices, and helping teams turn complex requirements into clear, maintainable solutions.</textarea>

                        </div>


                        <div>

                            <label class="form-label">
                                Notes
                            </label>

                            <textarea class="form-control"
                                      name="notes"
                                      rows="4"
                                      placeholder="Add additional notes..."></textarea>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Documents -->

            <div class="col-xl-6">

                <div class="card">

                    <div class="card-header">

                        <h5 class="card-title mb-0">
                            Documents
                        </h5>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">

                            <label class="form-label">
                                Resume / CV
                            </label>

                            <input type="file"
                                   class="form-control"
                                   name="resume"
                                   accept=".pdf,.doc,.docx">

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Employee Picture
                            </label>

                            <input type="file"
                                   class="form-control"
                                   name="employee_picture"
                                   accept="image/*">

                        </div>


                        <div>

                            <label class="form-label">
                                Supporting Document
                            </label>

                            <input type="file"
                                   class="form-control"
                                   name="supporting_document"
                                   accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ========================================= -->
        <!-- FORM ACTIONS -->
        <!-- ========================================= -->

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

/*
|--------------------------------------------------------------------------
| Form-A Submit
|--------------------------------------------------------------------------
*/

document.getElementById("formA").addEventListener("submit", function (event) {

    event.preventDefault();

    const status = document.getElementById("formStatus");

    status.innerHTML = `
        <span class="text-success">
            <i class="ri-checkbox-circle-line me-1"></i>
            Form-A saved successfully at
            ${new Date().toLocaleTimeString()}
        </span>
    `;

    console.log("Form-A submitted successfully.");

});


/*
|--------------------------------------------------------------------------
| Top Save Button
|--------------------------------------------------------------------------
*/

document.getElementById("topSaveBtn").addEventListener("click", function () {

    document.getElementById("formA").requestSubmit();

});


/*
|--------------------------------------------------------------------------
| Reset Message
|--------------------------------------------------------------------------
*/

document.getElementById("formA").addEventListener("reset", function () {

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