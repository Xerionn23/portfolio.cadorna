<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio | Rotcher A. Cadorna Jr.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="frontend/styles/main.css" />
  </head>
  <body class="bg-black text-white min-h-screen page-animate">
    <?php include __DIR__ . "/components/nav.php"; ?>
    <main>
      <?php include __DIR__ . "/components/home.php"; ?>
      <?php include __DIR__ . "/components/about.php"; ?>
      <?php include __DIR__ . "/components/skills.php"; ?>
      <?php include __DIR__ . "/components/projects.php"; ?>
      <?php include __DIR__ . "/components/education.php"; ?>
      <?php include __DIR__ . "/components/contact.php"; ?>
    </main>
    <?php include __DIR__ . "/components/footer.php"; ?>
    <script src="frontend/scripts/main.js" defer></script>
  </body>
</html>
