const redirectDelay = 1800;
const fadeDuration = 500;
const targetUrl = "index.html";

window.addEventListener("DOMContentLoaded", () => {
  const screen = document.getElementById("loading-screen");
  window.setTimeout(() => {
    if (screen) {
      screen.classList.add("opacity-0", "pointer-events-none");
    }
    window.setTimeout(() => {
      sessionStorage.setItem("portfolioLoaderSeen", "1");
      window.location.href = targetUrl;
    }, fadeDuration);
  }, redirectDelay);
});
