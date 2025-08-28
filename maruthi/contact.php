

<?php include 'header.php'; ?>

<!-- Contact Hero -->
<section class="relative h-[60vh] flex items-center justify-center bg-cover bg-center" 
  style="background-image:url('assets/img/contact-hero.jpg')">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10 text-center text-white px-6">
    <h1 class="text-4xl md:text-6xl font-bold text-yellow-400">Get In Touch</h1>
    <p class="mt-4 text-gray-300 max-w-xl mx-auto">
      We’d love to hear from you! Reach out for bookings, inquiries, or collaborations.
    </p>
  </div>
</section>

<!-- Contact Info + Form -->
<section class="bg-base-900 py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">
    
    <!-- Contact Info -->
    <div class="text-gray-300 space-y-6">
      <h2 class="text-2xl font-bold text-white">Contact Information</h2>
      <p>Feel free to reach us via phone, email, or visit our studio.</p>
      <div class="space-y-4">
        <p class="flex items-center gap-3">
          <span class="w-10 h-10 flex items-center justify-center bg-base-800 text-yellow-400 rounded-lg">📍</span>
          <span>Maruthi Digitals, Main Road, Andhra Pradesh, India</span>
        </p>
        <p class="flex items-center gap-3">
          <span class="w-10 h-10 flex items-center justify-center bg-base-800 text-yellow-400 rounded-lg">📞</span>
          <span>+91 9951661367</span>
        </p>
        <p class="flex items-center gap-3">
          <span class="w-10 h-10 flex items-center justify-center bg-base-800 text-yellow-400 rounded-lg">✉️</span>
          <span>contact@maruthidigitals.com</span>
        </p>
      </div>
    </div>

    <!-- Contact Form -->
    <form action="sendmail.php" method="POST" class="bg-base-800 rounded-2xl p-8 space-y-6 shadow-lg">
      <input type="text" name="name" placeholder="Your Name" required 
        class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none">
      <input type="email" name="email" placeholder="Your Email" required 
        class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none">
      <textarea name="message" rows="4" placeholder="Your Message" required 
        class="w-full rounded-lg border border-gray-700 bg-base-900 px-4 py-3 text-white placeholder-gray-400 focus:border-yellow-400 focus:outline-none"></textarea>
      <button type="submit" 
        class="w-full rounded-full bg-yellow-400 text-black font-semibold px-6 py-3 hover:bg-yellow-500 transition">
        Send Message
      </button>
    </form>
  </div>
</section>
<!-- Map Section -->
<section class="w-full h-[400px] md:h-[500px] relative">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.692059926497!2d80.64801747434405!3d16.50617492873051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f0069f6d2b7f%3A0x2a6ffb99fa9a93cb!2sMaruthi%20Digitals!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
    width="100%" 
    height="100%" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade"
    class="rounded-none md:rounded-2xl shadow-lg">
  </iframe>
</section>

<?php include 'social-icons.php'; ?>


<?php include 'footer.php'; ?>
