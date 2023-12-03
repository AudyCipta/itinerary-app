@push('styles')
  <style>
    header .navbar {
      background-color: rgba(255, 255, 255, 0.9) !important;
      backdrop-filter: blur(10px) !important;
    }

    .nav-link {
      color: #767494 !important;
    }

    .nav-link.active {
      color: #5d5a88 !important;
    }
  </style>
@endpush

<x-layouts.app title="Blog Detail">
  <section id="blog-detail">
    <div class="container">

      <div class="blog-detail-content">
        <div class="text-center mb-5">
          <h2>Discovering Paradise: The Allure of Balangan Beach, Bali</h2>
          <p>Bali, known for its enchanting landscapes and vibrant culture, harbors a hidden gem along its southwestern
            coast—Balangan Beach. Nestled between Jimbaran and Uluwatu, this secluded haven stands as a testament to
            Bali's natural beauty, offering visitors a unique blend of tranquility and adventure.</p>
        </div>

        <img src="https://placehold.co/600x400" alt="img" class="img-fluid w-100 rounded-3">

        <h4 class="mt-5">Golden Sands and Turquoise Waters:</h4>
        <p>Balangan Beach is celebrated for its pristine golden sands, kissed by the gentle waves of the Indian Ocean.
          The beach's allure lies in its untouched beauty, providing a serene escape from the bustling crowds of more
          popular destinations. The crystal-clear turquoise waters create a mesmerizing contrast against the rugged
          cliffs that line the shore, forming a picturesque backdrop for a day of relaxation.</p>

        <h4 class="mt-5">Spectacular Clifftop Views:</h4>
        <p>A highlight of Balangan Beach is the breathtaking clifftop views that surround the area. Take a leisurely
          stroll along the elevated paths, and you'll be treated to panoramic vistas of the coastline. The dramatic
          cliffs not only enhance the scenic beauty but also provide excellent vantage points to witness the sun setting
          over the Indian Ocean, painting the sky in hues of orange and pink.</p>

        <h4 class="mt-5">Hidden Warungs and Culinary Delights:</h4>
        <p>Balangan Beach is not only a feast for the eyes but also a treat for the taste buds. Local warungs (small
          eateries) dot the beach, serving up delicious Balinese cuisine. From fresh seafood to traditional Nasi Goreng,
          visitors can savor the authentic flavors of Bali while enjoying the laid-back atmosphere of these hidden gems.
        </p>

        <h4 class="mt-5">Preserving the Paradise:</h4>
        <p>Balangan Beach's pristine beauty is a testament to its relatively untouched state. As visitors, it is crucial
          to practice responsible tourism, respecting the local environment and community. Adhering to Leave No Trace
          principles ensures that this natural haven remains a paradise for generations to come.</p>
        <p>In conclusion, Balangan Beach encapsulates the essence of Bali's beauty, providing a perfect blend of
          relaxation and adventure. Whether you seek the thrill of the waves, the tranquility of golden sands, or simply
          a breathtaking sunset, Balangan Beach invites you to discover paradise on the southwestern shores of Bali.</p>

      </div>

    </div>
  </section>
</x-layouts.app>
