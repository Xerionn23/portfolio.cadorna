<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loading | Rotcher A. Cadorna Jr.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="frontend/styles/loader.css" />
  </head>
  <body class="bg-black text-white min-h-screen overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
      <div
        class="absolute -top-48 left-1/2 h-[32rem] w-[32rem] -translate-x-1/2 rounded-full bg-white/5 blur-3xl"
      ></div>
      <div class="absolute -bottom-48 -left-24 h-[26rem] w-[26rem] rounded-full bg-white/10 blur-3xl"></div>
      <div class="absolute top-1/3 -right-24 h-72 w-72 rounded-full bg-white/5 blur-3xl"></div>
    </div>

    <div
      id="loading-screen"
      class="fixed inset-0 z-10 flex items-center justify-center bg-black transition-opacity duration-500"
    >
      <div class="relative w-full max-w-2xl px-6">
        <div
          class="rounded-3xl border border-white/10 bg-white/5 px-8 py-10 text-center backdrop-blur-xl shadow-[0_0_90px_rgba(255,255,255,0.08)]"
        >
          <div class="text-[11px] sm:text-xs uppercase tracking-[0.4em] text-white/60">
            Launching
          </div>
          <div class="mt-4 text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight">
            Rotcher A. Cadorna Jr.
          </div>
          <div class="mt-3 text-sm sm:text-base text-white/65">
            Preparing portfolio experience
          </div>
          <div class="mt-8 flex items-end justify-center gap-2 h-10">
            <span class="loader-bar h-3 w-2 rounded-sm bg-white/90"></span>
            <span class="loader-bar h-5 w-2 rounded-sm bg-white/90"></span>
            <span class="loader-bar h-7 w-2 rounded-sm bg-white/90"></span>
            <span class="loader-bar h-5 w-2 rounded-sm bg-white/90"></span>
          </div>
          <div class="mt-6 h-[3px] w-full rounded-full bg-white/10 relative overflow-hidden">
            <div class="progress-bar rounded-full bg-white/80"></div>
          </div>
          <div class="mt-4 text-[10px] sm:text-xs uppercase tracking-[0.35em] text-white/50">
            Please wait
          </div>
        </div>
      </div>
    </div>
    <script src="frontend/scripts/loader.js" defer></script>
  </body>
</html>
