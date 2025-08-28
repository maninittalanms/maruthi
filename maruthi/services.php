<?php include 'header.php'; ?>

<!-- Hero -->
<section class="bg-base-900 text-white py-20 text-center">
  <div class="container mx-auto px-6">
    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-yellow-400">Our Services</h1>
    <p class="text-gray-300 max-w-2xl mx-auto">
      From stunning photography & videography to printing, gifts, and creative digital solutions — we cover it all.
    </p>
  </div>
</section>

<!-- Services -->
<section class="bg-base-800 py-16">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Photography & Events -->
    <h2 class="text-3xl font-bold text-yellow-400 mb-8">📸 Photography & Events</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

    


      <?php
     
$services_events = [
  ["Wedding Photography", "images/wedding.jpg", "💍", "Capture your big day in timeless frames.",  [
    "Full-day coverage",
    "Bride & Groom portraits",
    "Family & group shots",
    "Candid photography",
    "Edited photo album"
  ]],
  ["Birthday Photography","images/birthday.jpg", "🎂", "Make birthdays unforgettable with vibrant clicks.",  [
    "Cake cutting highlights",
    "Candid moments",
    "Group photos",
    "Decor shots",
    "Digital album"
  ]],
  ["Portraits", "images/portrait.jpg", "🧑‍🎨", "Professional portraits for personal & business use.",  [
    "Studio lighting setup",
    "3 outfit changes",
    "Skin retouching",
    "High-resolution edits",
    "Online gallery"
  ]],
  ["Candids","images/candid.jpg", "📷", "Natural, unscripted, and memorable moments.",  [
    "Spontaneous shots",
    "Emotion-focused",
    "No staged posing",
    "Professional retouching",
    "High-res images"
  ]],
  ["Videography","images/video.jpg", "🎥", "High-quality cinematic video coverage.",  [
    "Full HD/4K recording",
    "Drone shots (if required)",
    "Highlight reel",
    "Cinematic editing",
    "Background music"
  ]],
  ["Saree Ceremony","images/saree.jpg", "👘", "Cultural ceremonies beautifully documented.",  [
    "Traditional rituals coverage",
    "Family group shots",
    "Stage highlights",
    "Edited photo set",
    "Short video highlights"
  ]],
  ["College Events","images/college.jpg", "🎓", "From fests to farewells, we cover it all.",  [
    "Stage performances",
    "Cultural activities",
    "Group coverage",
    "Crowd candids",
    "Video highlights"
  ]],
  ["School Events","images/school.jpg", "🏫", "Capture the innocence & energy of kids’ events.",  [
    "Stage functions",
    "Kids portraits",
    "Award distribution",
    "Class photos",
    "Digital copy delivery"
  ]],
  ["Get Together Parties","images/party.jpg", "🎉", "Fun moments with friends & family, well captured.",  [
    "Group clicks",
    "Dance floor moments",
    "Decor & ambience",
    "Candid highlights",
    "Photo album"
  ]],
];


      foreach ($services_events as $s) {
        [$title,$img,$icon,$desc,$inc] = $s;
        $incAttr = htmlspecialchars(implode("||",$inc));
      ?>
        <button
          class="service-card group relative bg-base-900 rounded-2xl shadow-lg overflow-hidden hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-300 text-left"
          data-title="<?php echo htmlspecialchars($title); ?>"
          data-img="<?php echo htmlspecialchars($img); ?>"
          data-desc="<?php echo htmlspecialchars($desc); ?>"
          data-includes="<?php echo $incAttr; ?>"
        >
          <div class="relative">
            <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>"
                 class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
          </div>
          <div class="p-5">
            <h3 class="text-xl font-semibold flex items-center gap-2 text-white group-hover:text-yellow-400 transition">
              <span class="text-2xl"><?php echo $icon; ?></span> <?php echo $title; ?>
            </h3>
            <p class="text-gray-300 mt-2 text-sm"><?php echo $desc; ?></p>
          </div>
        </button>
      <?php } ?>
    </div>

    <!-- Printing & Gift Solutions -->
    <h2 class="text-3xl font-bold text-yellow-400 mb-8">🖨️ Printing & Gift Solutions</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <?php
      $services_printing = [
  ["Flexi Printing","images/printing.jpg","🖼️","High-quality banners, posters, and flex prints.", [
    "Durable material","Weather resistant","Full color printing","Custom sizes","Quick delivery"
  ]],
  ["Photo Colour Lab","images/colourlab.jpg","🎞️","Professional photo processing and color lab work.", [
    "Glossy & matte options","High-resolution prints","True-to-life colors","Fast processing","Affordable packages"
  ]],
  ["Photo Frames","images/frames.jpg","🖼️","Stylish frames to preserve your memories.", [
    "Wooden & acrylic frames","Custom sizes","Modern & classic styles","Protective glass","Gift wrapping"
  ]],
  ["Gift Articles","images/gifts.jpg","🎁","Unique gifts for your loved ones.", [
    "Custom mugs","Photo cushions","Engraved gifts","Personalized keychains","Gift packaging"
  ]],
  ["Visiting Cards","images/visiting.jpg","💳","Custom-designed professional cards.", [
    "Premium paper quality","Glossy/matte finish","Custom logos","Double-sided print","Bulk discounts"
  ]],
  ["Invitation Cards","images/invitation.jpg","✉️","Beautiful invites for all occasions.", [
    "Wedding invites","Birthday invites","Custom design","Glossy finish","Envelopes included"
  ]],
  ["ID Cards","images/idcards.jpg","🆔","Durable and professional ID card printing.", [
    "Plastic laminated cards","Custom logo","Employee/student IDs","Barcode/QR options","Lanyards available"
  ]],
  ["T-Shirts","images/tshirts.jpg","👕","Custom printed T-shirts for events & branding.", [
    "High-quality cotton","Screen & digital print","Bulk orders","Custom logos","Multiple colors"
  ]],
  ["Sticker Printing","images/stickers.jpg","🔖","Creative stickers for branding and fun.", [
    "Vinyl stickers","Waterproof quality","Custom shapes","Glossy & matte","Fast turnaround"
  ]],
  ["LED Screens","images/led.jpg","💡","Bright and sharp displays for events.", [
    "Indoor & outdoor setup","HD display quality","Custom size panels","Live streaming support","On-site installation"
  ]],
  ["Drone Services","images/drones.jpg","🚁","Aerial photography & videography with drones.", [
    "4K aerial shots","Certified drone pilots","Event coverage","Panoramic shots","Highlight video editing"
  ]],
];


      foreach ($services_printing as $s) {
        [$title,$img,$icon,$desc,$inc] = $s;
        $incAttr = htmlspecialchars(implode("||",$inc));
      ?>
        <button
          class="service-card group relative bg-base-900 rounded-2xl shadow-lg overflow-hidden hover:shadow-yellow-500/40 transition transform hover:-translate-y-2 duration-300 text-left"
          data-title="<?php echo htmlspecialchars($title); ?>"
          data-img="<?php echo htmlspecialchars($img); ?>"
          data-desc="<?php echo htmlspecialchars($desc); ?>"
          data-includes="<?php echo $incAttr; ?>"
        >
          <div class="relative">
            <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>"
                 class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
          </div>
          <div class="p-5">
            <h3 class="text-xl font-semibold flex items-center gap-2 text-white group-hover:text-yellow-400 transition">
              <span class="text-2xl"><?php echo $icon; ?></span> <?php echo $title; ?>
            </h3>
            <p class="text-gray-300 mt-2 text-sm"><?php echo $desc; ?></p>
          </div>
        </button>
      <?php } ?>
    </div>
  </div>
</section>

<!-- MODAL -->
<!-- MODAL -->
<div id="serviceModal" class="fixed inset-0 z-50 hidden items-start justify-center bg-black/70 backdrop-blur-sm">
  <!-- Click-catcher -->
  <div id="modalBackdrop" class="absolute inset-0"></div>

  <!-- Card -->
  <div class="relative mt-10 mb-10 w-[44%] max-w-4xl rounded-3xl bg-white shadow-2xl overflow-hidden max-h-[90vh] flex flex-col">
    <!-- Close -->
    <button id="modalClose"
            class="absolute top-4 right-4 h-10 w-10 rounded-full bg-white/90 shadow hover:bg-white text-gray-700 flex items-center justify-center text-2xl leading-none z-10">
      &times;
    </button>

    <!-- Image -->
    <div class="w-full h-64 md:h-40 overflow-hidden shrink-0">
      <img id="modalImg" src="" class="w-full h-full object-cover" alt="">
    </div>

    <!-- Content -->
    <div class="flex-1 overflow-y-auto px-6 md:px-10 py-8">
      <div class="flex flex-col gap-2">
        <h3 id="modalTitle" class="text-3xl md:text-4xl font-extrabold text-gray-900"></h3>
        <!-- <p class="text-blue-700 font-semibold text-lg">Starting from
          <span id="modalPrice" class="text-blue-700"></span>
        </p> -->
        <p id="modalDesc" class="text-gray-600 mt-2"></p>
      </div>

      <!-- What's Included -->
      <div class="mt-8">
        <div class="flex items-center gap-2 mb-4">
          <span class="text-yellow-500 text-xl">⭐</span>
          <h4 class="text-xl font-semibold text-gray-900">What's Included</h4>
        </div>
        <div id="modalIncludes" class="grid sm:grid-cols-2 gap-4"></div>
      </div>

      <!-- Info Strips -->
      <div class="mt-8 space-y-4">
        <div class="rounded-2xl bg-blue-50 px-5 py-4">
          <p class="font-semibold text-blue-900">Quick Turnaround</p>
          <p class="text-blue-800/80 text-sm">Fast delivery without compromising quality</p>
        </div>
        <div class="rounded-2xl bg-green-50 px-5 py-4">
          <p class="font-semibold text-green-900">Quality Guarantee</p>
          <p class="text-green-800/80 text-sm">100% satisfaction guaranteed</p>
        </div>
      </div>
    </div>

    <!-- CTA Buttons (always visible at bottom) -->
    <div class="shrink-0 px-6 md:px-10 py-6 border-t flex flex-col sm:flex-row gap-4">
      <a href="contact.php"
         class="flex-1 rounded-xl bg-yellow-500 hover:bg-yellow-400 text-black font-semibold py-3 text-center">
        Book Now
      </a>
      <a href="tel:+919876543210"
         class="flex items-center justify-center gap-2 rounded-xl border border-gray-300 py-3 px-5 text-gray-700 hover:bg-gray-50">
        <span>📞</span> Call Us
      </a>
    </div>
  </div>
</div>

  <br>
</div>
<!-- <br> -->

<script>
  // helpers
  const rupee = n => "₹" + Number(n).toLocaleString("en-IN");

  const modal      = document.getElementById("serviceModal");
  const backdrop   = document.getElementById("modalBackdrop");
  const closeBtn   = document.getElementById("modalClose");
  const imgEl      = document.getElementById("modalImg");
  const titleEl    = document.getElementById("modalTitle");
  // const priceEl    = document.getElementById("modalPrice");
  const descEl     = document.getElementById("modalDesc");
  const includesEl = document.getElementById("modalIncludes");

  function openModal({ title, img, desc, includes }) {
    imgEl.src = img;
    titleEl.textContent = title;
    // priceEl.textContent = rupee(price);
    descEl.textContent  = desc;

    // build includes pills
    includesEl.innerHTML = "";
    (includes || []).forEach(text => {
      const item = document.createElement("div");
      item.className = "flex items-center gap-3 rounded-2xl bg-gray-100 px-4 py-3";
      item.innerHTML = `<span class="w-2 h-2 rounded-full bg-blue-500"></span>
                        <span class="text-gray-800 text-sm">${text}</span>`;
      includesEl.appendChild(item);
    });

    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.classList.add("overflow-hidden");
  }

  function closeModal() {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.classList.remove("overflow-hidden");
  }

  // bind cards
  document.querySelectorAll(".service-card").forEach(card => {
    card.addEventListener("click", () => {
      const data = {
        title: card.dataset.title,
        img: card.dataset.img,
        desc: card.dataset.desc,
        // price: card.dataset.price || 0,
        includes: (card.dataset.includes || "").split("||").filter(Boolean)
      };
      openModal(data);
    });
  });

  // close events
  backdrop.addEventListener("click", closeModal);
  closeBtn.addEventListener("click", closeModal);
  document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeModal(); });
</script>

<?php include 'social-icons.php'; ?>

<?php include 'footer.php'; ?>
