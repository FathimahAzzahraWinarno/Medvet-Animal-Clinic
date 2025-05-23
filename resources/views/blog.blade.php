<x-layout title="blog">
 <div class="max-w-6xl mx-auto mt-10 mb-10 grid grid-cols-1 md:grid-cols-2 gap-8">

    <div class="bg-white p-6 rounded-xl shadow-xl">
      <h2 class="text-xl font-bold mb-4">5 Tips Merawat Hewan Peliharaan agar Tetap Sehat dan Bahagia</h2>
      <button onclick="toggleArticle('artikel1')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition">
        Baca
      </button>
      <div id="artikel1" class="mt-4 hidden">
        <p class="mb-4">
          Memiliki hewan peliharaan seperti anjing atau kucing adalah pengalaman yang menyenangkan. Namun, sebagai pemilik, kita punya tanggung jawab besar dalam merawat mereka dengan baik.
        </p>
        <p class="mb-4">Berikut 5 tips merawat hewan agar tetap sehat dan bahagia:</p>
        <ul class="list-decimal list-inside mb-4 space-y-1">
          <li>Pemberian Makanan Berkualitas: Pilih makanan yang sesuai dengan usia dan jenis hewan.</li>
          <li>Keseimbangan Aktivitas: Ajak bermain, berjalan-jalan, atau memberikan mainan interaktif.</li>
          <li>Kebersihan Rutin: Mandikan hewan, bersihkan kandang, dan sisir bulunya secara teratur.</li>
          <li>Pemeriksaan Kesehatan: Lakukan vaksinasi dan cek kesehatan secara berkala.</li>
          <li>Kasih Sayang: Beri perhatian dan kasih sayang agar hewan merasa aman dan dicintai.</li>
        </ul>
        <p class="mt-2">Dengan perawatan yang tepat, hewan peliharaan akan hidup lebih lama dan penuh semangat!</p>
      </div>
    </div>


    <div class="bg-white p-6 rounded-xl shadow-xl">
      <h2 class="text-xl font-bold mb-4">Mengapa Pemeriksaan Rutin ke Klinik Hewan Itu Penting?</h2>
      <button onclick="toggleArticle('artikel2')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition">
        Baca
      </button>
      <div id="artikel2" class="mt-4 hidden">
        <p class="mb-4">
          Banyak pemilik hewan peliharaan hanya membawa hewannya ke dokter saat sudah terlihat sakit. Padahal, <strong>pemeriksaan rutin</strong> sangat penting untuk mencegah masalah kesehatan sebelum menjadi serius.
        </p>
        <p class="mb-4">Berikut beberapa manfaat pemeriksaan rutin di klinik hewan:</p>
        <ul class="list-disc list-inside mb-4">
          <li>Deteksi dini penyakit seperti infeksi, gangguan pencernaan, atau masalah kulit.</li>
          <li>Mengecek kondisi gigi, mata, dan telinga secara menyeluruh.</li>
          <li>Update vaksinasi dan obat cacing sesuai jadwal.</li>
          <li>Konsultasi nutrisi dan perilaku hewan peliharaan.</li>
        </ul>
        <p>
          Dengan pemeriksaan rutin, kamu tidak hanya menjaga kesehatan hewan, tapi juga menghemat biaya pengobatan jangka panjang. Jadi, jangan tunggu sakit — jadwalkan kunjungan ke klinik sekarang juga!
        </p>
      </div>
    </div>
  </div>

  <script>
    function toggleArticle(id) {
      const el = document.getElementById(id);
      el.classList.toggle("hidden");
    }
  </script>
</x-layout>