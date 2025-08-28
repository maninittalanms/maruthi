<?php include 'header.php'; ?>

<section class="relative bg-base-900 text-white">
  <div class="max-w-7xl mx-auto px-6 py-20 text-center">
    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-yellow-400">Our Gallery</h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto text-gray-300">
      Capturing moments that last a lifetime — from photography, videography to printing & creative services.
    </p>
  </div>
</section>

<div> 
    <!-- Category Filters -->
    <div class="flex flex-wrap justify-center gap-3 mb-10">
      <button class="filter-btn active px-5 py-2 rounded-full bg-yellow-500 text-black font-semibold shadow hover:shadow-yellow-500/40 transition" data-filter="all">All</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="wedding">Wedding</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="birthday">Birthday</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="portraits">Portraits</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="candids">Candids</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="videography">Videography</button>
      <button class="filter-btn px-5 py-2 rounded-full bg-base-800 text-gray-300 border border-gray-600 hover:bg-yellow-500 hover:text-black transition" data-filter="saree">Saree Ceremony</button>
    </div>

    <!-- Gallery Grid -->
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
      $gallery = [
        ["Bridal Portrait", "images/wedding1.jpg", "wedding"],
        ["Couple Shoot", "images/wedding2.jpg", "wedding"],
        ["Birthday Celebration", "images/birthday1.jpg", "birthday"],
        ["Kids Birthday", "images/birthday2.jpg", "birthday"],
        ["Model Portrait", "images/portrait1.jpg", "portraits"],
        ["Classic Portrait", "images/portrait2.jpg", "portraits"],
        ["Candid Laugh", "images/candid1.jpg", "candids"],
        ["Fun Moments", "images/candid2.jpg", "candids"],
        ["Wedding Video", "images/video1.jpg", "videography"],
        ["Event Videography", "images/video2.jpg", "videography"],
        ["Saree Ceremony", "images/saree1.jpg", "saree"],
        ["Traditional Saree", "images/saree2.jpg", "saree"],
      ];

      foreach ($gallery as $index => $item) {
      ?>
        <div class="gallery-item relative group overflow-hidden rounded-2xl bg-base-800 shadow-md hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-500 cursor-pointer" 
             data-category="<?php echo $item[2]; ?>" 
             data-index="<?php echo $index; ?>">
          <img src="<?php echo $item[1]; ?>" alt="<?php echo $item[0]; ?>" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
          <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
            <h3 class="text-white text-xl font-semibold group-hover:text-yellow-400 transition"><?php echo $item[0]; ?></h3>
          </div>
        </div>
      <?php } ?>
    </div>
   </div>
   <br>


<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 bg-black/90 hidden items-center justify-center z-50">
  <button id="closeBtn" class="absolute top-5 right-5 text-white text-3xl hover:text-yellow-400">&times;</button>
  <button id="prevBtn" class="absolute left-5 text-white text-3xl hover:text-yellow-400">&#10094;</button>
  <img id="lightboxImg" src="" class="max-h-[80%] max-w-[90%] rounded-xl shadow-yellow-500/40">
  <button id="nextBtn" class="absolute right-5 text-white text-3xl hover:text-yellow-400">&#10095;</button>
  <p id="lightboxCaption" class="absolute bottom-5 text-yellow-400 text-lg"></p>
</div>

<!-- Scripts -->
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

  // Filter functionality
  filterBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      filterBtns.forEach(b => b.classList.remove("bg-yellow-500", "text-black", "font-semibold"));
      btn.classList.add("bg-yellow-500", "text-black", "font-semibold");

      const filter = btn.getAttribute("data-filter");
      galleryItems.forEach(item => {
        if (filter === "all" || item.getAttribute("data-category") === filter) {
          item.classList.remove("hidden");
          item.classList.add("block");
        } else {
          item.classList.add("hidden");
        }
      });

      items = Array.from(document.querySelectorAll(".gallery-item:not(.hidden)"));
    });
  });

  // Lightbox open
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

  // Navigation
  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showLightbox();
  });

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % items.length;
    showLightbox();
  });

  // Close
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
<?php include 'social-icons.php'; ?>

<?php include 'footer.php'; ?>
