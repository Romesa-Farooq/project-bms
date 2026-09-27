<?php include 'includes/header.php'; ?>

<style>
    /* ---- Legacy panel look (shared with employee-detail.php) ---- */
    .legacy-profile {
        background: #eef2f5;
        padding: 10px 0 30px;
    }
    .legacy-profile h4.page-heading {
        font-weight: 400;
        color: #333;
        margin: 0 0 18px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .panel-box {
        background: #fff;
        border: 1px solid #d7dee3;
        margin-bottom: 22px;
    }
    .panel-box .panel-head {
        background: #4a95bf;
        color: #fff;
        padding: 10px 16px;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .panel-box .panel-head a,
    .panel-box .panel-head .panel-action {
        color: #fff;
        font-size: 13px;
        text-decoration: none;
    }
    .panel-box .panel-head a:hover {
        text-decoration: underline;
    }
    .panel-body-pad {
        padding: 18px 20px;
    }
    .field-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px 40px;
    }
    .field-col {
        flex: 1 1 260px;
        min-width: 220px;
    }
    .field-col label {
        font-weight: 600;
        font-size: 13px;
        color: #333;
        display: block;
        margin-bottom: 6px;
    }
    .field-static {
        display: inline-block;
        width: 100%;
        background: #eef1f4;
        border: 1px solid #d7dee3;
        color: #444;
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 2px;
    }
    .field-input {
        display: inline-block;
        width: 100%;
        background: #fff;
        border: 1px solid #c7d0d6;
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 2px;
    }
    .profile-pic-box { text-align: center; }
    .profile-pic-box .avatar-circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        margin: 6px auto 12px;
        background: #4a95bf;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
    }
    .btn-legacy {
        background: #4a95bf;
        color: #fff;
        border: none;
        padding: 7px 18px;
        font-size: 13px;
        border-radius: 2px;
    }
    .btn-legacy:hover { background: #3d80a6; color: #fff; }
    .btn-legacy-light {
        background: #eef1f4;
        color: #333;
        border: 1px solid #c7d0d6;
        padding: 6px 14px;
        font-size: 13px;
        border-radius: 2px;
        text-decoration: none;
        display: inline-block;
    }
    .btn-legacy-light:hover { background: #e2e7eb; color: #333; }
    .bio-area {
        width: 100%;
        min-height: 100px;
        border: 1px solid #c7d0d6;
        border-radius: 2px;
        padding: 10px;
        font-size: 13px;
        resize: vertical;
    }
    .badge-legacy {
        display: inline-block;
        border: 1px solid #d7dee3;
        border-radius: 3px;
        padding: 3px 10px;
        font-size: 12px;
        margin: 0 6px 6px 0;
        background: #f7f9fa;
    }
    /* Summary teaser panels that link out to employee-detail.php instead of repeating its tables */
    .teaser-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #eef1f4;
        font-size: 13px;
    }
    .teaser-row:last-child { border-bottom: none; }
    .teaser-count {
        color: #4a95bf;
        font-weight: 600;
    }
    .live-clock { text-align: center; }
    .live-clock .clock-time { font-size: 20px; font-weight: 600; color: #333; }
    .live-clock .clock-date { font-size: 12px; color: #777; }
</style>

<?php
// ---- Personal / self-service data only. Detailed HR lists live on employee-detail.php ----
$employee = [
    'name'      => 'Abdul Hameed',
    'title'     => 'Software Engineer',
    'group'     => 'Development',
    'location'  => 'Islamabad',
    'hire_date' => '15 Jan 2025',
    'level'     => 'L2',
    'status'    => 'Active Employee',
];

// Personal & emergency contact only -- official Email/CNIC etc. are owned by employee-detail.php
$contactInfo = [
    'Mobile'            => '+92 300 1234567',
    'Emergency'         => '+92 301 7654321 · Father',
    'Home'              => 'House 14, Islamabad, Pakistan',
    'Preferred Contact' => 'Email',
];

$supervisor = [
    'name'  => 'Abid Shah',
    'title' => 'Director, Technology',
];

// Resume is managed here (self-service); employee-detail.php only links back to it
$resume = [
    'file'    => 'Abdul-Hameed-Resume.pdf',
    'updated' => '12 Aug 2026',
    'size'    => '2.4 MB',
];

$bio = "Software engineer focused on building dependable web products, improving delivery practices, and helping teams turn complex requirements into clear, maintainable solutions.";

// Quick snapshots only -- full tables/history live on employee-detail.php
$commSkillsSummary = [
    ['language' => 'English', 'level' => 'Fluent'],
    ['language' => 'Urdu',    'level' => 'Native'],
    ['language' => 'Arabic',  'level' => 'Basic'],
];

$roleTitles = ['Software Engineer', 'Technical Lead', 'Mentor'];
$primaryPractice = 'Web Development';

$certCount  = 2;
$badgeCount = 3;
?>

<div class="container-fluid legacy-profile">

    <h4 class="page-heading">
        <i class="ri-menu-line"></i> My Profile
    </h4>

    <div class="row">

        <div class="col-lg-7">
            <div class="panel-box">
                <div class="panel-head"><span>Employee</span></div>
                <div class="panel-body-pad">
                    <div class="field-row">
                        <div class="field-col">
                            <label>Name:</label>
                            <span class="field-static"><?= $employee['name'] ?></span>
                        </div>
                        <div class="field-col">
                            <label>Job Title:</label>
                            <span class="field-static"><?= $employee['title'] ?></span>
                        </div>
                    </div>
                    <div class="field-row mt-3">
                        <div class="field-col">
                            <label>Group:</label>
                            <span class="field-static"><?= $employee['group'] ?></span>
                        </div>
                        <div class="field-col">
                            <label>Location:</label>
                            <span class="field-static"><?= $employee['location'] ?></span>
                        </div>
                    </div>
                    <div class="field-row mt-3">
                        <div class="field-col">
                            <label>Date of Hire:</label>
                            <span class="field-static"><?= $employee['hire_date'] ?></span>
                        </div>
                        <div class="field-col">
                            <label>Level:</label>
                            <span class="field-static"><?= $employee['level'] ?></span>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0" style="font-size:13px;">
                        <?= $employee['status'] ?> &middot;
                        <a href="employee-detail.php">View full employee record</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-2">
            <div class="panel-box">
                <div class="panel-head"><span>Profile Picture</span></div>
                <div class="panel-body-pad profile-pic-box">
                    <div class="avatar-circle">
                        <?= strtoupper(substr($employee['name'],0,1) . substr(strrchr($employee['name'],' '),1,1)) ?>
                    </div>
                    <a href="javascript:void(0);">Add Profile Picture</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel-box">
                <div class="panel-head"><span>Current Time</span></div>
                <div class="panel-body-pad live-clock">
                    <div class="clock-time" id="liveTime">--:--:--</div>
                    <div class="clock-date" id="liveDate">Loading...</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Information (personal / emergency only -- official record is on employee-detail.php) -->
    <div class="panel-box">
        <div class="panel-head"><span>Contact Information</span></div>
        <div class="panel-body-pad">
            <div class="field-row">
                <?php foreach ($contactInfo as $label => $value): ?>
                    <div class="field-col">
                        <label><?= $label ?>:</label>
                        <span class="field-static"><?= $value ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Supervisor (teaser -- full record on employee-detail.php) -->
        <div class="col-lg-6">
            <div class="panel-box">
                <div class="panel-head"><span>Supervisor</span></div>
                <div class="panel-body-pad">
                    <div class="field-row">
                        <div class="field-col">
                            <label>Name:</label>
                            <span class="field-static"><?= $supervisor['name'] ?></span>
                        </div>
                        <div class="field-col">
                            <label>Title:</label>
                            <span class="field-static"><?= $supervisor['title'] ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0" style="font-size:13px;">
                        <a href="employee-detail.php">View details</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Resume (self-service -- owned here, not duplicated on employee-detail.php) -->
        <div class="col-lg-6">
            <div class="panel-box">
                <div class="panel-head"><span>Resume</span></div>
                <div class="panel-body-pad">
                    <div class="field-row">
                        <div class="field-col">
                            <label>Current File:</label>
                            <span class="field-static">
                                <?= $resume['file'] ?> &middot; Updated <?= $resume['updated'] ?> &middot; <?= $resume['size'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="field-row mt-3">
                        <div class="field-col">
                            <label>Upload New Resume: <span style="color:#c0392b;font-weight:400;">(doc, docx, pdf)</span></label>
                            <div style="display:flex; gap:8px;">
                                <input type="text" class="field-input" placeholder="No file selected" readonly>
                                <button type="button" class="btn-legacy" style="white-space:nowrap;">
                                    <i class="ri-file-text-line"></i> Select File
                                </button>
                            </div>
                        </div>
                        <div class="field-col">
                            <label>LinkedIn Url:</label>
                            <input type="text" class="field-input" placeholder="https://linkedin.com/in/...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bio (owned here only) -->
    <div class="panel-box">
        <div class="panel-head"><span>Bio</span></div>
        <div class="panel-body-pad">
            <label style="font-weight:600; font-size:13px; margin-bottom:6px; display:block;">Bio:</label>
            <textarea class="bio-area"><?= $bio ?></textarea>
        </div>
    </div>

    <button type="button" class="btn-legacy mb-4">Update</button>

    <div class="row">

        <!-- Communication Skills -- quick snapshot, full history on employee-detail.php -->
        <div class="col-lg-4">
            <div class="panel-box">
                <div class="panel-head">
                    <span>Communication Skills</span>
                    <a href="employee-detail.php#certifications">Full history</a>
                </div>
                <div class="panel-body-pad">
                    <?php foreach ($commSkillsSummary as $c): ?>
                        <div class="teaser-row">
                            <span><?= $c['language'] ?></span>
                            <span class="badge-legacy"><?= $c['level'] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Employee Roles -- quick snapshot, full role/rank tables on employee-detail.php -->
        <div class="col-lg-4">
            <div class="panel-box">
                <div class="panel-head">
                    <span>Employee Roles</span>
                    <a href="employee-detail.php">Full details</a>
                </div>
                <div class="panel-body-pad">
                    <?php foreach ($roleTitles as $role): ?>
                        <span class="badge-legacy"><?= $role ?></span>
                    <?php endforeach; ?>
                    <p class="text-muted mt-3 mb-0" style="font-size:13px;">
                        Primary practice: <strong><?= $primaryPractice ?></strong>
                    </p>
                </div>
            </div>
        </div>

        <!-- Certifications & Badges -- counts only, full tables on employee-detail.php -->
        <div class="col-lg-4">
            <div class="panel-box">
                <div class="panel-head"><span>Accreditation</span></div>
                <div class="panel-body-pad">
                    <div class="teaser-row">
                        <span>Certifications</span>
                        <span>
                            <span class="teaser-count"><?= $certCount ?></span>
                            &nbsp;<a href="employee-detail.php#certifications">View</a>
                        </span>
                    </div>
                    <div class="teaser-row">
                        <span>Badges</span>
                        <span>
                            <span class="teaser-count"><?= $badgeCount ?></span>
                            &nbsp;<a href="employee-detail.php">View</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>

<!-- Live Clock -->
<script>
function updateLiveTime() {
    const now = new Date();
    const time = now.toLocaleTimeString('en-PK', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
    const date = now.toLocaleDateString('en-PK', { weekday: 'short', day: '2-digit', month: 'short', year: 'numeric' });
    const timeElement = document.getElementById('liveTime');
    const dateElement = document.getElementById('liveDate');
    if (timeElement) timeElement.textContent = time;
    if (dateElement) dateElement.textContent = date;
}
updateLiveTime();
setInterval(updateLiveTime, 1000);
</script>