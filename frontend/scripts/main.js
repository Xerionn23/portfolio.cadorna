const loaderSeen = sessionStorage.getItem("portfolioLoaderSeen");
if (loaderSeen !== "1") {
  window.location.replace("name_loading.html");
} else {
  sessionStorage.removeItem("portfolioLoaderSeen");
}

const animatedItems = document.querySelectorAll("[data-animate]");
document.querySelectorAll("section").forEach((section) => {
  const items = section.querySelectorAll("[data-animate]");
  items.forEach((item, index) => {
    item.style.transitionDelay = `${Math.min(index * 120, 360)}ms`;
  });
});
document.querySelectorAll("nav[data-animate], footer[data-animate]").forEach((item) => {
  item.style.transitionDelay = "0ms";
});

if (animatedItems.length) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.2,
      rootMargin: "0px 0px -40px 0px",
    }
  );

  animatedItems.forEach((item) => observer.observe(item));
}

const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
const carouselTargets = document.querySelectorAll("[data-carousel]");

carouselTargets.forEach((carouselTarget) => {
  const items = (carouselTarget.dataset.carousel || "")
    .split("|")
    .map((item) => item.trim())
    .filter(Boolean);
  const speed = Number(carouselTarget.dataset.carouselSpeed || 2400);
  let index = 0;

  if (!items.length) {
    return;
  }

  carouselTarget.textContent = items[0];
  if (!reduceMotion && items.length > 1) {
    window.setInterval(() => {
      carouselTarget.classList.add("is-fading");
      window.setTimeout(() => {
        index = (index + 1) % items.length;
        carouselTarget.textContent = items[index];
        carouselTarget.classList.remove("is-fading");
      }, 260);
    }, speed);
  }
});
