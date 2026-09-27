<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container-fluid">

    <div class="page-title-box d-flex justify-content-between align-items-center mb-4">
        <div>
            <div class="eyebrow mb-1">HR Documents</div>
            <h3 class="mb-1">Appointment Letter</h3>
            <p class="text-muted mb-0">Preview and print the employee appointment letter</p>
        </div>
        <div class="d-flex gap-2 d-print-none">
            <button type="button" class="btn btn-primary" onclick="window.print()">
                <i class="bi bi-printer me-1"></i>Print / Save as PDF
            </button>
            <a href="index.php" class="btn btn-light">
                <i class="bi bi-arrow-left me-1"></i>Back
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="letter-sheet mx-auto">

                <div class="text-center mb-4">
                    <h4 class="mb-0 fw-bold">SPS</h4>
                    <div class="text-muted small">Business Management System</div>
                </div>

                <div class="d-flex justify-content-between mb-4">
                    <div><strong>Date:</strong> <?= htmlspecialchars(date('d M Y')) ?></div>
                    <div><strong>Ref:</strong> SPS/HR/<?= htmlspecialchars(date('Y')) ?>/001</div>
                </div>

                <p>
                    <strong>To,</strong><br>
                    Abdul Hameed<br>
                    Employee ID: EMP-001
                </p>

                <p><strong>Subject: Letter of Appointment</strong></p>

                <p>Dear Abdul Hameed,</p>

                <p>
                    We are pleased to confirm your appointment with SPS as
                    <strong>Software Engineer</strong>, effective from
                    <strong>15 Jan 2025</strong>. This letter sets out the key terms
                    of your appointment.
                </p>

                <ol class="mb-4">
                    <li><strong>Designation:</strong> Software Engineer (Level L2)</li>
                    <li><strong>Employment Type:</strong> Full-time, Permanent</li>
                    <li><strong>Reporting To:</strong> Director, Technology</li>
                    <li><strong>Probation Period:</strong> 3 months from the date of joining</li>
                    <li><strong>Working Hours:</strong> As per company policy in effect from time to time</li>
                    <li><strong>Compensation:</strong> As mutually agreed and detailed separately in your compensation letter</li>
                    <li><strong>Confidentiality:</strong> You agree to keep all company and client information confidential during and after your employment</li>
                    <li><strong>Termination:</strong> This appointment may be terminated by either party by giving notice as per company policy</li>
                </ol>

                <p>
                    Please sign and return a copy of this letter as a token of your
                    acceptance of the above terms and conditions.
                </p>

                <p>We welcome you to the team and look forward to a long and productive association.</p>

                <div class="row mt-5 pt-4">
                    <div class="col-6">
                        <div class="mb-5">&nbsp;</div>
                        <div class="border-top pt-2">For SPS</div>
                    </div>
                    <div class="col-6 text-end">
                        <div class="mb-5">&nbsp;</div>
                        <div class="border-top pt-2 d-inline-block">Employee Signature</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<style>
    .letter-sheet {
        max-width: 800px;
        font-size: 14px;
        line-height: 1.7;
    }
    @media print {
        .bms-navbar {
            display: none !important;
        }
        .card {
            border: none !important;
            box-shadow: none !important;
        }
        body {
            background: #fff !important;
        }
    }
</style>

<?php include __DIR__ . '/includes/footer.php'; ?>