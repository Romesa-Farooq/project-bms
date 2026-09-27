# SPS-BMS — Employee Management System

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)

A responsive, web-based **Business Management System (BMS)** developed during the SPS internship. This system integrates existing PHP employee management functionality with the **Velzon Admin Dashboard UI**, providing a clean, unified workspace for HR administrative workflows and employee data management.

---

## 📸 Interface Preview

| Employee Detail & Profile | Onboarding & Workflows |
| :---: | :---: |
| _Add Screenshot Here_ | _Add Screenshot Here_ |

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript (ES6+), Bootstrap 5, Velzon Admin Dashboard Theme, Remix Icon
- **Backend:** PHP
- **Server & Database:** Apache (XAMPP environment), MySQL-ready relational structure
- **Tools & Version Control:** Git, GitHub, Visual Studio Code

---

## 📌 Main Features & Workflows

### 🧑‍💼 1. Employee Core & Profile Management
- **Employee Profile (`profile.php`):** Centralized view displaying designation, status, group, location, hire date, level, supervisor details, skills, contact info, and attached resume/documents.
- **Employee Detail (`employee-detail.php`):** Summary hub providing direct access to module-specific views and quick-action triggers.
- **Action Menu:** A 3-dot contextual menu with options for navigation, profile updates, forms, and administrative actions.

### 📋 2. Onboarding & Exit Workflows
- **Onboarding Steps (`onboarding-steps.php`):** Interactive 10-step checklist (Job description, offer letter, pre-boarding, team orientation, training schedule, expectations, ongoing feedback, etc.) with status selection (**Applied / Not Applied**) and custom notes.
- **Orientation & Plan (`orientation-plan.php`, `onboarding-plan.php`):** Structured onboarding timelines and interactive modal-based plans embedded within the main workspace.
- **Offboarding System:** Dedicated entry points for handling exit checklists and offboarding procedures seamlessly.

### 📑 3. Administrative Forms & Compliance
- **Form-A (`form-a.php`):** Standard employee information input interface with state persistence and reset functionality.
- **Form-B (`form-b.php`):** Comprehensive administrative record management covering:
  - Employment Details & Status
  - Compensation & Salary Grade
  - Allowances & Benefits (Medical, Provident Fund, Insurance)
  - Working Schedules & Attendance Modes
  - Leave Management (Annual, Sick, Casual)
  - Approval Workflow (Draft, Submitted, Reviewed, Approved)
- **Documents & Certifications:** Structured records for employment contracts, CNIC/national IDs, professional certifications (e.g., Azure, Meta Front-End), and achievement badges.

### 📊 4. Performance & Operations
- **Role & Responsibility (`role-responsibility.php`):** Clear documentation of primary duties, reporting hierarchy, and operational expectations.
- **Weekly Performance (`weekly-performance.php`):** Tracking area for weekly objectives, completed work, pending tasks, and manager evaluations.
- **Time Live (`timelive.php`):** Live view for monitoring active working hours, time tracking, and daily activity logs.
- **Planning Hub (`plans.php`):** Table and card layouts for managing long-term employee goals and action items.

---

## 📁 Repository Structure

```text
bms/
├── css/
│   ├── app.min.css
│   ├── bootstrap.min.css
│   └── custom.min.css
├── js/
│   └── bms.js
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── action-modals.php
│   └── module-page.php
├── modules/
│   └── employee-management/
├── index.php
├── employee-detail.php
├── profile.php
├── onboarding-steps.php
├── orientation-plan.php
├── onboarding-checklist.php
├── onboarding-plan.php
├── role-responsibility.php
├── weekly-performance.php
├── timelive.php
├── plans.php
├── form-a.php
├── form-b.php
└── module-placeholder.php
