
<?php include 'includes/header.php'; ?>

<div class="container-fluid">

    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                <div>
                    <h4 class="mb-sm-0">Time Live</h4>

                    <p class="text-muted mb-0 mt-1">
                        Track employee working hours and attendance
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
                            Time Live
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


                        <div class="text-end">

                            <h4 class="mb-1 text-primary"
                                id="liveTime">
                                --:--:--
                            </h4>

                            <p class="text-muted mb-0"
                               id="liveDate">
                                Loading...
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Time Cards -->
    <div class="row">

        <div class="col-xl-3 col-md-6">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div class="avatar-sm flex-shrink-0">

                            <span class="avatar-title rounded bg-primary-subtle text-primary">

                                <i class="ri-time-line fs-20"></i>

                            </span>

                        </div>


                        <div class="ms-3">

                            <p class="text-muted mb-1">
                                Current Time
                            </p>

                            <h5 class="mb-0"
                                id="currentTimeCard">
                                --:--:--
                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div class="avatar-sm flex-shrink-0">

                            <span class="avatar-title rounded bg-success-subtle text-success">

                                <i class="ri-login-circle-line fs-20"></i>

                            </span>

                        </div>


                        <div class="ms-3">

                            <p class="text-muted mb-1">
                                Check In
                            </p>

                            <h5 class="mb-0"
                                id="checkInTime">
                                Not checked in
                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div class="avatar-sm flex-shrink-0">

                            <span class="avatar-title rounded bg-warning-subtle text-warning">

                                <i class="ri-hourglass-line fs-20"></i>

                            </span>

                        </div>


                        <div class="ms-3">

                            <p class="text-muted mb-1">
                                Working Time
                            </p>

                            <h5 class="mb-0"
                                id="workingTime">
                                00:00:00
                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div class="avatar-sm flex-shrink-0">

                            <span class="avatar-title rounded bg-info-subtle text-info">

                                <i class="ri-calendar-check-line fs-20"></i>

                            </span>

                        </div>


                        <div class="ms-3">

                            <p class="text-muted mb-1">
                                Today's Status
                            </p>

                            <h5 class="mb-0"
                                id="attendanceStatus">

                                Not Started

                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Live Time & Attendance -->
    <div class="row">

        <div class="col-xl-8">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Live Attendance
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Record today's working hours.
                        </p>

                    </div>


                    <span class="badge bg-primary-subtle text-primary"
                          id="liveStatus">

                        Not Started

                    </span>

                </div>


                <div class="card-body">

                    <div class="row g-4">

                        <!-- Live Clock -->
                        <div class="col-md-6">

                            <div class="border rounded p-4 text-center h-100">

                                <div class="avatar-lg mx-auto mb-3">

                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">

                                        <i class="ri-time-line fs-2"></i>

                                    </span>

                                </div>


                                <h2 class="mb-2"
                                    id="mainClock">

                                    --:--:--

                                </h2>


                                <p class="text-muted mb-0"
                                   id="mainDate">

                                    Loading...

                                </p>

                            </div>

                        </div>


                        <!-- Attendance Actions -->
                        <div class="col-md-6">

                            <div class="border rounded p-4 h-100">

                                <h6 class="mb-3">
                                    Attendance Actions
                                </h6>


                                <div class="d-grid gap-2">

                                    <button type="button"
                                            class="btn btn-success"
                                            id="checkInBtn">

                                        <i class="ri-login-circle-line align-bottom me-1"></i>

                                        Check In

                                    </button>


                                    <button type="button"
                                            class="btn btn-danger"
                                            id="checkOutBtn"
                                            disabled>

                                        <i class="ri-logout-circle-line align-bottom me-1"></i>

                                        Check Out

                                    </button>

                                </div>


                                <div class="mt-4">

                                    <div class="d-flex justify-content-between mb-2">

                                        <span class="text-muted">
                                            Check In
                                        </span>

                                        <span class="fw-medium"
                                              id="actionCheckIn">

                                            --

                                        </span>

                                    </div>


                                    <div class="d-flex justify-content-between mb-2">

                                        <span class="text-muted">
                                            Check Out
                                        </span>

                                        <span class="fw-medium"
                                              id="actionCheckOut">

                                            --

                                        </span>

                                    </div>


                                    <div class="d-flex justify-content-between">

                                        <span class="text-muted">
                                            Total Hours
                                        </span>

                                        <span class="fw-medium"
                                              id="actionTotal">

                                            00:00:00

                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Today's Summary -->
        <div class="col-xl-4">

            <div class="card h-100">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Today's Summary
                    </h5>

                </div>


                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <p class="text-muted mb-1">
                                Work Hours
                            </p>

                            <h4 class="mb-0"
                                id="summaryHours">
                                00:00
                            </h4>

                        </div>


                        <div class="avatar-sm">

                            <span class="avatar-title rounded bg-primary-subtle text-primary">

                                <i class="ri-time-line"></i>

                            </span>

                        </div>

                    </div>


                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <p class="text-muted mb-1">
                                Break Time
                            </p>

                            <h4 class="mb-0">
                                01:00
                            </h4>

                        </div>


                        <div class="avatar-sm">

                            <span class="avatar-title rounded bg-warning-subtle text-warning">

                                <i class="ri-cup-line"></i>

                            </span>

                        </div>

                    </div>


                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <p class="text-muted mb-1">
                                Expected Hours
                            </p>

                            <h4 class="mb-0">
                                08:00
                            </h4>

                        </div>


                        <div class="avatar-sm">

                            <span class="avatar-title rounded bg-info-subtle text-info">

                                <i class="ri-calendar-line"></i>

                            </span>

                        </div>

                    </div>


                    <div>

                        <div class="d-flex justify-content-between mb-2">

                            <span class="text-muted">
                                Daily Progress
                            </span>

                            <span class="fw-medium"
                                  id="dailyProgressText">
                                0%
                            </span>

                        </div>


                        <div class="progress">

                            <div class="progress-bar bg-primary"
                                 role="progressbar"
                                 id="dailyProgress"
                                 style="width: 0%;">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Weekly Attendance -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">

                    <div>

                        <h5 class="card-title mb-1">
                            Weekly Attendance
                        </h5>

                        <p class="text-muted mb-0 fs-13">
                            Overview of employee attendance for the current week.
                        </p>

                    </div>


                    <span class="badge bg-success-subtle text-success">
                        Current Week
                    </span>

                </div>


                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover table-nowrap align-middle mb-0">

                            <thead class="table-light">

                                <tr>

                                    <th>
                                        Date
                                    </th>

                                    <th>
                                        Day
                                    </th>

                                    <th>
                                        Check In
                                    </th>

                                    <th>
                                        Check Out
                                    </th>

                                    <th>
                                        Working Hours
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <tr>

                                    <td>
                                        21 Sep 2026
                                    </td>

                                    <td>
                                        Monday
                                    </td>

                                    <td>
                                        09:02 AM
                                    </td>

                                    <td>
                                        05:18 PM
                                    </td>

                                    <td>
                                        08:16
                                    </td>

                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Present
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        22 Sep 2026
                                    </td>

                                    <td>
                                        Tuesday
                                    </td>

                                    <td>
                                        09:08 AM
                                    </td>

                                    <td>
                                        05:11 PM
                                    </td>

                                    <td>
                                        08:03
                                    </td>

                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Present
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        23 Sep 2026
                                    </td>

                                    <td>
                                        Wednesday
                                    </td>

                                    <td>
                                        09:01 AM
                                    </td>

                                    <td>
                                        05:20 PM
                                    </td>

                                    <td>
                                        08:19
                                    </td>

                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Present
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        24 Sep 2026
                                    </td>

                                    <td>
                                        Thursday
                                    </td>

                                    <td>
                                        09:12 AM
                                    </td>

                                    <td>
                                        05:05 PM
                                    </td>

                                    <td>
                                        07:53
                                    </td>

                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Present
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        25 Sep 2026
                                    </td>

                                    <td>
                                        Friday
                                    </td>

                                    <td>
                                        09:04 AM
                                    </td>

                                    <td>
                                        04:58 PM
                                    </td>

                                    <td>
                                        07:54
                                    </td>

                                    <td>
                                        <span class="badge bg-success-subtle text-success">
                                            Present
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


    <!-- Notes -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-0">
                        Attendance Notes
                    </h5>

                </div>


                <div class="card-body">

                    <textarea class="form-control"
                              id="attendanceNotes"
                              rows="4"
                              placeholder="Add any attendance-related notes..."></textarea>

                </div>

            </div>

        </div>

    </div>


    <!-- Save -->
    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                        <div id="saveStatus"
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

                                Save Attendance

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

    let checkInTimestamp = null;
    let checkOutTimestamp = null;
    let timerInterval = null;


    /*
     * Live clock
     */
    function updateClock() {

        const now = new Date();

        const time = now.toLocaleTimeString(
            "en-US",
            {
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit"
            }
        );


        const date = now.toLocaleDateString(
            "en-US",
            {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric"
            }
        );


        document.getElementById(
            "liveTime"
        ).textContent = time;


        document.getElementById(
            "currentTimeCard"
        ).textContent = time;


        document.getElementById(
            "mainClock"
        ).textContent = time;


        document.getElementById(
            "liveDate"
        ).textContent = date;


        document.getElementById(
            "mainDate"
        ).textContent = date;

    }


    updateClock();

    setInterval(updateClock, 1000);


    /*
     * Format duration
     */
    function formatDuration(milliseconds) {

        const totalSeconds = Math.floor(
            milliseconds / 1000
        );


        const hours = Math.floor(
            totalSeconds / 3600
        );


        const minutes = Math.floor(
            (totalSeconds % 3600) / 60
        );


        const seconds =
            totalSeconds % 60;


        return [

            String(hours).padStart(2, "0"),

            String(minutes).padStart(2, "0"),

            String(seconds).padStart(2, "0")

        ].join(":");

    }


    /*
     * Update working time
     */
    function updateWorkingTime() {

        if (!checkInTimestamp) {
            return;
        }


        const endTime =
            checkOutTimestamp ||
            new Date();


        const duration =
            endTime - checkInTimestamp;


        const formatted =
            formatDuration(duration);


        document.getElementById(
            "workingTime"
        ).textContent = formatted;


        document.getElementById(
            "actionTotal"
        ).textContent = formatted;


        const totalHours =
            duration / (1000 * 60 * 60);


        const percentage =
            Math.min(
                (totalHours / 8) * 100,
                100
            );


        document.getElementById(
            "dailyProgress"
        ).style.width =
            percentage + "%";


        document.getElementById(
            "dailyProgressText"
        ).textContent =
            Math.round(percentage) + "%";


        document.getElementById(
            "summaryHours"
        ).textContent =
            formatDuration(duration)
                .substring(0, 5);

    }


    /*
     * Check In
     */
    document.getElementById(
        "checkInBtn"
    ).addEventListener(
        "click",
        function () {

            if (checkInTimestamp) {
                return;
            }


            checkInTimestamp = new Date();


            const time =
                checkInTimestamp.toLocaleTimeString(
                    "en-US",
                    {
                        hour: "2-digit",
                        minute: "2-digit",
                        second: "2-digit"
                    }
                );


            document.getElementById(
                "checkInTime"
            ).textContent = time;


            document.getElementById(
                "actionCheckIn"
            ).textContent = time;


            document.getElementById(
                "attendanceStatus"
            ).textContent = "Working";


            document.getElementById(
                "liveStatus"
            ).textContent = "Working";


            document.getElementById(
                "liveStatus"
            ).className =
                "badge bg-success-subtle text-success";


            document.getElementById(
                "checkInBtn"
            ).disabled = true;


            document.getElementById(
                "checkOutBtn"
            ).disabled = false;


            timerInterval = setInterval(
                updateWorkingTime,
                1000
            );


            updateWorkingTime();

        }
    );


    /*
     * Check Out
     */
    document.getElementById(
        "checkOutBtn"
    ).addEventListener(
        "click",
        function () {

            if (!checkInTimestamp) {
                return;
            }


            checkOutTimestamp = new Date();


            const time =
                checkOutTimestamp.toLocaleTimeString(
                    "en-US",
                    {
                        hour: "2-digit",
                        minute: "2-digit",
                        second: "2-digit"
                    }
                );


            document.getElementById(
                "actionCheckOut"
            ).textContent = time;


            document.getElementById(
                "attendanceStatus"
            ).textContent = "Completed";


            document.getElementById(
                "liveStatus"
            ).textContent = "Completed";


            document.getElementById(
                "liveStatus"
            ).className =
                "badge bg-primary-subtle text-primary";


            document.getElementById(
                "checkOutBtn"
            ).disabled = true;


            clearInterval(timerInterval);


            updateWorkingTime();

        }
    );


    /*
     * Save Attendance
     */
    document.getElementById(
        "saveBtn"
    ).addEventListener(
        "click",
        function () {

            const data = {

                employee: "Abdul Hameed",

                checkIn:
                    checkInTimestamp
                        ? checkInTimestamp.toISOString()
                        : null,

                checkOut:
                    checkOutTimestamp
                        ? checkOutTimestamp.toISOString()
                        : null,

                notes:
                    document.getElementById(
                        "attendanceNotes"
                    ).value

            };


            console.log(
                "Attendance:",
                data
            );


            document.getElementById(
                "saveStatus"
            ).innerHTML = `

                <span class="text-success">

                    <i class="ri-checkbox-circle-line me-1"></i>

                    Attendance saved at
                    ${new Date().toLocaleTimeString()}

                </span>

            `;

        }
    );


    /*
     * Reset
     */
    document.getElementById(
        "resetBtn"
    ).addEventListener(
        "click",
        function () {

            clearInterval(timerInterval);

            checkInTimestamp = null;

            checkOutTimestamp = null;


            document.getElementById(
                "checkInTime"
            ).textContent =
                "Not checked in";


            document.getElementById(
                "actionCheckIn"
            ).textContent =
                "--";


            document.getElementById(
                "actionCheckOut"
            ).textContent =
                "--";


            document.getElementById(
                "workingTime"
            ).textContent =
                "00:00:00";


            document.getElementById(
                "actionTotal"
            ).textContent =
                "00:00:00";


            document.getElementById(
                "summaryHours"
            ).textContent =
                "00:00";


            document.getElementById(
                "attendanceStatus"
            ).textContent =
                "Not Started";


            document.getElementById(
                "liveStatus"
            ).textContent =
                "Not Started";


            document.getElementById(
                "liveStatus"
            ).className =
                "badge bg-primary-subtle text-primary";


            document.getElementById(
                "dailyProgress"
            ).style.width =
                "0%";


            document.getElementById(
                "dailyProgressText"
            ).textContent =
                "0%";


            document.getElementById(
                "checkInBtn"
            ).disabled =
                false;


            document.getElementById(
                "checkOutBtn"
            ).disabled =
                true;


            document.getElementById(
                "attendanceNotes"
            ).value =
                "";


            document.getElementById(
                "saveStatus"
            ).textContent =
                "";

        }
    );

</script>


<?php include 'includes/footer.php'; ?>
