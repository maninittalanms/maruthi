<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/assets/img/favicon.png" />

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            base: {
              900: "#0a0a0a",
              800: "#141414",
              700: "#1f1f1f"
            }
          },
          boxShadow: {
            soft: "0 4px 20px rgba(0,0,0,0.4)"
          },
          fontFamily: {
            serif: ["Merriweather", "serif"],
            sans: ["Inter", "sans-serif"]
          }
        }
      }
    }
  </script>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <meta name="theme-color" content="#0b0b0f" />
  <style>
    html { scroll-behavior: smooth; }
     html, body {
  overflow-x: hidden;
}
  </style>
</head>

<body class="bg-base-900 text-gray-200 antialiased selection:bg-white/10">
  
<!-- Header / Nav -->
<header class="fixed inset-x-0 top-0 z-50 border-b border-white/5 bg-base-900/70 backdrop-blur">
  <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

    <!-- Logo -->
    <a href="index.php" class="group inline-flex items-center gap-2">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" class="text-white/80 group-hover:text-white transition">
        <path d="M4 7a2 2 0 0 1 2-2h2l1-1h6l1 1h2a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7z" stroke="currentColor" stroke-width="1.5"/>
        <circle cx="12" cy="12" r="3.5" stroke="currentColor" stroke-width="1.5"/>
      </svg>
      <span class="font-semibold tracking-widest text-white">Maruthi Digitals</span>
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden items-center gap-8 text-sm md:flex">
      <a href="index.php" class="hover:text-white/90">Home</a>
      <a href="gallery.php" class="hover:text-white/90">Gallery</a>
      <a href="about.php" class="hover:text-white/90">About</a>
      <a href="services.php" class="hover:text-white/90">Services</a>
      <!-- <a href="blog.php" class="hover:text-white/90">Blog</a> -->
      <a href="contact.php" class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-2 font-medium text-white hover:bg-white/10">Let’s Talk</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button id="mobileOpen" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 md:hidden" aria-label="Open menu">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-white">
        <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Nav -->
  <!-- <div id="mobileNav" class="fixed inset-0 hidden bg-base-900  md:hidden"> -->
      <!-- <div id="mobileNav" class="fixed inset-0 hidden bg-black md:hidden">

    <div class="mx-auto max-w-7xl px-6 py-6">
      <div class="mb-8 flex items-center justify-between">
        <span class="font-semibold tracking-widest text-white">Maruthi Digitals</span>
        <button id="mobileClose" class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5" aria-label="Close menu">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-white">
            <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </button>
      </div>
      <div class="space-y-3 text-lg">
        <a href="index.php" class="block rounded-xl bg-white/5 px-4 py-3">Home</a>
        <a href="gallery.php" class="block rounded-xl bg-white/5 px-4 py-3">Gallery</a>
        <a href="about.php" class="block rounded-xl bg-white/5 px-4 py-3">About</a>
        <a href="services.php" class="block rounded-xl bg-white/5 px-4 py-3">Services</a>
        <a href="contact.php" class="block rounded-xl bg-white/5 px-4 py-3">Contact</a>
      </div>
    </div>
  </div>-->
</header> 
<!-- Mobile Navigation -->
<div id="mobileNav" class="fixed inset-0 hidden bg-black/95 z-50 overflow-y-auto md:hidden">
  <div class="mx-auto max-w-7xl px-6 py-6">
    
    <!-- Header -->
    <div class="mb-8 flex items-center justify-between">
      <span class="font-semibold tracking-widest text-white">Maruthi Digitals</span>
      <button id="mobileClose" 
              class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5"
              aria-label="Close menu">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-white">
          <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </button>
    </div>

    <!-- Navigation Links -->
    <nav class="space-y-3 text-lg">
      <a href="index.php" class="block rounded-xl bg-white/10 px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">Home</a>
      <a href="gallery.php" class="block rounded-xl bg-white/10 px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">Gallery</a>
      <a href="about.php" class="block rounded-xl bg-white/10 px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">About</a>
      <a href="services.php" class="block rounded-xl bg-white/10 px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">Services</a>
      <a href="contact.php" class="block rounded-xl bg-white/10 px-4 py-3 text-white hover:bg-yellow-500 hover:text-black transition">Contact</a>
    </nav>
    
  </div>
</div>


<script>
  // Mobile menu toggle
  const mobileOpen = document.getElementById("mobileOpen");
  const mobileClose = document.getElementById("mobileClose");
  const mobileNav = document.getElementById("mobileNav");

  mobileOpen.addEventListener("click", () => {
    mobileNav.classList.remove("hidden");
  });

  mobileClose.addEventListener("click", () => {
    mobileNav.classList.add("hidden");
  });
</script>

</body>
</html>
