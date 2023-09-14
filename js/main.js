const navItems = document.querySelector(".nav__items");
const openBtn = document.querySelector("#open__nav-btn");
const closeBtn = document.querySelector("#close__nav-btn");
const openNav = () => {
  navItems.style.display = "flex";
  openBtn.style.display = "none";
  closeBtn.style.display = "inline-block";
};
const closeNav = () => {
  navItems.style.display = "none";
  openBtn.style.display = "inline-block";
  closeBtn.style.display = "none";
};
openBtn.addEventListener("click", openNav);
closeBtn.addEventListener("click", closeNav);

const sidebar = document.querySelector("aside");
const showSidebarBtn = document.querySelector("#show__sidebar-btn");
const hideSidebarBtn = document.querySelector("#hide__sidebar-btn");
const showSidebar = () => {
    sidebar.style.left = "0";
  showSidebarBtn.style.display = "none";
  hideSidebarBtn.style.display = "inline-block";
 
};
showSidebarBtn.addEventListener("click", showSidebar);
const hideSidebar = () => {
  showSidebarBtn.style.display = "inline-block";
  hideSidebarBtn.style.display = "none";
  sidebar.style.left = "-100%";
};
hideSidebarBtn.addEventListener("click", hideSidebar);
