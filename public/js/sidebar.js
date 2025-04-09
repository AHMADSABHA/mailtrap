document.querySelector('.toggle-sidebar').addEventListener('click', function () {
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content-wrapper');
    if (sidebar.classList.contains('collapsed')) {
        sidebar.classList.remove('collapsed');
        content.style.marginLeft = '250px';
    } else {
        sidebar.classList.add('collapsed');
        content.style.marginLeft = '0';
    }
});