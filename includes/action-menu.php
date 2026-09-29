
<?php

$menuItems = [
    [
        'label' => 'Hours Distribution',
        'icon' => 'bi-layers',
        'modal' => 'hoursDistributionModal'
    ],
    [
        'label' => 'HR Talk',
        'icon' => 'bi-broadcast',
        'modal' => 'hrTalkModal'
    ],
    [
        'label' => 'Blog',
        'icon' => 'bi-rss',
        'url' => 'blog.php'
    ],
    [
        'label' => 'Dashboard',
        'icon' => 'bi-person-circle',
        'url' => 'dashboard.php'
    ],
    [
        'label' => 'Profile',
        'icon' => 'bi-person-fill',
        'url' => 'profile.php'
    ],
    [
        'label' => 'Experience Certificate',
        'icon' => 'bi-patch-check',
        'url' => 'experience-certificate.php'
    ],
    [
        'label' => 'Role and Responsibility',
        'icon' => 'bi-diagram-3',
        'url' => 'role-responsibility.php'
    ],
    [
        'label' => 'Appointment Letter',
        'icon' => 'bi-file-earmark-text',
        'url' => 'appointment-letter.php'
    ],
    [
        'label' => 'Form-A',
        'icon' => 'bi-chat-square-text',
        'url' => 'form-a.php'
    ],
    [
        'label' => 'Form-B',
        'icon' => 'bi-chat-square-text',
        'url' => 'form-b.php'
    ],
    [
        'label' => '1 (Certs)',
        'icon' => 'bi-chat-square-text',
        'url' => 'employee-detail.php#certifications'
    ],
    [
        'label' => 'Active',
        'icon' => 'bi-person-check',
        'url' => 'employee-detail.php'
    ],
    [
        'label' => 'Statement',
        'icon' => 'bi-card-text',
        'url' => 'statement.php'
    ],
    [
        'label' => 'Plans',
        'icon' => 'bi-layout-text-window-reverse',
        'url' => 'plans.php'
    ],
    [
        'label' => 'Performance',
        'icon' => 'bi-graph-up-arrow',
        'url' => 'performance.php'
    ],
    [
        'label' => 'Demand',
        'icon' => 'bi-info-circle',
        'url' => 'demand.php'
    ],
    [
        'label' => 'TimeLive',
        'icon' => 'bi-card-list',
        'url' => 'timelive.php'
    ],
    [
        'label' => 'Weekly Performance',
        'icon' => 'bi-graph-up',
        'url' => 'weekly-performance.php'
    ]
];

$onboardingItems = [
    [
        'label' => 'Onboarding Steps',
        'url' => 'onboarding-steps.php'
    ],
    [
        'label' => 'Orientation Plan',
        'url' => 'orientation-plan.php'
    ],
    [
        'label' => 'Onboarding Checklist',
        'url' => 'onboarding-checklist.php'
    ],
    [
        'label' => 'Onboarding Plan',
        'url' => 'onboarding-plan.php'
    ]
];

$offboardingItems = [
    [
        'label' => 'Offboarding Reasons',
        'modal' => 'offboardingReasonsModal'
    ],
    [
        'label' => 'Offboarding Checklist',
        'url' => 'offboarding-checklist.php'
    ],
    [
        'label' => 'Offboarding Plan',
        'url' => 'offboarding-plan.php'
    ]
];

?>

<div class="dropdown action-dropdown">

    <button
        class="btn btn-sm btn-light"
        type="button"
        data-bs-toggle="dropdown"
        data-bs-boundary="viewport"
        aria-expanded="false">

        <i class="bi bi-three-dots-vertical"></i>

    </button>

    <ul class="dropdown-menu action-menu">

        <?php foreach ($menuItems as $item): ?>

            <li>

                <?php if (isset($item['modal'])): ?>

                    <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#<?= htmlspecialchars($item['modal']) ?>">

                        <i class="bi <?= htmlspecialchars($item['icon']) ?> me-2"></i>
                        <?= htmlspecialchars($item['label']) ?>

                    </a>

                <?php else: ?>

                    <a
                        class="dropdown-item"
                        href="<?= htmlspecialchars($item['url']) ?>">

                        <i class="bi <?= htmlspecialchars($item['icon']) ?> me-2"></i>
                        <?= htmlspecialchars($item['label']) ?>

                    </a>

                <?php endif; ?>

            </li>

        <?php endforeach; ?>


        <!-- Onboarding -->

        <li class="dropdown-submenu">

            <a
                class="dropdown-item submenu-toggle"
                href="#">

                <i class="bi bi-person-plus me-2"></i>
                Onboarding

                <i class="bi bi-chevron-right float-end"></i>

            </a>

            <ul class="dropdown-menu submenu">

                <?php foreach ($onboardingItems as $item): ?>

                    <li>

                        <a
                            class="dropdown-item"
                            href="<?= htmlspecialchars($item['url']) ?>">

                            <?= htmlspecialchars($item['label']) ?>

                        </a>

                    </li>

                <?php endforeach; ?>

            </ul>

        </li>


        <!-- Offboarding -->

        <li class="dropdown-submenu">

            <a
                class="dropdown-item submenu-toggle"
                href="#">

                <i class="bi bi-person-dash me-2"></i>
                Offboarding

                <i class="bi bi-chevron-right float-end"></i>

            </a>

            <ul class="dropdown-menu submenu">

                <?php foreach ($offboardingItems as $item): ?>

                    <li>

                        <?php if (isset($item['modal'])): ?>

                            <a
                                class="dropdown-item"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#<?= htmlspecialchars($item['modal']) ?>">

                                <?= htmlspecialchars($item['label']) ?>

                            </a>

                        <?php else: ?>

                            <a
                                class="dropdown-item"
                                href="<?= htmlspecialchars($item['url']) ?>">

                                <?= htmlspecialchars($item['label']) ?>

                            </a>

                        <?php endif; ?>

                    </li>

                <?php endforeach; ?>

            </ul>

        </li>

    </ul>

</div>
