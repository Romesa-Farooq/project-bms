<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Planning Form of Abdul Hameed</h4>

                    <p class="text-muted mb-0 mt-1">
                        Employee planning and performance objectives
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
                            Plans
                        </li>

                    </ol>
                </div>

            </div>
        </div>
    </div>


    <!-- Employee Planning Summary -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Planning Form
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Annual plans and employee objectives
                        </p>

                    </div>

                    <a href="employee-detail.php"
                       class="btn btn-light">

                        <i class="ri-arrow-left-line align-bottom me-1"></i>

                        Back

                    </a>

                </div>


                <div class="card-body">

                    <!-- Employee Information -->
                    <div class="row g-3 mb-4">

                        <div class="col-md-4">

                            <div class="border rounded p-3 h-100">

                                <div class="d-flex align-items-center">

                                    <div class="avatar-sm flex-shrink-0">

                                        <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                            AH
                                        </span>

                                    </div>

                                    <div class="ms-3">

                                        <p class="text-muted mb-1 fs-13">
                                            Employee
                                        </p>

                                        <h6 class="mb-0">
                                            Abdul Hameed
                                        </h6>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="border rounded p-3 h-100">

                                <p class="text-muted mb-1 fs-13">
                                    Position
                                </p>

                                <h6 class="mb-0">
                                    Software Engineer
                                </h6>

                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="border rounded p-3 h-100">

                                <p class="text-muted mb-1 fs-13">
                                    Department
                                </p>

                                <h6 class="mb-0">
                                    Development
                                </h6>

                            </div>

                        </div>

                    </div>


                    <!-- Plans Table -->
                    <div class="table-responsive">

                        <table class="table table-hover table-nowrap align-middle mb-0">

                            <thead class="table-light">

                                <tr>

                                    <th style="width: 80px;">
                                        S.No
                                    </th>

                                    <th>
                                        Year
                                    </th>

                                    <th>
                                        Quarter
                                    </th>

                                    <th>
                                        Plans
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr>

                                    <td>
                                        1
                                    </td>

                                    <td>
                                        2024
                                    </td>

                                    <td>
                                        Annual
                                    </td>

                                    <td>

                                        <button type="button"
                                                class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#planReviewModal">

                                            <i class="ri-eye-line align-bottom me-1"></i>

                                            Review

                                        </button>

                                    </td>

                                    <td>

                                        <span class="badge bg-info-subtle text-info">
                                            Initiated
                                        </span>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Plan Details -->
    <div class="row">

        <div class="col-xl-8">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Annual Plan
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Objectives and planned activities for 2024
                    </p>

                </div>


                <div class="card-body">

                    <div class="mb-4">

                        <label class="form-label">
                            Plan Objective
                        </label>

                        <textarea class="form-control"
                                  rows="4"
                                  id="planObjective"
                                  placeholder="Enter the main objective for this plan...">Improve software development practices, contribute to product delivery, and strengthen technical and communication skills.</textarea>

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Key Activities
                        </label>

                        <textarea class="form-control"
                                  rows="5"
                                  id="keyActivities"
                                  placeholder="Enter planned activities...">• Complete assigned development tasks
• Improve code quality and maintainability
• Participate in technical discussions
• Support team members when required
• Contribute to project documentation</textarea>

                    </div>


                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Start Date
                            </label>

                            <input type="date"
                                   class="form-control"
                                   id="startDate"
                                   value="2024-01-01">

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                End Date
                            </label>

                            <input type="date"
                                   class="form-control"
                                   id="endDate"
                                   value="2024-12-31">

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Plan Status -->
        <div class="col-xl-4">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Plan Status
                    </h5>

                </div>


                <div class="card-body">

                    <div class="text-center mb-4">

                        <div class="avatar-lg mx-auto mb-3">

                            <span class="avatar-title rounded-circle bg-info-subtle text-info">

                                <i class="ri-file-list-3-line fs-2"></i>

                            </span>

                        </div>

                        <h5 class="mb-1">
                            Initiated
                        </h5>

                        <p class="text-muted mb-0">
                            Annual planning cycle
                        </p>

                    </div>


                    <div class="border-top pt-3">

                        <div class="d-flex justify-content-between mb-3">

                            <span class="text-muted">
                                Year
                            </span>

                            <span class="fw-medium">
                                2024
                            </span>

                        </div>


                        <div class="d-flex justify-content-between mb-3">

                            <span class="text-muted">
                                Period
                            </span>

                            <span class="fw-medium">
                                Annual
                            </span>

                        </div>


                        <div class="d-flex justify-content-between mb-3">

                            <span class="text-muted">
                                Employee
                            </span>

                            <span class="fw-medium">
                                Abdul Hameed
                            </span>

                        </div>


                        <div class="d-flex justify-content-between">

                            <span class="text-muted">
                                Status
                            </span>

                            <span class="badge bg-info-subtle text-info">
                                Initiated
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Progress -->
            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Plan Progress
                    </h5>

                </div>


                <div class="card-body">

                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-muted">
                            Completion
                        </span>

                        <span class="fw-medium">
                            0%
                        </span>

                    </div>


                    <div class="progress"
                         style="height: 6px;">

                        <div class="progress-bar bg-primary"
                             role="progressbar"
                             style="width: 0%;">

                        </div>

                    </div>


                    <p class="text-muted fs-12 mt-3 mb-0">
                        The plan has been initiated and is ready for review.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- Goals -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Key Goals
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Main goals associated with the annual plan
                        </p>

                    </div>

                    <button type="button"
                            class="btn btn-sm btn-primary"
                            id="addGoalBtn">

                        <i class="ri-add-line align-bottom me-1"></i>

                        Add Goal

                    </button>

                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover table-nowrap align-middle mb-0"
                               id="goalsTable">

                            <thead class="table-light">

                                <tr>

                                    <th style="width: 70px;">
                                        #
                                    </th>

                                    <th>
                                        Goal
                                    </th>

                                    <th>
                                        Priority
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th class="text-end">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr>

                                    <td>
                                        1
                                    </td>

                                    <td>
                                        Improve development quality
                                    </td>

                                    <td>

                                        <span class="badge bg-danger-subtle text-danger">
                                            High
                                        </span>

                                    </td>

                                    <td>

                                        <span class="badge bg-warning-subtle text-warning">
                                            Not Started
                                        </span>

                                    </td>

                                    <td class="text-end">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-goal">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        2
                                    </td>

                                    <td>
                                        Strengthen technical skills
                                    </td>

                                    <td>

                                        <span class="badge bg-primary-subtle text-primary">
                                            Medium
                                        </span>

                                    </td>

                                    <td>

                                        <span class="badge bg-warning-subtle text-warning">
                                            Not Started
                                        </span>

                                    </td>

                                    <td class="text-end">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-goal">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        3
                                    </td>

                                    <td>
                                        Improve team collaboration
                                    </td>

                                    <td>

                                        <span class="badge bg-success-subtle text-success">
                                            Medium
                                        </span>

                                    </td>

                                    <td>

                                        <span class="badge bg-warning-subtle text-warning">
                                            Not Started
                                        </span>

                                    </td>

                                    <td class="text-end">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-goal">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Save Buttons -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">

                        <div id="saveMessage"
                             class="text-muted fs-13">
                        </div>


                        <div class="d-flex gap-2">

                            <a href="employee-detail.php"
                               class="btn btn-light">

                                <i class="ri-arrow-left-line align-bottom me-1"></i>

                                Back

                            </a>


                            <button type="button"
                                    class="btn btn-primary"
                                    id="savePlanBtn">

                                <i class="ri-save-line align-bottom me-1"></i>

                                Save Plan

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Review Modal -->
<div class="modal fade"
     id="planReviewModal"
     tabindex="-1"
     aria-labelledby="planReviewModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <div>

                    <h5 class="modal-title"
                        id="planReviewModalLabel">

                        Review Annual Plan

                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Planning Form of Abdul Hameed
                    </p>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <div class="modal-body">

                <div class="row g-3">

                    <div class="col-md-4">

                        <div class="border rounded p-3">

                            <p class="text-muted mb-1 fs-13">
                                Year
                            </p>

                            <h6 class="mb-0">
                                2024
                            </h6>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="border rounded p-3">

                            <p class="text-muted mb-1 fs-13">
                                Quarter
                            </p>

                            <h6 class="mb-0">
                                Annual
                            </h6>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="border rounded p-3">

                            <p class="text-muted mb-1 fs-13">
                                Status
                            </p>

                            <span class="badge bg-info-subtle text-info">
                                Initiated
                            </span>

                        </div>

                    </div>


                    <div class="col-12">

                        <div class="border rounded p-3">

                            <h6 class="mb-2">
                                Plan Objective
                            </h6>

                            <p class="text-muted mb-0">
                                Improve software development practices,
                                contribute to product delivery, and strengthen
                                technical and communication skills.
                            </p>

                        </div>

                    </div>


                    <div class="col-12">

                        <div class="border rounded p-3">

                            <h6 class="mb-3">
                                Key Goals
                            </h6>

                            <div class="d-flex align-items-center mb-2">

                                <i class="ri-checkbox-circle-line text-primary me-2"></i>

                                <span>
                                    Improve development quality
                                </span>

                            </div>


                            <div class="d-flex align-items-center mb-2">

                                <i class="ri-checkbox-circle-line text-primary me-2"></i>

                                <span>
                                    Strengthen technical skills
                                </span>

                            </div>


                            <div class="d-flex align-items-center">

                                <i class="ri-checkbox-circle-line text-primary me-2"></i>

                                <span>
                                    Improve team collaboration
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="modal-footer">

                <button type="button"
                        class="btn btn-light"
                        data-bs-dismiss="modal">

                    Close

                </button>


                <button type="button"
                        class="btn btn-primary"
                        id="approvePlanBtn">

                    <i class="ri-check-line align-bottom me-1"></i>

                    Approve Plan

                </button>

            </div>

        </div>

    </div>

</div>


<script>

    /*
     * Save Plan
     */
    document.getElementById("savePlanBtn").addEventListener("click", function () {

        const objective =
            document.getElementById("planObjective").value;

        const activities =
            document.getElementById("keyActivities").value;

        const startDate =
            document.getElementById("startDate").value;

        const endDate =
            document.getElementById("endDate").value;


        const planData = {

            employee: "Abdul Hameed",

            year: 2024,

            quarter: "Annual",

            objective: objective,

            activities: activities,

            startDate: startDate,

            endDate: endDate

        };


        console.log("Plan Data:", planData);


        document.getElementById("saveMessage").innerHTML = `

            <span class="text-success">

                <i class="ri-checkbox-circle-line me-1"></i>

                Plan saved at ${new Date().toLocaleTimeString()}

            </span>

        `;

    });


    /*
     * Add Goal
     */
    document.getElementById("addGoalBtn").addEventListener("click", function () {

        const tableBody =
            document.querySelector("#goalsTable tbody");

        const rowCount =
            tableBody.querySelectorAll("tr").length + 1;


        const row =
            document.createElement("tr");


        row.innerHTML = `

            <td>
                ${rowCount}
            </td>

            <td>
                <input
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Enter goal">
            </td>

            <td>

                <select class="form-select form-select-sm">

                    <option>High</option>
                    <option selected>Medium</option>
                    <option>Low</option>

                </select>

            </td>

            <td>

                <span class="badge bg-warning-subtle text-warning">
                    Not Started
                </span>

            </td>

            <td class="text-end">

                <button
                    type="button"
                    class="btn btn-sm btn-light delete-goal">

                    <i class="ri-delete-bin-line"></i>

                </button>

            </td>

        `;


        tableBody.appendChild(row);


        attachDeleteEvents();

    });


    /*
     * Delete Goal
     */
    function attachDeleteEvents() {

        document.querySelectorAll(".delete-goal").forEach(function (button) {

            button.onclick = function () {

                this.closest("tr").remove();

                updateGoalNumbers();

            };

        });

    }


    /*
     * Update goal numbers
     */
    function updateGoalNumbers() {

        document.querySelectorAll(
            "#goalsTable tbody tr"
        ).forEach(function (row, index) {

            row.children[0].textContent =
                index + 1;

        });

    }


    attachDeleteEvents();


    /*
     * Approve Plan
     */
    document.getElementById("approvePlanBtn").addEventListener(
        "click",
        function () {

            const statusCells =
                document.querySelectorAll(
                    "#goalsTable tbody tr td:nth-child(4)"
                );


            statusCells.forEach(function (cell) {

                cell.innerHTML = `

                    <span class="badge bg-success-subtle text-success">
                        In Progress
                    </span>

                `;

            });


            const statusBadge =
                document.querySelector(
                    ".card-body .badge.bg-info-subtle"
                );


            if (statusBadge) {

                statusBadge.className =
                    "badge bg-success-subtle text-success";

                statusBadge.textContent =
                    "Approved";

            }


            const modalElement =
                document.getElementById(
                    "planReviewModal"
                );


            const modal =
                bootstrap.Modal.getInstance(
                    modalElement
                );


            if (modal) {
                modal.hide();
            }


            document.getElementById(
                "saveMessage"
            ).innerHTML = `

                <span class="text-success">

                    <i class="ri-checkbox-circle-line me-1"></i>

                    Plan approved successfully.

                </span>

            `;

        }
    );

</script>


<?php include 'includes/footer.php'; ?>