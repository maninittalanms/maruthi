<!-- Footer -->
<footer class="bg-base-800 border-t border-white/10 py-12">
<div class="mx-auto max-w-7xl px-6 lg:px-8">
<div class="grid grid-cols-1 gap-8 md:grid-cols-3">


<!-- Brand / About -->
<div>
<h3 class="font-serif text-2xl font-bold text-white">Maruthi Digitals</h3>
<p class="mt-4 text-gray-400">Capturing moments that last forever. A professional photography portfolio built with love.</p>
</div>


<!-- Navigation -->
<div>
<h4 class="text-lg font-semibold text-white">Quick Links</h4>
<ul class="mt-4 space-y-2 text-gray-400">
<li><a href="index.php" class="hover:text-white">Home</a></li>
<li><a href="gallery.php" class="hover:text-white">Gallery</a></li>
<li><a href="about.php" class="hover:text-white">About</a></li>
<li><a href="contact.php" class="hover:text-white">Contact</a></li>
</ul>
</div>


<!-- Contact -->
<div>
<h4 class="text-lg font-semibold text-white">Contact</h4>
<p class="mt-4 text-gray-400">Email: info@Maruthi Digitals.com</p>
<p class="text-gray-400">Phone: +91 9951661367</p>
<div class="mt-4 flex space-x-4">
<a href="#" class="text-gray-400 hover:text-white">Fb</a>
<a href="#" class="text-gray-400 hover:text-white">Insta</a>
<a href="#" class="text-gray-400 hover:text-white">Tw</a>
</div>
</div>


</div>


<div class="mt-12 border-t border-white/10 pt-6 text-center text-gray-500">
<p>&copy; <?php echo date('Y'); ?> Maruthi Digitals. All rights reserved.</p>
</div>
</div>
</footer>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
duration: 1000,
once: true,
});
</script>
<!-- Swiper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var heroSwiper = new Swiper(".heroSwiper", {
    loop: true,
    autoplay: { delay: 3000, disableOnInteraction: false },
    effect: "fade"
  });

  var thumbSwiper = new Swiper(".thumbSwiper", {
    slidesPerView: 2.2, // shows little bit on sides
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: { delay: 3000, disableOnInteraction: false },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
  });
</script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

</body>
</html>