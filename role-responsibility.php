
<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <!-- Page Title -->
    <div class="row">
        <div class="col-12">

            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Role &amp; Responsibility</h4>

                    <p class="text-muted mb-0 mt-1">
                        Define the employee's role, responsibilities, and expectations
                    </p>
                </div>

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                Employee Management
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            Role &amp; Responsibility
                        </li>

                    </ol>

                </div>

            </div>

        </div>
    </div>


    <!-- Employee Information -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center flex-wrap gap-3">

                        <!-- Avatar -->
                        <div class="avatar-lg flex-shrink-0">

                            <span class="avatar-title rounded-circle bg-primary-subtle text-primary fs-3">
                                AH
                            </span>

                        </div>


                        <!-- Employee Details -->
                        <div class="flex-grow-1">

                            <h5 class="mb-1">
                                Abdul Hameed
                            </h5>

                            <p class="text-muted mb-2">
                                Software Engineer
                            </p>

                            <span class="badge bg-success-subtle text-success">
                                Active Employee
                            </span>

                        </div>


                        <!-- Employee Detail Button -->
                        <div>

                            <a href="employee-detail.php"
                               class="btn btn-light">

                                <i class="ri-user-line align-bottom me-1"></i>

                                Employee Detail

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Role Information -->
    <div class="row">

        <div class="col-xl-4">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Role Information
                    </h5>

                </div>


                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Employee Role
                        </label>

                        <input type="text"
                               class="form-control"
                               id="employeeRole"
                               value="Software Engineer">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Department
                        </label>

                        <input type="text"
                               class="form-control"
                               id="department"
                               value="Development">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Level
                        </label>

                        <select class="form-select"
                                id="employeeLevel">

                            <option value="L1">
                                L1
                            </option>

                            <option value="L2" selected>
                                L2
                            </option>

                            <option value="L3">
                                L3
                            </option>

                            <option value="L4">
                                L4
                            </option>

                        </select>

                    </div>


                    <div class="mb-0">

                        <label class="form-label">
                            Reporting To
                        </label>

                        <input type="text"
                               class="form-control"
                               id="reportingTo"
                               value="Abid Shah">

                    </div>

                </div>

            </div>

        </div>


        <!-- Role Summary -->
        <div class="col-xl-8">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Role Summary
                    </h5>

                </div>


                <div class="card-body">

                    <label class="form-label">
                        Role Description
                    </label>

                    <textarea class="form-control"
                              id="roleDescription"
                              rows="5"
                              placeholder="Enter role description...">Responsible for developing, maintaining, and improving web applications while collaborating with the development team to deliver reliable and maintainable software solutions.</textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Responsibilities -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Key Responsibilities
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Define the main responsibilities assigned to the employee.
                        </p>

                    </div>


                    <span class="badge bg-primary-subtle text-primary">
                        <span id="responsibilityCount">8</span> Responsibilities
                    </span>

                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover table-nowrap align-middle mb-0"
                               id="responsibilityTable">

                            <thead class="table-light">

                                <tr>

                                    <th style="width:70px;"
                                        class="text-center">
                                        Sr No.
                                    </th>

                                    <th style="min-width:350px;">
                                        Responsibility
                                    </th>

                                    <th style="min-width:250px;">
                                        Expected Outcome
                                    </th>

                                    <th style="width:120px;"
                                        class="text-center">
                                        Priority
                                    </th>

                                    <th style="width:90px;"
                                        class="text-center">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr>

                                    <td class="text-center">
                                        1
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Develop and maintain web applications">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Reliable and maintainable applications">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-danger-subtle text-danger">
                                            High
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        2
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Design and implement REST APIs">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Secure and well-documented APIs">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-danger-subtle text-danger">
                                            High
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        3
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Participate in code reviews">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Improved code quality">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-warning-subtle text-warning">
                                            Medium
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        4
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Troubleshoot and resolve technical issues">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Issues resolved within expected time">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-danger-subtle text-danger">
                                            High
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        5
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Collaborate with development team">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Effective team delivery">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-warning-subtle text-warning">
                                            Medium
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        6
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Write technical documentation">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Clear and updated documentation">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-info-subtle text-info">
                                            Normal
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        7
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Support testing and deployment">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Smooth releases and deployments">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-danger-subtle text-danger">
                                            High
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-center">
                                        8
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Follow software development standards">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="Consistent engineering practices">
                                    </td>

                                    <td class="text-center">

                                        <span class="badge bg-warning-subtle text-warning">
                                            Medium
                                        </span>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-row">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <!-- Add Responsibility -->
                    <div class="mt-3">

                        <button type="button"
                                class="btn btn-light"
                                id="addResponsibility">

                            <i class="ri-add-line align-bottom me-1"></i>

                            Add Responsibility

                        </button>

                    </div>


                    <!-- Actions -->
                    <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">

                        <div id="status"
                             class="text-muted fs-13">
                        </div>


                        <div class="d-flex gap-2">

                            <button type="button"
                                    class="btn btn-light"
                                    id="resetBtn">

                                <i class="ri-refresh-line align-bottom me-1"></i>

                                Reset

                            </button>


                            <button type="button"
                                    class="btn btn-primary"
                                    id="saveBtn">

                                <i class="ri-save-line align-bottom me-1"></i>

                                Save

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Additional Expectations -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Additional Expectations
                    </h5>

                </div>


                <div class="card-body">

                    <textarea class="form-control"
                              id="additionalExpectations"
                              rows="4"
                              placeholder="Add any additional expectations, notes, or instructions..."></textarea>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

    /*
     * Update responsibility numbers
     */
    function updateNumbers() {

        const rows = document.querySelectorAll(
            "#responsibilityTable tbody tr"
        );

        rows.forEach((row, index) => {

            row.querySelector("td:first-child").textContent =
                index + 1;

        });


        document.getElementById(
            "responsibilityCount"
        ).textContent = rows.length;

    }


    /*
     * Delete responsibility
     */
    document.querySelectorAll(".delete-row").forEach(button => {

        button.addEventListener("click", function () {

            const row = this.closest("tr");

            row.remove();

            updateNumbers();

        });

    });


    /*
     * Add responsibility
     */
    document.getElementById(
        "addResponsibility"
    ).addEventListener("click", function () {

        const tbody = document.querySelector(
            "#responsibilityTable tbody"
        );

        const row = document.createElement("tr");

        row.innerHTML = `

            <td class="text-center">
                0
            </td>

            <td>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter responsibility"
                >
            </td>

            <td>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter expected outcome"
                >
            </td>

            <td class="text-center">

                <select class="form-select form-select-sm">

                    <option value="High">
                        High
                    </option>

                    <option value="Medium" selected>
                        Medium
                    </option>

                    <option value="Normal">
                        Normal
                    </option>

                </select>

            </td>

            <td class="text-center">

                <button
                    type="button"
                    class="btn btn-sm btn-light delete-row">

                    <i class="ri-delete-bin-line"></i>

                </button>

            </td>

        `;


        tbody.appendChild(row);


        row.querySelector(".delete-row")
            .addEventListener("click", function () {

                row.remove();

                updateNumbers();

            });


        updateNumbers();

    });


    /*
     * Save
     */
    document.getElementById(
        "saveBtn"
    ).addEventListener("click", function () {

        const rows = [
            ...document.querySelectorAll(
                "#responsibilityTable tbody tr"
            )
        ];


        const responsibilities = rows.map(row => {

            const inputs = row.querySelectorAll("input");

            const priority = row.querySelector("select");


            return {

                responsibility:
                    inputs[0]
                        ? inputs[0].value
                        : "",

                outcome:
                    inputs[1]
                        ? inputs[1].value
                        : "",

                priority:
                    priority
                        ? priority.value
                        : ""

            };

        });


        const data = {

            role:
                document.getElementById(
                    "employeeRole"
                ).value,

            department:
                document.getElementById(
                    "department"
                ).value,

            level:
                document.getElementById(
                    "employeeLevel"
                ).value,

            reportingTo:
                document.getElementById(
                    "reportingTo"
                ).value,

            description:
                document.getElementById(
                    "roleDescription"
                ).value,

            responsibilities:
                responsibilities,

            additionalExpectations:
                document.getElementById(
                    "additionalExpectations"
                ).value

        };


        console.log(
            "Role & Responsibility data:",
            data
        );


        document.getElementById(
            "status"
        ).innerHTML = `

            <span class="text-success">

                <i class="ri-checkbox-circle-line me-1"></i>

                Saved ${new Date().toLocaleTimeString()}

            </span>

        `;

    });


    /*
     * Reset
     */
    document.getElementById(
        "resetBtn"
    ).addEventListener("click", function () {

        window.location.reload();

    });


    /*
     * Initial count
     */
    updateNumbers();

</script>


<?php include 'includes/footer.php'; ?>

