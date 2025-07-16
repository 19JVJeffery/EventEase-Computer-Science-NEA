async function loadFragment(id, url) {
  const res = await fetch(url);
  const html = await res.text();
  document.getElementById(id).innerHTML = html;
}
document.addEventListener("DOMContentLoaded", () => {
  loadFragment("nav-placeholder", "nav.html");
  loadFragment("footer-placeholder", "footer.html");
});
