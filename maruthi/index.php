
<?php include 'header.php'; ?>
<!-- Hero Section -->
<section class="relative h-screen w-full text-white overflow-hidden">
  <!-- Background Swiper -->
  <div class="swiper heroSwiper absolute inset-0">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
            <img src="https://kits.yumnatype.com/Snaplens/wp-content/uploads/sites/35/2025/08/man-traveler-holding-paddle-on-red-canoe-in-spirit-2025-03-27-02-27-44-utcResized-1.jpg" 
         class="w-full h-full object-cover">
      </div>
      <div class="swiper-slide">
            <img src="https://kits.yumnatype.com/Snaplens/wp-content/uploads/sites/35/2025/08/stokksnes-2025-02-21-18-47-56-utcResized.jpg" 
         class="w-full h-full object-cover">
      </div>
      <div class="swiper-slide">
            <img src="https://kits.yumnatype.com/Snaplens/wp-content/uploads/sites/35/2025/08/mount-eystrahorn-in-the-krossasnesfjall-mountain-r-2025-03-25-11-24-45-utcResized.jpg" 
        class="w-full h-full object-cover">
      </div>
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 flex flex-col justify-center h-full px-8 md:px-16 lg:px-24">
    <span class="text-yellow-400 mb-4">• Photography Portfolio</span>
    <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
      Capturing Moments, Crafting Stories<br>
      Welcome To My <span class="text-yellow-400">Photography Portfolio</span>
    </h1>
    <p class="text-gray-300 max-w-2xl mb-8">
      Tristique pharetra nunc sed amet viverra non non libero. Eget turpis ac pretium amet dapibus nullam at bibendum.
      Facilisis porttitor quam fames ac hendrerit pellentesque vestibulum porttitor.
    </p>

    <!-- Buttons -->
    <div class="flex items-center gap-4">
      <a href="#contact" class="px-6 py-3 bg-white text-black rounded-lg font-semibold shadow-lg hover:bg-gray-200 transition">
        Get Started
      </a>
      <!-- <a href="#video" class="flex items-center gap-2 px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-800 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 16 16">
          <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l4.5-2.5a.5.5 0 0 0 0-.814l-4.5-2.5z"/>
        </svg>
        Watch Video
      </a> -->
      <!-- Watch Video Button -->
<a id="openVideo" href="javascript:void(0)" 
   class="flex items-center gap-2 px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-800 transition">
  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 16 16">
    <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l4.5-2.5a.5.5 0 0 0 0-.814l-4.5-2.5z"/>
  </svg>
  Watch Video
</a>


<!-- Video Modal -->
<div id="videoModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 backdrop-blur-sm">
  <!-- Backdrop -->
  <div id="closeBackdrop" class="absolute inset-0"></div>

  <!-- Modal Content -->
  <div class="relative bg-white rounded-2xl shadow-xl w-11/12 md:w-2/3 lg:w-1/2">
    <!-- Close Button -->
    <button id="closeVideo" class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl">&times;</button>

    <!-- Video -->
    <div class="aspect-w-16 aspect-h-9">
      <iframe id="videoFrame"
              class="w-full h-96 rounded-b-2xl"
              src=""
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen>
      </iframe>
    </div>
  </div>
</div>

<script>
 

document.addEventListener("DOMContentLoaded", () => {
  const videoBtn = document.getElementById('openVideo');
  const modal = document.getElementById('videoModal');
  const closeBtn = document.getElementById('closeVideo');
  const backdrop = document.getElementById('closeBackdrop');
  const videoFrame = document.getElementById('videoFrame');

  const videoURL = "https://www.youtube.com/embed/wErbkiK_UtI?autoplay=1";

  // Open Modal
  videoBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    videoFrame.src = videoURL;
  });

  // Close Modal
  function closeModal() {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    videoFrame.src = "";
  }

  closeBtn.addEventListener('click', closeModal);
  backdrop.addEventListener('click', closeModal);

  // ESC key close
  document.addEventListener('keydown', (e) => {
    if (e.key === "Escape") closeModal();
  });
});
</script>



    </div>
  </div>

  
</section>


<!-- --------- -->


<!-- Gallery Section -->
<section id="gallery" data-aos="fade-up" class="relative bg-base-900 py-24 text-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mb-12 text-center">
      <h2 class="font-serif text-3xl md:text-4xl font-bold text-yellow-400">Our Gallery</h2>
      <p class="mt-4 text-gray-400">A curated collection of my recent works</p>
    </div>

    

    <!-- Gallery Grid -->
    <div id="gallery-grid" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="wedding">
        <img src="assets/img/p1.jpg" alt="Bridal Portrait" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Bridal Portrait</h3>
        </div>
      </div>

      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="birthday">
        <img src="assets/img/p2.jpg" alt="Birthday Celebration" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Birthday Celebration</h3>
        </div>
      </div>

      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="portraits">
        <img src="assets/img/p3.jpg" alt="Model Portrait" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Model Portrait</h3>
        </div>
      </div>

      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="candids">
        <img src="assets/img/p4.jpg" alt="Candid Moment" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Candid Moment</h3>
        </div>
      </div>

      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="wedding">
        <img src="assets/img/p5.jpg" alt="Couple Shoot" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Couple Shoot</h3>
        </div>
      </div>

      <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" data-category="portraits">
        <img src="assets/img/p6.jpg" alt="Classic Portrait" class="h-72 w-full object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
          <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition">Classic Portrait</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50">
  <button id="closeBtn" class="absolute top-5 right-5 text-white text-3xl hover:text-yellow-400">&times;</button>
  <button id="prevBtn" class="absolute left-5 text-white text-3xl hover:text-yellow-400">&#10094;</button>
  <img id="lightboxImg" src="" class="max-h-[80%] max-w-[90%] rounded-xl shadow-yellow-500/40">
  <button id="nextBtn" class="absolute right-5 text-white text-3xl hover:text-yellow-400">&#10095;</button>
  <p id="lightboxCaption" class="absolute bottom-5 text-yellow-400 text-lg"></p>
</div>

<script>
  const filterBtns = document.querySelectorAll(".filter-btn");
  const galleryItems = document.querySelectorAll(".gallery-item");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightboxImg");
  const lightboxCaption = document.getElementById("lightboxCaption");
  const closeBtn = document.getElementById("closeBtn");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  let currentIndex = 0;
  let items = Array.from(galleryItems);

  // Filter
  filterBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      filterBtns.forEach(b => b.classList.remove("bg-yellow-500", "text-black", "font-semibold"));
      btn.classList.add("bg-yellow-500", "text-black", "font-semibold");

      const filter = btn.getAttribute("data-filter");
      galleryItems.forEach(item => {
        if (filter === "all" || item.getAttribute("data-category") === filter) {
          item.classList.remove("hidden");
        } else {
          item.classList.add("hidden");
        }
      });

      items = Array.from(document.querySelectorAll(".gallery-item:not(.hidden)"));
    });
  });

  // Lightbox
  galleryItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      currentIndex = index;
      showLightbox();
    });
  });

  function showLightbox() {
    const img = items[currentIndex].querySelector("img");
    const caption = items[currentIndex].querySelector("h3").innerText;

    lightboxImg.src = img.src;
    lightboxCaption.textContent = caption;
    lightbox.classList.remove("hidden");
    lightbox.classList.add("flex");
  }

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showLightbox();
  });

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % items.length;
    showLightbox();
  });

  closeBtn.addEventListener("click", () => {
    lightbox.classList.add("hidden");
  });

  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      lightbox.classList.add("hidden");
    }
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") prevBtn.click();
    if (e.key === "ArrowRight") nextBtn.click();
    if (e.key === "Escape") closeBtn.click();
  });
</script>

<!--  -->
<!-- aboout -->
<section id="about" class="relative bg-base-900 py-24">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="grid gap-12 md:grid-cols-2 md:items-center">

      <!-- Left: Two Floating Images -->
      <div class="relative flex gap-6">
        <!-- Top-to-Bottom Motion -->
        <div class="w-1/2 overflow-hidden rounded-2xl shadow-soft">
          <img src="assets/img/about1.jpg"
               class="w-full h-[450px] object-cover rounded-2xl animate-topToBottom" />
        </div>

        <!-- Bottom-to-Top Motion -->
        <div class="w-1/2 overflow-hidden rounded-2xl shadow-soft">
          <img src="assets/img/about2.jpg"
               class="w-full h-[450px] object-cover rounded-2xl animate-bottomToTop" />
        </div>
      </div>

      <!-- Right: Content -->
      <div>
        <span class="text-sm text-yellow-400 font-semibold">About Us</span>
        <h2 class="mt-2 font-serif text-3xl font-bold text-white md:text-4xl">
          Through The Lens Exploring My World Of Photography
        </h2>
        <p class="mt-6 text-lg text-gray-400">
          Tristique pharetra nunc sed amet viverra non non libero. Eget turpis ac pretium amet dapibus nullam at bibendum. 
          Facilisis porttitor quam fames ac hendrerit pellentesque vestibulum porttitor.
        </p>

        <!-- Stats -->
        <div class="mt-8 grid grid-cols-3 gap-4">
          <div class="rounded-2xl bg-base-800 p-6 text-center text-white">
            <div class="text-yellow-400 text-2xl">0+</div>
            <p class="mt-2 text-sm">Years Experience</p>
          </div>
          <div class="rounded-2xl bg-base-800 p-6 text-center text-white">
            <div class="text-yellow-400 text-2xl">0+</div>
            <p class="mt-2 text-sm">Happy Clients</p>
          </div>
          <div class="rounded-2xl bg-base-800 p-6 text-center text-white">
            <div class="text-yellow-400 text-2xl">0+</div>
            <p class="mt-2 text-sm">Photo Shoot</p>
          </div>
        </div>

        <a href="about.php" class="mt-8 inline-block rounded-full border border-yellow-500 px-6 py-3 text-white hover:bg-yellow-500/10">
          More About Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Tailwind Custom Animations -->
<style>
  /* html, body {
  overflow-x: hidden;
} */

  @keyframes topToBottom {
    0%, 100% { transform: translateY(-10px); }
    50% { transform: translateY(10px); }
  }
  @keyframes bottomToTop {
    0%, 100% { transform: translateY(10px); }
    50% { transform: translateY(-10px); }
  }
  .animate-topToBottom {
    animation: topToBottom 6s ease-in-out infinite alternate;
  }
  .animate-bottomToTop {
    animation: bottomToTop 6s ease-in-out infinite alternate;
  }
</style>
<!--  -->
<!-- why choose -->
<section class="bg-[#111] text-white py-20">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    
    <!-- LEFT CONTENT -->
    <div>
      <span class="text-sm text-yellow-400">• Why Choose Us</span>
      <h2 class="text-4xl font-bold mt-2 mb-6 leading-snug">
        The Compelling Reasons To <br>
        Select Our Photography
      </h2>

      <!-- GRID OF FEATURES -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">

        <!-- Card 1 -->
        <div class="rounded-2xl p-6 bg-[#b77433] text-white">
          <i class="fas fa-camera mb-3 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">Professional Quality</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="rounded-2xl p-6 bg-[#1c1c1c]">
          <i class="fas fa-bullseye mb-3 text-yellow-400 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">Focus On Branding</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="rounded-2xl p-6 bg-[#1c1c1c]">
          <i class="fas fa-heart mb-3 text-yellow-400 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">Useful For Needs</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="rounded-2xl p-6 bg-[#b77433] text-white">
          <i class="fas fa-lightbulb mb-3 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">Position Directions</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>

        <!-- Card 5 -->
        <div class="rounded-2xl p-6 bg-[#1c1c1c]">
          <i class="fas fa-bullseye mb-3 text-yellow-400 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">A Targeted Concept</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>

        <!-- Card 6 -->
        <div class="rounded-2xl p-6 bg-[#1c1c1c]">
          <i class="fas fa-edit mb-3 text-yellow-400 text-2xl"></i>
          <h3 class="text-lg font-semibold mb-2">Professional Editing</h3>
          <p class="text-sm opacity-90">
            Tristique pharetra nunc sed amet viverra non non libero. Eget turpis pretium amet dapibus.
          </p>
        </div>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="flex justify-center">
      <img
        src="assets/images/photographer.jpg"
        alt="Photographer"
        class="rounded-2xl shadow-lg max-h-[600px] object-cover"
      >
    </div>
  </div>
</section>

<!-- Services Section -->
 <section id="services" class="relative bg-base-900 py-20">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
    
    <!-- LEFT SIDE CONTENT -->
    <div data-aos="fade-right">
      <span class="text-yellow-400 text-sm font-medium">Service</span>
      <h2 class="mt-4 font-serif text-4xl font-bold text-white leading-snug">
        Take A Look At Our Offers <br> To Suit Your Needs
      </h2>
      <p class="mt-6 text-gray-400 leading-relaxed">
        Tristique pharetra nunc sed amet viverra non non libero. Eget turpis ac pretium amet 
        dapibus nullam at bibendum. Facilisis porttitor quam fames ac hendrerit pellentesque 
        vestibulum porttitor.
      </p>
      <a href="services.php" 
         class="mt-8 inline-block rounded-lg border border-yellow-400 px-6 py-3 text-yellow-400 font-medium hover:bg-yellow-400 hover:text-black transition">
        See All Service
      </a>
    </div>

    <!-- RIGHT SIDE CARDS -->
    <div data-aos="fade-left" class="grid grid-cols-2 gap-6">
      
      <!-- Card 1 -->
      <div class="relative overflow-hidden rounded-2xl">
        <img src="https://picsum.photos/500/300?random=1" 
             alt="Wildlife Photography" 
             class="h-52 w-full object-cover rounded-2xl">
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 
                    bg-base-800 text-white text-sm font-medium 
                    px-4 py-2 rounded-xl shadow-lg">
          Wildlife Photography
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative overflow-hidden rounded-2xl">
        <img src="https://picsum.photos/500/300?random=2" 
             alt="Sport Photography" 
             class="h-52 w-full object-cover rounded-2xl">
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 
                    bg-base-800 text-white text-sm font-medium 
                    px-4 py-2 rounded-xl shadow-lg">
          Sport Photography
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative overflow-hidden rounded-2xl">
        <img src="https://picsum.photos/500/300?random=3" 
             alt="Fashion Photography" 
             class="h-52 w-full object-cover rounded-2xl">
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 
                    bg-base-800 text-white text-sm font-medium 
                    px-4 py-2 rounded-xl shadow-lg">
          Fashion Photography
        </div>
      </div>

      <!-- Card 4 -->
      <div class="relative overflow-hidden rounded-2xl">
        <img src="https://picsum.photos/500/300?random=4" 
             alt="City Photography" 
             class="h-52 w-full object-cover rounded-2xl">
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 
                    bg-base-800 text-white text-sm font-medium 
                    px-4 py-2 rounded-xl shadow-lg">
          City Photography
        </div>
      </div>

    </div>
  </div>
</section>
<!--  -->

<section class="relative h-screen flex items-center bg-cover bg-center" 
         style="background-image: url('https://picsum.photos/1920/1080?random=5');">
  
  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
    
    <!-- LEFT: Play button -->
    <div class="flex justify-center lg:justify-start">
      <button class="relative group">
        <!-- Outer circle -->
        <span class="absolute -inset-4 rounded-full border border-yellow-400/40 group-hover:scale-110 transition duration-300"></span>
        
        <!-- Inner circle -->
        <span class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/20 backdrop-blur-lg border border-white/40">
          <svg class="w-10 h-10 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M6.5 5.5l7 4.5-7 4.5v-9z"/>
          </svg>
        </span>
      </button>
    </div>

    <!-- RIGHT: Content -->
    <div class="text-center lg:text-left text-white">
      <span class="text-yellow-400 text-sm font-medium">Get Started</span>
      <h1 class="mt-4 font-serif text-5xl font-bold leading-snug">
        Love What You See? <br> Let's Discuss Your Photography Needs!
      </h1>
      <p class="mt-6 text-gray-200 leading-relaxed max-w-xl">
        Tristique pharetra nunc sed amet viverra non non libero. Eget turpis ac pretium amet dapibus nullam at bibendum.
      </p>
      <a href="contact.php" 
         class="mt-8 inline-block rounded-lg border border-yellow-400 px-6 py-3 text-yellow-400 font-medium hover:bg-yellow-400 hover:text-black transition">
        Contact Us
      </a>
    </div>

  </div>
</section>

<!--  -->

<!-- Tesimonial -->
<!-- Testimonials Section -->
<section id="testimonials" data-aos="fade-up" class="relative bg-base-900 py-24">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
<div class="mb-12 text-center">
<h2 class="font-serif text-3xl font-bold text-white md:text-4xl">Testimonials</h2>
<p class="mt-4 text-gray-400">What clients say about my work</p>
</div>


<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
<!-- Testimonial Card -->
<div class="rounded-2xl bg-base-800 p-8 shadow-soft">
<p class="text-gray-300">“Absolutely amazing experience! The photos turned out beyond expectations. Highly recommend!”</p>
<div class="mt-6 flex items-center gap-4">
<img src="assets/img/client1.jpg" alt="Client 1" class="h-12 w-12 rounded-full object-cover">
<div>
<p class="font-semibold text-white">Sarah Johnson</p>
<p class="text-sm text-gray-400">Wedding Client</p>
</div>
</div>
</div>


<div class="rounded-2xl bg-base-800 p-8 shadow-soft">
<p class="text-gray-300">“Professional, creative, and punctual. The portraits captured my personality perfectly.”</p>
<div class="mt-6 flex items-center gap-4">
<img src="assets/img/client2.jpg" alt="Client 2" class="h-12 w-12 rounded-full object-cover">
<div>
<p class="font-semibold text-white">Michael Lee</p>
<p class="text-sm text-gray-400">Portrait Client</p>
</div>
</div>
</div>


<div class="rounded-2xl bg-base-800 p-8 shadow-soft">
<p class="text-gray-300">“The event coverage was flawless. Every important moment was captured beautifully.”</p>
<div class="mt-6 flex items-center gap-4">
<img src="assets/img/client3.jpg" alt="Client 3" class="h-12 w-12 rounded-full object-cover">
</section>

<!-- Contact Section -->
 <!-- Contact Section -->
<section id="contact" data-aos="fade-up" class="relative bg-base-800 py-24">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
<div class="mb-12 text-center">
<h2 class="font-serif text-3xl font-bold text-white md:text-4xl">Get In Touch</h2>
<p class="mt-4 text-gray-400">Let’s create something beautiful together</p>
</div>


<div class="grid gap-12 md:grid-cols-2">
<!-- Contact Info -->
<div class="space-y-6 text-gray-300">
<p><span class="font-semibold text-white">Email:</span> hello@example.com</p>
<p><span class="font-semibold text-white">Phone:</span> +91 9951661367</p>
<p><span class="font-semibold text-white">Location:</span> Hyderabad, India</p>
</div>


<!-- Contact Form -->
<form action="contact.php" method="POST" class="space-y-6">
<div>
<input type="text" name="name" placeholder="Your Name" required class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-white focus:outline-none">
</div>
<div>
<input type="email" name="email" placeholder="Your Email" required class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-white focus:outline-none">
</div>
<div>
<textarea name="message" rows="4" placeholder="Your Message" required class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-white focus:outline-none"></textarea>
</div>
<button type="submit" class="w-full rounded-full bg-yellow-400 px-6 py-3 font-semibold text-white hover:bg-yellow-500">Send Message</button>
</form>
</div>
</div>
</section>

<!-- Popup Modal -->
<div id="offerPopup" class="fixed inset-0 hidden items-center justify-center bg-black/70 backdrop-blur-sm z-50">
  <div class="bg-white w-full max-w-lg p-6 rounded-2xl shadow-lg relative">
    <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl">
      &times;
    </button>

    <!-- Logo -->
    <div class="flex justify-center mb-3">
      <img src="assets/img/logo.png" alt="Logo" class="w-16 h-16">
    </div>

    <!-- Heading -->
    <h2 class="text-center text-xl font-bold text-yellow-600">
      Don’t miss the chance!
    </h2>
    <p class="text-center text-gray-600 mb-4">
      Join our mailing list to get best Service.
    </p>

    <!-- Form -->
    <form class="space-y-3">
      <input type="text" placeholder="Name" class="w-full border rounded px-3 py-2">
      <input type="email" placeholder="E Mail Address" class="w-full border rounded px-3 py-2">
      <input type="tel" placeholder="Phone Number" class="w-full border rounded px-3 py-2">
      <!-- <input type="text" placeholder="Subject" class="w-full border rounded px-3 py-2"> -->
      <textarea placeholder="Tell us about our occasion" class="w-full border rounded px-3 py-2"></textarea>

      <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-2 rounded-lg hover:bg-yellow-600 transition">
        Join Our Family
      </button>
    </form>
  </div>
</div>

<script>
  // Show popup after 4 seconds
  window.addEventListener("load", () => {
    setTimeout(() => {
      document.getElementById("offerPopup").classList.remove("hidden");
      document.getElementById("offerPopup").classList.add("flex");
    }, 3000);
  });

  // Close popup function
  function closePopup() {
    document.getElementById("offerPopup").classList.add("hidden");
  }
</script>




<?php include 'social-icons.php'; ?>

<?php include 'footer.php'; ?>