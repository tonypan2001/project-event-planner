import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Use by SIDEBAR in resources/views/layouts/main.blade.php

// const sidebar = document.getElementById('sidebar');
// const mainContent = document.getElementById('mainContent');
// const toggleSidebar = document.getElementById('toggleSidebar');
//
// let sidebarOpen = localStorage.getItem('sidebarOpen') === 'true';
// updateSidebarState();
//
// toggleSidebar.addEventListener('click', () => {
//     sidebarOpen = !sidebarOpen;
//     updateSidebarState();
//     localStorage.setItem('sidebarOpen', sidebarOpen);
// });
//
// function updateSidebarState() {
//     if (sidebarOpen) {
//         sidebar.style.transform = 'translateX(0)';
//         mainContent.style.marginLeft = '11rem';
//     } else {
//         sidebar.style.transform = 'translateX(-100%)';
//         mainContent.style.marginLeft = '0';
//     }
// }
