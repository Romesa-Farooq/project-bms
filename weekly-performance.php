
<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Weekly Performance</h4>
                    <p class="text-muted mb-0 mt-1">
                        Review employee performance, progress, achievements, and feedback
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
                            Weekly Performance
                        </li>

                    </ol>
                </div>

            </div>
        </div>
    </div>


    <!-- Employee Summary -->
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


    <!-- Week Selection -->
    <div class="row">

        <div class="col-xl-4">

            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Performance Period
                    </h5>
                </div>

                <div class="card-body">

                    <div class="mb-3">

                        <label class="form-label">
                            Week
                        </label>

                        <input type="week"
                               class="form-control"
                               id="performanceWeek"
                               value="2026-W39">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Reporting Manager
                        </label>

                        <input type="text"
                               class="form-control"
                               id="manager"
                               value="Abid Shah">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Overall Rating
                        </label>

                        <select class="form-select"
                                id="overallRating">

                            <option value="">
                                Select Rating
                            </option>

                            <option value="Excellent">
                                Excellent
                            </option>

                            <option value="Very Good" selected>
                                Very Good
                            </option>

                            <option value="Good">
                                Good
                            </option>

                            <option value="Needs Improvement">
                                Needs Improvement
                            </option>

                        </select>

                    </div>

                    <div>

                        <label class="form-label">
                            Completion
                        </label>

                        <div class="progress animated-progress custom-progress progress-label">

                            <div class="progress-bar bg-primary"
                                 role="progressbar"
                                 style="width: 82%;"
                                 id="completionBar">

                                <div class="label">
                                    <span id="completionValue">
                                        82%
                                    </span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Weekly Summary -->
        <div class="col-xl-8">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Weekly Summary
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Provide a brief overview of the employee's performance this week.
                    </p>

                </div>

                <div class="card-body">

                    <textarea class="form-control"
                              id="weeklySummary"
                              rows="6"
                              placeholder="Enter weekly performance summary...">Completed assigned development tasks, participated in code reviews, resolved reported issues, and supported the team with testing and deployment activities.</textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Performance Metrics -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Performance Metrics
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Record weekly targets and actual performance.
                        </p>

                    </div>

                    <span class="badge bg-primary-subtle text-primary">
                        Weekly Review
                    </span>

                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover table-nowrap align-middle mb-0"
                               id="performanceTable">

                            <thead class="table-light">

                                <tr>

                                    <th style="width:60px;"
                                        class="text-center">
                                        #
                                    </th>

                                    <th style="min-width:260px;">
                                        Performance Area
                                    </th>

                                    <th style="min-width:180px;">
                                        Target
                                    </th>

                                    <th style="min-width:180px;">
                                        Actual
                                    </th>

                                    <th style="width:150px;">
                                        Status
                                    </th>

                                    <th style="width:80px;"
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
                                               value="Development Tasks">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="5 tasks">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="5 tasks">
                                    </td>

                                    <td>

                                        <select class="form-select performance-status">

                                            <option value="Completed" selected>
                                                Completed
                                            </option>

                                            <option value="In Progress">
                                                In Progress
                                            </option>

                                            <option value="Delayed">
                                                Delayed
                                            </option>

                                        </select>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-performance">

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
                                               value="Code Reviews">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="3 reviews">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="3 reviews">
                                    </td>

                                    <td>

                                        <select class="form-select performance-status">

                                            <option value="Completed" selected>
                                                Completed
                                            </option>

                                            <option value="In Progress">
                                                In Progress
                                            </option>

                                            <option value="Delayed">
                                                Delayed
                                            </option>

                                        </select>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-performance">

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
                                               value="Bug Resolution">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="4 issues">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="3 issues">
                                    </td>

                                    <td>

                                        <select class="form-select performance-status">

                                            <option value="Completed">
                                                Completed
                                            </option>

                                            <option value="In Progress" selected>
                                                In Progress
                                            </option>

                                            <option value="Delayed">
                                                Delayed
                                            </option>

                                        </select>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-performance">

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
                                               value="Documentation">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="2 documents">
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control"
                                               value="2 documents">
                                    </td>

                                    <td>

                                        <select class="form-select performance-status">

                                            <option value="Completed" selected>
                                                Completed
                                            </option>

                                            <option value="In Progress">
                                                In Progress
                                            </option>

                                            <option value="Delayed">
                                                Delayed
                                            </option>

                                        </select>

                                    </td>

                                    <td class="text-center">

                                        <button type="button"
                                                class="btn btn-sm btn-light delete-performance">

                                            <i class="ri-delete-bin-line"></i>

                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <div class="mt-3">

                        <button type="button"
                                class="btn btn-light"
                                id="addPerformance">

                            <i class="ri-add-line align-bottom me-1"></i>
                            Add Performance Area

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Achievements and Challenges -->
    <div class="row">

        <div class="col-xl-6">

            <div class="card h-100">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Weekly Achievements
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Highlight completed work and accomplishments.
                    </p>

                </div>

                <div class="card-body">

                    <textarea class="form-control"
                              id="achievements"
                              rows="7"
                              placeholder="Enter achievements...">Completed assigned development tasks and supported the deployment process.
Participated in code reviews and improved implementation quality.
Resolved reported application issues within the planned timeframe.</textarea>

                </div>

            </div>

        </div>


        <div class="col-xl-6">

            <div class="card h-100">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Challenges &amp; Blockers
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Record issues that affected weekly progress.
                    </p>

                </div>

                <div class="card-body">

                    <textarea class="form-control"
                              id="challenges"
                              rows="7"
                              placeholder="Enter challenges or blockers...">One integration issue required additional testing before deployment. The issue was identified and is currently being addressed.</textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Goals for Next Week -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Goals for Next Week
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Define the employee's upcoming priorities.
                    </p>

                </div>

                <div class="card-body">

                    <textarea class="form-control"
                              id="nextWeekGoals"
                              rows="5"
                              placeholder="Enter goals for next week...">Complete the remaining integration work.
Finalize pending documentation.
Continue code review and testing activities.</textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Manager Feedback -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-1">
                        Manager Feedback
                    </h5>

                    <p class="text-muted mb-0 fs-13">
                        Add feedback or observations from the reporting manager.
                    </p>

                </div>

                <div class="card-body">

                    <textarea class="form-control"
                              id="managerFeedback"
                              rows="5"
                              placeholder="Enter manager feedback...">Good progress throughout the week. Continue focusing on completing pending tasks and maintaining the same level of attention to code quality.</textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Actions -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

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
                                Save Performance

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

    /*
     * Update performance row numbers
     */
    function updateNumbers() {

        const rows = document.querySelectorAll(
            "#performanceTable tbody tr"
        );

        rows.forEach((row, index) => {

            row.querySelector(
                "td:first-child"
            ).textContent = index + 1;

        });

    }


    /*
     * Delete performance row
     */
    function attachDeleteEvents() {

        document.querySelectorAll(
            ".delete-performance"
        ).forEach(button => {

            button.onclick = function () {

                const row = this.closest("tr");

                row.remove();

                updateNumbers();

            };

        });

    }


    attachDeleteEvents();


    /*
     * Add performance area
     */
    document.getElementById(
        "addPerformance"
    ).addEventListener("click", function () {

        const tbody = document.querySelector(
            "#performanceTable tbody"
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
                    placeholder="Performance area"
                >
            </td>

            <td>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Target"
                >
            </td>

            <td>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Actual"
                >
            </td>

            <td>

                <select class="form-select performance-status">

                    <option value="Completed">
                        Completed
                    </option>

                    <option value="In Progress" selected>
                        In Progress
                    </option>

                    <option value="Delayed">
                        Delayed
                    </option>

                </select>

            </td>

            <td class="text-center">

                <button
                    type="button"
                    class="btn btn-sm btn-light delete-performance">

                    <i class="ri-delete-bin-line"></i>

                </button>

            </td>

        `;

        tbody.appendChild(row);

        updateNumbers();

        attachDeleteEvents();

    });


    /*
     * Collect performance data
     */
    function collectPerformanceData() {

        const rows = [
            ...document.querySelectorAll(
                "#performanceTable tbody tr"
            )
        ];


        return rows.map(row => {

            const inputs = row.querySelectorAll("input");

            const status = row.querySelector(
                ".performance-status"
            );


            return {

                area: inputs[0]
                    ? inputs[0].value
                    : "",

                target: inputs[1]
                    ? inputs[1].value
                    : "",

                actual: inputs[2]
                    ? inputs[2].value
                    : "",

                status: status
                    ? status.value
                    : ""

            };

        });

    }


    /*
     * Save performance
     */
    document.getElementById(
        "saveBtn"
    ).addEventListener("click", function () {

        const data = {

            employee: "Abdul Hameed",

            week:
                document.getElementById(
                    "performanceWeek"
                ).value,

            manager:
                document.getElementById(
                    "manager"
                ).value,

            overallRating:
                document.getElementById(
                    "overallRating"
                ).value,

            weeklySummary:
                document.getElementById(
                    "weeklySummary"
                ).value,

            performance:
                collectPerformanceData(),

            achievements:
                document.getElementById(
                    "achievements"
                ).value,

            challenges:
                document.getElementById(
                    "challenges"
                ).value,

            nextWeekGoals:
                document.getElementById(
                    "nextWeekGoals"
                ).value,

            managerFeedback:
                document.getElementById(
                    "managerFeedback"
                ).value

        };


        console.log(
            "Weekly Performance:",
            data
        );


        document.getElementById(
            "status"
        ).innerHTML = `

            <span class="text-success">

                <i class="ri-checkbox-circle-line me-1"></i>

                Performance saved at
                ${new Date().toLocaleTimeString()}

            </span>

        `;

    });


    /*
     * Reset page
     */
    document.getElementById(
        "resetBtn"
    ).addEventListener("click", function () {

        window.location.reload();

    });

</script>


<?php include 'includes/footer.php'; ?>

