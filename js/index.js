const currentPath = window.location.pathname;
const currentDir =
  window.location.pathname.split("/").slice(0, -1).join("/") + "/";
const links = document.querySelectorAll(".nav-link");

links.forEach((link) => {
  const linkPath = new URL(
    link.getAttribute("href"),
    window.location.origin + currentDir
  ).pathname;
  console.log("currentPath:", currentPath);
  console.log("linkPath:", linkPath);
  if (linkPath === currentPath) {
    link.classList.add("active");
  }
});