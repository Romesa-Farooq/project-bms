document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.submenu-toggle').forEach((toggle) => {
        toggle.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();
            const submenu = toggle.parentElement?.querySelector(':scope > .submenu');
            submenu?.classList.toggle('show');
        });
    });
    const table = document.getElementById('employeeTable');
    const search = document.getElementById('employeeSearch');
    const filters = Array.from(document.querySelectorAll('.employee-filter'));
    const rows = table ? Array.from(table.querySelectorAll('tbody tr')) : [];
    const updateRows = () => {
        const query = (search?.value || '').toLowerCase().trim();
        let visible = 0;
        rows.forEach((row) => {
            const matchesQuery = !query || row.dataset.search.includes(query);
            const matchesFilters = filters.every((filter) => !filter.value || row.dataset[filter.dataset.filter] === filter.value);
            const show = matchesQuery && matchesFilters;
            row.classList.toggle('d-none', !show);
            if (show) visible++;
        });
        const count = document.getElementById('visibleCount');
        const showing = document.getElementById('showingCount');
        if (count) count.textContent = visible;
        if (showing) showing.textContent = visible;
    };
    search?.addEventListener('input', updateRows);
    filters.forEach((filter) => filter.addEventListener('change', updateRows));
    document.getElementById('resetFilters')?.addEventListener('click', () => {
        filters.forEach((filter) => { filter.value = ''; });
        if (search) search.value = '';
        updateRows();
    });
    document.getElementById('selectAll')?.addEventListener('change', (event) => {
        document.querySelectorAll('.employee-check').forEach((checkbox) => {
            const row = checkbox.closest('tr');
            if (!row?.classList.contains('d-none')) checkbox.checked = event.target.checked;
        });
    });
    document.getElementById('hrTalkForm')?.addEventListener('submit', (event) => {
        event.preventDefault();
        const modal = bootstrap.Modal.getInstance(document.getElementById('hrTalkModal'));
        modal?.hide();
        window.setTimeout(() => window.alert('Your HR Talk response is ready to send.'), 250);
    });
});