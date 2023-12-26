<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            [
                'name' => 'Balangan Beach',
                'slug' => Str::slug('Balangan Beach'),
                'destination_preference_id' => 1,
                'address' => 'South Kuta, Badung Regency, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.934057309158!2d115.12083632416179!3d-8.792265991259903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd245140b1ef427%3A0xe2467e776335e53e!2sBalangan%20Beach!5e0!3m2!1sen!2sid!4v1703572916305!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Balangan Beach hidden between two steeply clift, Balangan Beach is one of the beautiful beaches of many beautiful beaches at the southern part of Bali Island. Its location which is close to Dreamland beaches and Uluwatu Temple so that it could be an alternative attractions you can visit.
                <p>The entrance access to the beach in the area of Pecatu is not so difficult because stairs have been provided which are wide enough for tourist. The atmosphere is still very natural and it\'s cool, moreover it is not much visited tourist. For surfers, this beach is very famous and a favorite spot for surfing besides Dreamland beach.</p>
                <p>Balangan beach with coastline approximately 1 km long north facing to north, so the activity of I Gusti Ngurah Rai International Airport is visible from here in the distance. In the eastern part bounded by high cliffs with indentations underneath because eroded by waves. In the western side, the shore is bounded by high cliffs filled with plants, especially palm trees, but it also contains some sort of cottages to enjoy the beaches from the height. The Absorbing thing is when the sea condition is low tide from this beach we could lead to Dreamland Beach by walking along the west shore.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Garuda Kencana Wisnu',
                'slug' => Str::slug('Garuda Kencana Wisnu'),
                'destination_preference_id' => 4,
                'address' => 'Uluwatu St, Ungasan, South Kuta, Badung Regency, Bali 80364',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.740599243754!2d115.16502367416193!3d-8.810422791242404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244cf54e1dec7%3A0x1988663e064f5a51!2sGaruda%20Wisnu%20Kencana%20Cultural%20Park!5e0!3m2!1sen!2sid!4v1703572980413!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Garuda Wisnu Kencana (GWK) is a cultural park located on the southern part of the island of Bali, Indonesia. The park is situated on a limestone hill in the southern part of Bali, near the town of Ungasan. The main attraction of GWK is the ongoing construction of a gigantic statue depicting the Hindu god Vishnu riding on the mythical bird Garuda. In addition to the statue, Garuda Wisnu Kencana also features a cultural park that showcases traditional Balinese dance performances, exhibitions, and various cultural activities. The park aims to promote and preserve Indonesian arts and culture.</p>
                <p>GWK often hosts events, concerts, and cultural performances, making it a popular destination for both tourists and locals. The spacious area and beautiful surroundings make it a unique venue for various activities. Due to its elevated location, GWK offers stunning panoramic views of the surrounding area, including the Indian Ocean. Visitors can enjoy these views while exploring the park.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kedongan Seafood',
                'slug' => Str::slug('Kedongan Seafood'),
                'destination_preference_id' => 6,
                'address' => '65R9+3Q8, Jl. Pantai Kedonganan, Kedonganan, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7886.521643940838!2d115.16403128795032!3d-8.761513065157903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244696141ba85%3A0x748d421817db1064!2sBlue%20Ocean%20Seafood!5e0!3m2!1sen!2sid!4v1703573484998!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Kedonganan is a coastal village in Bali, Indonesia, known for its seafood market and beachfront restaurants. One of the notable features in Kedonganan is the Kedonganan Fish Market, where you can find a variety of fresh seafood. The market is often bustling with activity as fishermen bring in their catches, and local vendors display an array of seafood for sale. Kedonganan Fish Market offers a wide selection of fresh seafood, including various fish, prawns, crabs, clams, and more. You can choose your preferred seafood, and many restaurants in the area allow you to select the items you want to be cooked. Along the beach, you\'ll find numerous seafood stalls and restaurants offering grilled seafood dishes. Grilled fish, prawns, squid, and other delights are often prepared with local spices and served with traditional condiments.</p>
                <p>Many seafood restaurants in Kedonganan are situated right on the beach, providing a relaxed and picturesque setting. Visitors can enjoy their meals with views of the ocean and beautiful sunsets. One of the unique aspects of dining in Kedonganan is the cook-to-order service. After selecting your preferred seafood at the market, you can take it to one of the nearby restaurants, and they will prepare it according to your liking. Kedonganan offers a more local and less touristy atmosphere compared to some other parts of Bali. It\'s a great place to experience authentic Balinese seafood dining.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Uluwatu Temple',
                'slug' => Str::slug('Uluwatu Temple'),
                'destination_preference_id' => 5,
                'address' => 'Pecatu, South Kuta, Badung Regency, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.5384403090675!2d115.0805586706821!3d-8.82935662182891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24ffc20cb8191%3A0xcb98d1ba7db0495!2sUluwatu%20Temple!5e0!3m2!1sen!2sid!4v1703573545785!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Uluwatu Temple is one of Bali\'s most iconic sea temples, situated on the southernmost tip of the island\'s Bukit Peninsula. Perched on a steep cliff about 70 meters above the Indian Ocean, Uluwatu Temple is renowned for its stunning location, Balinese architecture, and traditional Kecak dance performances. Uluwatu Temple is located in Pecatu Village, South Kuta, Badung Regency, Bali. The temple sits atop a dramatic limestone cliff, providing panoramic views of the surrounding ocean. Uluwatu Temple showcases traditional Balinese architecture, with intricately carved stone gateways (candi bentar) and sculptures. The temple is dedicated to Sang Hyang Widhi Wasa in his manifestation as Rudra, the Balinese Hindu deity of the wind and storms. The temple offers breathtaking views of the Indian Ocean, especially during sunset. Visitors often gather at the cliff\'s edge to witness the sun setting over the water, creating a magical atmosphere.</p>
                <p>Uluwatu Temple is known for its nightly Kecak dance performances. The Kecak dance is a traditional Balinese dance that involves a large group of male performers chanting "cak" in unison, creating a unique and rhythmic sound. The dance typically depicts episodes from the Ramayana epic. Uluwatu Temple is an active site for Balinese ceremonies, especially during important Hindu festivals. Visitors may have the opportunity to witness traditional rituals and ceremonies if they coincide with their visit.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nyang-nyang Beach',
                'slug' => Str::slug('Nyang-nyang Beach'),
                'destination_preference_id' => 1,
                'address' => 'Jl. Raya Uluwatu Pecatu, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15769.734255208532!2d115.08311743440977!3d-8.8391633094348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25aa78911975b%3A0xc4c366fba0c88757!2sNyang%20Nyang%20Beach!5e0!3m2!1sen!2sid!4v1703573592201!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Nyang Nyang Beach is a beautiful and relatively secluded beach located on the southwestern Bukit Peninsula of Bali, Indonesia. Nyang Nyang Beach is situated in the Pecatu area, near Uluwatu. It\'s part of the larger Bukit Peninsula, known for its stunning cliffs, hidden beaches, and world-class surf breaks. Getting to Nyang Nyang Beach involves a bit of an adventure. The access road to the beach is unpaved, and visitors need to traverse through a lush, green landscape before reaching the shore. The journey adds to the sense of remoteness and tranquility. Nyang Nyang is considered one of Bali\'s hidden gems, offering a peaceful and less crowded environment compared to some of the more popular beaches. Its secluded location attracts those seeking a serene and unspoiled coastal experience. The beach itself features a long stretch of white sand, bordered by cliffs and turquoise waters. It\'s an excellent spot for a leisurely walk along the shoreline or for simply relaxing and enjoying the natural beauty.</p>
                <p>While not as well-known as some other surf spots in Bali, Nyang Nyang Beach can offer decent waves for surfing. It\'s often visited by surfers looking for a less crowded alternative. At the eastern end of the beach, there\'s a shipwreck that adds a unique touch to the scenery. The wreckage provides an interesting backdrop for photos and exploration. The beach offers spectacular sunset views over the Indian Ocean, making it a great spot to unwind in the late afternoon.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nung-nung Waterfall',
                'slug' => Str::slug('Nung-nung Waterfall'),
                'destination_preference_id' => 3,
                'address' => 'Belok/Sidan, Petang, Badung Regency, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15790.91334936478!2d115.21909093429791!3d-8.329769417298568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22083c3c810e3%3A0x8ad87885a422e318!2sNungnung%20Waterfall!5e0!3m2!1sen!2sid!4v1703573625096!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Located in the center of Pelaga Village, Petang District, Badung Regency, you will find a popular natural tourist destination, namely Nungnung Waterfall. Nungnung Waterfall is not just an ordinary natural destination. This place is a symbol of Bali\'s unspoiled and pristine natural beauty, hiding behind a stretch of green and lush tropical forest. Watching this approximately 50 meter high waterfall fall thunderously into the natural pool below, surrounded by boulders and tall trees, is a truly enchanting experience that you can\'t find anywhere else. The roar of the natural destination can be heard as soon as you arrive at the vehicle parking area. To reach the bottom, each visitor needs to go through several paths and around 400 steps.</p>
                <p>To ensure your comfort when visiting Nungnung Waterfall, as part of your Bali tour, here are some items you should bring: Raincoat considering that this waterfall is located in the highlands, the chance of rain is quite high, especially in the afternoon. Drinking water and snacks, Change of clothes, Plastic bag to wrap your wet clothes, Plastic protector for your cellphone, camera and wallet, Trekking shoes or sandals for comfort when climbing and descending the stairs.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sangeh Monkey Forest',
                'slug' => Str::slug('Sangeh Monkey Forest'),
                'destination_preference_id' => 3,
                'address' => 'Jl. Brahmana, Sangeh, Kec. Abiansemal, Kabupaten Badung, Bali 80353',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.181004264489!2d115.20416417415737!3d-8.481774291559324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd223492c21e6a3%3A0xb715386c995db0c2!2sSangeh%20Monkey%20Forest!5e0!3m2!1sen!2sid!4v1703573668064!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Sangeh Monkey Forest is a natural sanctuary located in the village of Sangeh, in the Badung Regency of Bali, Indonesia. It is known for its sacred and dense nutmeg forest inhabited by a large population of Balinese long-tailed macaques. The main attraction of Sangeh Monkey Forest is its nutmeg (Pala) forest. The tall nutmeg trees create a unique and serene environment, providing a natural habitat for the resident macaques.Sangeh is considered a sacred site, and the monkeys living in the forest are believed to be sacred guardians of the temple within the forest. The area is also home to Pura Bukit Sari, a small temple surrounded by lush greenery. The forest is home to a large population of long-tailed macaques, and visitors can observe these playful and curious primates as they move through the trees and interact with each other.</p>
                <p>Visitors to Sangeh Monkey Forest often combine their visit with exploring Pura Bukit Sari. The temple features moss-covered stone structures and adds a cultural and spiritual dimension to the natural setting. Sangeh offers walking paths through the forest, allowing visitors to enjoy a leisurely stroll while observing the monkeys and appreciating the natural beauty of the area. Efforts are made to preserve the natural habitat and protect the macaque population. The forest is managed to maintain a healthy ecosystem for both the monkeys and the diverse plant life. Visitors are advised to follow guidelines provided by the local authorities to ensure the safety of both humans and monkeys. Feeding the monkeys is generally discouraged to prevent disrupting their natural behaviors.<p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Waterboom Bali',
                'slug' => Str::slug('Waterboom Bali'),
                'destination_preference_id' => 7,
                'address' => 'Jl. Kartika Plaza, Tuban, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.6094614349195!2d115.16671507416082!3d-8.728582891321237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246a3ee8f82df%3A0x1291d693f3407fa5!2sWaterbom%20Bali!5e0!3m2!1sen!2sid!4v1703573709822!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Waterbom Bali is a popular water park located in Kuta, Bali, Indonesia. It is known for its extensive range of water attractions, slides, and family-friendly activities. The water park boasts a variety of water slides and attractions suitable for visitors of all ages. From thrilling slides for adrenaline seekers to more relaxed attractions, Waterbom Bali offers a diverse range of experiences. For a more leisurely experience, visitors can enjoy the lazy river, where they can float along in a tube and take in the surroundings. Waterbom Bali features a FlowRider, providing an opportunity for visitors to try their hand at bodyboarding and surfing in a controlled environment. Funtastic is an area specifically designed for younger visitors, offering a safe and enjoyable space for kids to play with interactive water features. Waterbom Bali provides dining options within the park, including cafes and snack bars. Additionally, there are facilities such as changing rooms, lockers, and sun loungers for visitors\' convenience. Waterbom Bali is known for its commitment to sustainability and environmental responsibility. The park has implemented various eco-friendly initiatives, such as using renewable energy sources and minimizing its environmental impact.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Old\'s Man',
                'slug' => Str::slug("Old's Man"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Pantai Batu Bolong No.117X, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80351',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.341221446214!2d115.12818667415978!3d-8.659061591388243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2387daec155db%3A0x7fa32c5e3dc6fe8d!2sOld%20Man&#39;s!5e0!3m2!1sen!2sid!4v1703573741673!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Old Man\'s Canggu is a trendy beer garden near the dark sandy beach of Batu Bolong Beach. The bar is right in front of the lava reef right, so you can go down any time before or after surfing. The bar\'s main thatched pavilion is perfect for hanging out with friends and relaxing during the day. You are free to choose where to sit which ranges from benches under Balinese style umbrellas. Supporting facilities such as colorful beanbags can be used to relax on the green lawn. During the day, relax with a cold Bintang beer and some simple food like burgers, fries and salad. Food prices are set at around IDR 54,000 to IDR 110,000.</p><p>Apart from beer, there are several drink menu choices such as fruit juice, wine, smoothies, cocktails, tea and coffee. You can also find heavy food here, ranging from seafood, meat, pizza and vegetarian menus. The fun and friendly atmosphere takes on a wilder party scene after sunset. Especially on Wednesday nights, Dirty Ol\' Old Man\'s Bar always has drinking games. The crowd at Old Man\'s Bar consists of a good mix of locals, visitors and expats - most in their 20s. Live bands from reggae, rock to DJs spinning music make anyone want to join in the bustling crowd with a regular evening highlight.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Warung Damar',
                'slug' => Str::slug("Warung Damar"),
                'destination_preference_id' => 6,
                'address' => 'Jalan Kartika Plaza, Bali Garden Beach Resort, Kec. Kuta, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.613137779971!2d115.16653707416087!3d-8.728234991321576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246a3c6817a7f%3A0x79dfbaa9f8bb0fff!2sWarung%20Damar!5e0!3m2!1sen!2sid!4v1703573794718!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Combining classic Indonesian Street Food flavours with the elegance of an upmarket eatery, Warung Damar delivers an enticing menu featuring a modern take on traditional favourites to suit every palate. Offering a family-friendly culinary experience, diners get to experience the excitement of a Kuta hotel streetscape as well as exotic Asian flavours from the plate.<p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ulu Garden',
                'slug' => Str::slug("Ulu Garden"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Pantai Padang-Padang, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.674671528615!2d115.09077197416211!3d-8.81660189123647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24fff5c7222b7%3A0x43a1b16e2fc72152!2sUlu%20Garden!5e0!3m2!1sen!2sid!4v1703573827175!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Ulu Garden is an oasis of togetherness in the heart of Uluwatu. It is a multidisciplinary hospitality space where one can discover multiple areas with different functions, all centered around the tropical garden. Founded by Virginie, Belgian food entrepreneur, and Armi, multiskilled local artist, Ulu Garden is marked by its authentic Balinese character and its raw contemporary look and feel. Intended to be a meeting place, evolving around the wellbeing of body, mind and soul in the heart of one of Bali\'s most beautiful spots.</p>
<p>The main pillar of Ulu Garden is its restaurant and bar where pure, sane and vibrant food and drinks are served. Eating is a soul-calling moment for us, our restaurants menu consists of contemporary balanced flavour bombs, inspired by local seasonal products. Also offering different activities, the garden shifts with the rise and fall of the sun, with a relax working space and workshops during the day; and a more festive atmosphere with live music and concerts at night.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Seminyak Beach',
                'slug' => Str::slug("Seminyak Beach"),
                'destination_preference_id' => 7,
                'address' => 'Jl. Camplung Tanduk No.99, Seminyak, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15776.066040046175!2d115.1459858843763!3d-8.689979111733349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2471c804bfd05%3A0xdcc2b5ae63dc9082!2sSeminyak%20Beach!5e0!3m2!1sen!2sid!4v1703573947698!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Seminyak Beach, nestled along Bali\'s western coast, is a sublime fusion of tropical allure and cosmopolitan sophistication. This enchanting stretch of shoreline, adorned with powdery golden sand, invites visitors to bask in the warmth of the Indonesian sun and revel in the gentle embrace of the Indian Ocean. Luxurious resorts and private villas, seamlessly blending contemporary comfort with Balinese elegance, line the coast, offering discerning travelers an exclusive retreat with direct access to the beach. Seminyak\'s reputation as a high-end destination is further accentuated by its trendy beach clubs, where chic infinity pools, stylish lounges, and vibrant atmospheres create an ambiance of relaxation and indulgence. As the sun gracefully dips below the horizon, Seminyak transforms into a captivating stage for breathtaking sunsets, casting hues of orange and pink across the sky. The area\'s boutique shopping, art galleries, and a diverse culinary scene add to its allure, providing visitors with an immersive experience that seamlessly combines upscale elegance with the laid-back charm of Balinese coastal living. Come nightfall, Seminyak comes alive with a vibrant nightlife, making it an enticing destination for those seeking a perfect blend of luxury, natural beauty, and entertainment on the captivating island of Bali.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nasi Pedas Bu Andika',
                'slug' => Str::slug("Nasi Pedas Bu Andika"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Blambangan No.55, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.634364534084!2d115.17538477416078!3d-8.72622599132353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246afeec5c4f1%3A0x6a551bb4ef05f557!2sNasi%20Pedas%20Ibu%20Andika!5e0!3m2!1sen!2sid!4v1703573989855!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Nasi Pedas Bu Andika, a famous culinary delight in Bali, which tourists must try. Even though there is a nickname, going to Bali won\'t be complete if you don\'t try Bu Andika\'s Spicy Rice. Starting from chicken skin, intestines, chicken satay, shredded chicken, crispy fried fish, sweet tempeh, and many more. Meanwhile for vegetables, you can choose lawar vegetables, cassava vegetables. Not only that, there are lodeh vegetables and stir-fried chayote. What\'s special about Bu Andika\'s Spicy Rice is of course the nampol spicy rice. Chicken skin here is one of the customers\' favorite menu items. This menu, which runs out quickly, crispy chicken skin can be combined with chili sauce and vegetables, is guaranteed to be delicious. Even though the mainstay of the menu is spicy rice, travelers who can\'t eat spicy food can still enjoy the menu here. Just request that the menu be without chili sauce.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Taman Ayun Temple',
                'slug' => Str::slug("Taman Ayun Temple"),
                'destination_preference_id' => 5,
                'address' => 'Jl. Ayodya No.10, Mengwi, Kec. Mengwi, Kabupaten Badung, Bali 80351',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.5640571880895!2d115.17002637415817!3d-8.541632291501498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b90db7a4001%3A0xaf262ff28fc4caed!2sTaman%20Ayun%20Temple!5e0!3m2!1sen!2sid!4v1703574023963!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Taman Ayun Temple, nestled in the village of Mengwi in Bali, Indonesia, stands as a testament to the island\'s rich cultural and spiritual heritage. Dating back to the 17th century, this Hindu temple is a masterpiece of traditional Balinese architecture, celebrated for its intricate carvings, majestic pagoda towers, and serene garden setting. The name "Taman Ayun," meaning "Beautiful Garden," perfectly encapsulates the temple\'s allure. Surrounded by a wide, elegant moat, the complex unfolds in a series of concentric terraces adorned with lush greenery, lotus ponds, and manicured lawns. The main temple, elevated on a higher terrace, showcases multi-tiered roofs, symbolic stone guardians, and elaborately carved wooden gates. Taman Ayun Temple holds profound cultural significance as the former main temple of the Mengwi Kingdom and is now recognized as a UNESCO Cultural Heritage Site. Visitors are not only captivated by the architectural splendor but also immersed in the spiritual ambiance, making it a must-visit destination for those seeking to explore the cultural richness of Bali.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Casa Tua Canggu',
                'slug' => Str::slug("Casa Tua Canggu"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Pantai Batu Bolong No.10, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.472317013878!2d115.13818737415963!3d-8.646548191400303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2387d68668157%3A0xa688ec311b77b7a9!2sCasa%20Tua%20Canggu!5e0!3m2!1sen!2sid!4v1703574054084!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Enjoy typical Indonesian dishes at Casa Tua Canggu. Located on Jl. Batu Bolong Beach No.10, Canggu. With a vintage restaurant design and surrounded by green plants, the atmosphere becomes more comfortable when visiting here. Plus, the antique decorations that decorate this restaurant are a special attraction and are often used as photo spots. Casa Tua Canggu serves typical Indonesian food presented in a unique way.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Canggu',
                'slug' => Str::slug("Canggu"),
                'destination_preference_id' => 4,
                'address' => 'Jl. Canggu',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31556.366336395655!2d115.11941630248265!3d-8.639526950037222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23861f4589665%3A0x5030bfbca82fd30!2sCanggu%2C%20Kuta%20Utara%2C%20Badung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1703574132184!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Strolling along the vibrant streets of Canggu in Bali, Indonesia, is an immersive experience that encapsulates the eclectic charm of this coastal village. As you navigate the bustling thoroughfares, a kaleidoscope of sights, sounds, and scents unfolds, creating a dynamic tapestry of modernity and tradition. Canggu Street, lined with a mix of quaint cafes, hip boutiques, and surf shops, invites leisurely exploration. The rhythmic sounds of distant waves meld with the cheerful chatter of locals and the occasional purr of motorbikes weaving through the narrow lanes. Cafes adorned with colorful murals and bohemian décor beckon with the aroma of freshly brewed coffee, offering inviting spaces to pause and savor the moment. Surfers with sandy feet saunter by, boards in tow, embodying the laid-back surf culture that defines Canggu. Fashion boutiques showcase a fusion of beach-inspired attire and bohemian chic, reflecting the village\'s evolving style. The streets are alive with the energy of locals and travelers alike, creating a melting pot of cultures. Street vendors peddle local delicacies, from grilled satay skewers to traditional Balinese sweets, adding a tantalizing dimension to the sensory journey. Artisan markets periodically grace the streets, displaying handcrafted goods, jewelry, and vibrant textiles, providing opportunities to discover unique treasures.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Livingstone Cafe & Bakery',
                'slug' => Str::slug("Livingstone Cafe & Bakery"),
                'destination_preference_id' => 6,
                'address' => 'Petitenget St No.88X, Kerobokan Kelod, Kuta Utara, Badung Regency, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2077213803786!2d115.15884727416005!3d-8.671786091375983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476b0442eabf%3A0xe817ee4f920738b6!2sLivingstone!5e0!3m2!1sen!2sid!4v1703574177148!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Livingstone is all about passion, love, creativity, awesome croissants, and a cup of divine coffee. As innocent as it sounds, our aim is to inspire people through what we do. This cafe has a casual dining concept with a comfortable and calm impression. This classic-modern concept is carried forward for room decoration. Every interior of Livingstone Cafe & Bakery has a wooden feel. This cafe covers an area of around two acres and is divided into two rooms, namely indoor and outdoor. These two rooms are separated by glass doors, this is so that the room can get sunlight into the inside of the room.</p>
<p>All food and drinks served at Livingstone are made from quality ingredients and without any preservatives at all. Around 60 percent of visitors are foreign tourists and expatriates, and the rest are domestic, which proves that the dishes here are suitable for both tourist and domestic palates. Livingstone Cafe & Bakery menu prices start from IDR 18,000 - IDR 175,000.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Love Anchor Canggu',
                'slug' => Str::slug("Love Anchor Canggu"),
                'destination_preference_id' => 8,
                'address' => 'Jl. Pantai Batu Bolong No.56, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80351',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.668095164167!2d115.1155391116132!3d-8.651828258026898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238796aeea797%3A0xf6fb68fe602b27b2!2sLove%20Anchor!5e0!3m2!1sid!2sid!4v1703573595619!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Love Anchors Boutique Complex is Canggu\'s iconic, shopping and restaurant village. Surrounded by rice paddies, merely 1 kilometre from the beach, and built in a classic wooden Joglo style, the Love Anchors complex is simply breathtaking. Delivering a modern mix of food, entertainment and retail within a traditionally designed setting, Love Anchors Boutique Complex is at the epicenter of Canggu \'s emerging popularity as a destination for tourists, expats and locals alike.</p>

<p>There are many styles of clothing on sale here. There are sweatshirts, shirts, dresses, swimwear, and so on. In addition, there are also clothes with a unique vintage style in this place. What is more interesting, the clothes sold are the work of local Balinese people. In addition to clothing, this modern bazaar also sells various unique items. Some of them are necklaces and bracelets from shells, earrings, rattan woven bags, and others. There are also other souvenirs such as key chains, barong masks, and so on.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'KU DE TA',
                'slug' => Str::slug("KU DE TA"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Kayu Aya No.9, Seminyak, Kec. Kuta, Kabupaten Badung, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15776.185685492519!2d115.13629611165943!3d-8.687135656278745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2471b2013ebe5%3A0x91312ce37f0aa36a!2sKu%20De%20Ta!5e0!3m2!1sid!2sid!4v1703573615915!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Ku De Ta has been known as one of the tourist destinations in Bali that is mandatory and often visited by tourists. Combining the concept of exotic Balinese culture with the luxury of international class service makes KUDETA a destination that is always the center of attention. In addition to the luxurious and exotic place, there are also various classy dishes from several countries such as Asia, Europe, and Australia such as sushi, pizza, burger, spaghetti, Balinese rice and others. KUDETA Seminyak also provides a healthy gluten-free menu for vegans who visit.</p>

<p>Visiting KUDETA is most appropriate in the time before the afternoon starting at 05:00 PM WITA because the sun is not too hot. The more night the atmosphere at KUDETA Seminyak, the more lively because there is live music entertainment and bars hosted by an international DJ team. For visitors who want to pamper themselves in the morning or afternoon, there is no need to worry, because at KUDETA Bali there is also a swimming pool with sea views so that visitors are like swimming in the open sea. In addition, there are also various choices of juices, champagne, wine, mocktails, and smoothies that are healthy and refresh visitors on a sunny day.</p> 

<p>An important tip when visiting KUDETA is to make a reservation in advance so you don\'t run out of seats and get the view you want.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alas Kedaton Monkey Forest',
                'slug' => Str::slug("Alas Kedaton Monkey Forest"),
                'destination_preference_id' => 5,
                'address' => 'Jl. Raya Alas Kedaton, Kukuh, Kec. Marga, Kabupaten Tabanan, Bali 82121',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.689631638977!2d115.15276537401792!3d-8.529482491513228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b164d2a8bb3%3A0x118812004a86244b!2sAlas%20Kedaton!5e0!3m2!1sid!2sid!4v1703573715311!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Alas Kedaton Monkey Forest is a captivating destination. This lush and sacred forest is home to a thriving community of long-tailed macaques and is distinguished by its ancient temple, providing visitors with a unique blend of natural beauty and cultural significance. The forest, surrounded by tall trees and thick foliage, creates a serene and mystical atmosphere. As visitors explore the pathways, they are greeted by the playful antics of the resident macaques. These monkeys, accustomed to human presence, often interact with visitors, adding an element of joy and spontaneity to the experience.</p>
<p>Visitors are encouraged to explore the temple grounds, where they can witness ceremonies and rituals conducted by the local Balinese community. The temple plays a crucial role in the religious practices of the area, and its unique setting within a monkey-filled forest adds an extra layer of cultural intrigue. Alas Kedaton Monkey Forest provides a peaceful retreat where visitors can connect with nature, observe wildlife, and gain insights into the spiritual practices of Bali. The coexistence of monkeys, temple, and flying foxes creates a harmonious blend of biodiversity and cultural heritage, making it a must-visit destination for those seeking a well-rounded and enriching experience on the island of Bali.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Puri Lumbung',
                'slug' => Str::slug("Puri Lumbung"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Puri Lumbung, Penarungan, Kec. Mengwi, Kabupaten Badung, Bali 80352',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.570666002971!2d115.20537667401811!3d-8.540993291502154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23c6d000fea71%3A0x306bb6e73041bb2e!2sLUMBUNGASRI%20%7C%20Puri%20Lumbung%20Restaurants%2C%20Cottage%20%26%20Waterpark!5e0!3m2!1sid!2sid!4v1703573776824!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Puri Lumbung Restaurant, Cottage & Waterpark Mengwi is an accommodation in a good location, precisely in Mengwi.</p>

<p>In addition to its strategic location, Puri Lumbung Restaurant, Cottage & Waterpark Mengwi is also an accommodation near Komune Beach Club about 15.75 km away and Sanur Port is about 15.97 km away.</p>

<p>Puri Lumbung Restaurant, Cottage & Waterpark Mengwi is a recommended accommodation for you, a backpacker who not only prioritizes budget, but also comfort when resting after a full day\'s adventure.</p>

<p>This accommodation is a great choice for you and a couple who want to enjoy a romantic holiday. Get an impressive experience with a couple by staying at Puri Lumbung Restaurant, Cottage & Waterpark Mengwi.</p>

<p>Puri Lumbung Restaurant, Cottage & Waterpark Mengwi is the perfect overnight place for those of you who are on vacation with the family. Enjoy all entertainment facilities for you and your family.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cemagi Beach',
                'slug' => Str::slug("Cemagi Beach"),
                'destination_preference_id' => 1,
                'address' => '9454+JM8, Sea, Jl. Pantai Mengening, Cemagi, Kec. Mengwi, Kabupaten Badung, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.4951625199114!2d115.10355427401946!3d-8.644365691402424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238109cd23bb1%3A0xecbf0b2a90fdc3d9!2sCemagi%20Beach!5e0!3m2!1sid!2sid!4v1703573758205!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => 'Cemagi Beach, nestled on the southwestern coast of Bali, is a pristine haven that embodies the essence of tranquility and natural beauty. Renowned for its unique black volcanic sand, the beach offers a serene escape from the more bustling tourist hotspots, allowing visitors to immerse themselves in a peaceful coastal retreat. The absence of large crowds creates an intimate atmosphere, enhanced by the rhythmic sounds of the waves and the gentle sea breeze. At the heart of the Cemagi experience stands Pura Gede Luhur Batungaus, a sacred sea temple perched on rocky cliffs, offering not only spiritual significance but also breathtaking panoramic views of the coastline. Surrounding the beach are traditional Balinese villages and verdant rice terraces, providing glimpses into the island\'s rich cultural tapestry. Cemagi Beach, with its unspoiled beauty and proximity to the bustling areas of Seminyak and Canggu, beckons to those seeking a quieter and more contemplative beach experience. As the sun sets over the Indian Ocean, casting vibrant hues across the sky, Cemagi unfolds its magical allure, inviting visitors to savor the simple yet profound pleasures of Bali\'s southwestern coastal charm.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tanjung Benoa Watersport',
                'slug' => Str::slug("Tanjung Benoa Watersport"),
                'destination_preference_id' => 7,
                'address' => 'Jl. Segara Geni No.3, Tj. Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80363',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.3227376825016!2d115.21641867402109!3d-8.755673891295135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd243b95e6548ab%3A0x56d51b1a39ad4e7e!2sTanjung%20Benoa%20Sport!5e0!3m2!1sid!2sid!4v1703573987735!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Tanjung Benoa, located on the southeastern coast of Bali, Indonesia, is renowned as a hub for thrilling water sports adventures. The calm and clear waters of Tanjung Benoa provide an ideal playground for a variety of water-based activities, catering to both adrenaline enthusiasts and those seeking a more relaxed aquatic experience. Tanjung Benoa is synonymous with an array of exciting water sports that cater to different levels of thrill-seekers. From high-speed jet skiing and parasailing, where participants soar high above the ocean, to the more leisurely banana boat rides and glass-bottom boat tours, visitors can choose from a plethora of activities that suit their preferences. The crystal-clear waters surrounding Tanjung Benoa offer excellent conditions for snorkeling and diving. The vibrant underwater world is teeming with colorful coral reefs and diverse marine life, making it an attractive destination for those eager to explore Bali\'s rich biodiversity beneath the surface. For the more adventurous, Tanjung Benoa offers innovative water sports experiences like flyboarding and water jetpacking. These activities allow participants to hover above the water\'s surface, propelled by powerful water jets, creating a sensation of weightlessness and excitement.</p>

<p>Tanjung Benoa is equipped with numerous water sports centers featuring professional instructors and guides. Whether you\'re a seasoned water sports enthusiast or a first-timer, the experienced instructors ensure a safe and enjoyable experience, providing guidance and ensuring proper equipment usage. The beach at Tanjung Benoa has a family-friendly atmosphere, making it suitable for visitors of all ages. Many water sports activities can be enjoyed by families, creating opportunities for shared adventures and lasting memories. Situated near popular tourist areas like Nusa Dua, Tanjung Benoa is easily accessible from various parts of Bali. The beach\'s proximity to major resorts and hotels makes it a convenient destination for those looking to add a dose of adventure to their beach holiday.</p>

<p>Tanjung Benoa\'s reputation as a water sports haven makes it a go-to destination for those seeking an adrenaline rush or a more laid-back aquatic experience. With its range of activities, professional facilities, and stunning coastal scenery, Tanjung Benoa stands as a dynamic and inviting coastal playground on the island of Bali.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ikan Restaurant & Bar',
                'slug' => Str::slug("Ikan Restaurant & Bar"),
                'destination_preference_id' => 6,
                'address' => 'The Westin Resort Nusa Dua Kawasan Pariwisata Nusa Dua, ITDC Lot No.N-3, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80363',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15771.610645500443!2d115.21367851180209!3d-8.79521515093171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2432136f20c05%3A0x2637b4d1fe52c7f1!2sIkan%20Restaurant%2C%20Lounge%20%26%20Bar%20at%20The%20Westin%20Resort%20Nusa%20Dua%2C%20Bali!5e0!3m2!1sid!2sid!4v1703573972087!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Nusa Dua might not be the first destination foodies are thinking about but this might change. Ikan Restaurant & Bar at The Westin Resort Nusa Dua Bali has recently changed to become a more upscale place to eat. The restaurant is right on the beach, making it a perfect place to go for a casual meal during the day or a nicer dinner at night.</p>

<p>Ikan Restaurant offers a variety of fresh seafood and Indonesian-inspired dishes, all masterfully created by Bali-born Chef Fajar Kurniawan Putra. Drawing from his experience with Indonesian, Chinese, and Western cuisine, Chef Fajar has created a casual, delicious, and refreshing easy-to-share menu that features seasonal and local ingredients.</p>

<p>The Bulung, a refreshing seaweed salad with seared tuna and kuah pindang (seasoned fish broth) scented dressing. This wonderful combination flawlessly demonstrates the oceanic identity of Bali. The briny sea fish and umami-packed seaweed salad with a melt-in-the-mouth slightly cooked tuna is a must-try. Since we are in Bali do not avoid the Jimbaran-style, freshly-caught Ikan Bakar, served with sayur urap and sambals. The grilled fish, marinated in Balinese spice paste, was a little crispy on the outside but not overdone in the middle. Perfect!</p>

<p>Satisfy your craving for something special by indulging in one of Ikan Bar\'s signature cocktails, created by Head Mixologist Marlon Hermanto. The Gunung Agung, inspired by the island\'s mighty volcano, is made with Nusa Cana Rum, Falernum and rosella soda. Another concoction to experience is the Italian Job, a refreshing mix of house-made limoncello, prosecco, green apple soda, and dill.</p>

<p>The recent revamp has set a new standard for Nusa Dua\'s venues. Ikan Restaurant & Bar at The Westin Resort Nusa Dua, Bali has become a destination where you can spend a day relaxing with friends and family. With its chill vibes, beautiful view of the ocean and fresh and authentic cuisine, it\'s easy to see why!</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Seawalker Bali at Grand Mirage Resort',
                'slug' => Str::slug("Seawalker Bali at Grand Mirage Resort"),
                'destination_preference_id' => 7,
                'address' => 'Jl. Pratama Jl. Nusa Dua No.74, Tj. Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80363',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.192144236458!2d115.21997942402132!3d-8.767985441283315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24081485bd801%3A0x7186afb21a268942!2sGrand%20Mirage%20Resort%20%26%20Thalasso%20Bali!5e0!3m2!1sid!2sid!4v1703573945466!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Seawalker Bali at Grand Mirage Resort offers a unique underwater experience for visitors to Bali, Indonesia. Seawalker is a water-based activity that allows participants to explore the ocean floor without the need for scuba diving certification. It\'s a great option for those who want to experience the underwater world but may not be comfortable with traditional scuba diving. Seawalker involves participants wearing a special helmet with a transparent visor, which allows them to breathe normally while walking on the ocean floor. The helmet is connected to an air supply on the surface, providing a continuous flow of fresh air. This enables participants to enjoy a close-up view of marine life and underwater scenery without the need for diving equipment. Seawalker is designed to be a safe and accessible underwater activity. Participants typically receive a brief training session before the experience, ensuring they are comfortable with the equipment and procedures. The presence of experienced guides and safety measures helps ensure a secure and enjoyable experience. During the Seawalker experience, participants can expect to encounter various marine life, colorful coral formations, and other underwater attractions. The calm waters around Nusa Dua make it an ideal location for this type of activity.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bali Buda Bukit',
                'slug' => Str::slug("Bali Buda Bukit"),
                'destination_preference_id' => 6,
                'address' => 'Jalan Raya Uluwatu Pecatu No.104, Ungasan, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.645905083763!2d115.15075967402204!3d-8.819296691233882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25b2d80ed42b7%3A0x70e5e9ee633650bb!2sBali%20Buda%20Bukit!5e0!3m2!1sid!2sid!4v1703574187353!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>The Bali Buda restaurant and store is began in 1994 with passion of bringing the best quality,organic food we could find to people looking for healthy ways to feed themselves and their families. we are switching over to using biodegradable packaging.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bhava Spa Kuta',
                'slug' => Str::slug("Bhava Spa Kuta"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Kartika Plaza Gg. Puspa Ayu No.99, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.597264734559!2d115.16711547402066!3d-8.729736991320136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2441f06ccdcc1%3A0xdcf14f77c3969652!2sBHAVA%20Spa%20at%20Amnaya%20Resort%20Kuta!5e0!3m2!1sid!2sid!4v1703574169683!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Staying in Kuta has its own advantages. Even though it is busy with tourists, this area has many facilities, from accommodation, bars and restaurants, to shopping centers. After activities, a row of spas await those who want to unwind and rest their feet. One of the best spa places in this area is Bhava Spa which is located at Amnaya Resort Kuta, Jalan Kartika Plaza, Gang Puspa Ayu No. 99. This place has six treatment rooms, each decorated with classic furniture and lighting that can make the body more relaxed.</p> 
<p>Here, guests can enjoy a variety of spa treatments rooted in holistic health traditions in Indonesia, China, Japan, Thailand and India. The aim is for the therapy to heal and refresh the body, mind and soul. One of the flagship spa packages is the Royal Palace Ceremony which is inspired by the traditional body care recipes of Javanese palace princesses. The ritual starts with a foot bath, then continues with a traditional Javanese massage, body scrub, body polish, and ends with a milk bath.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sanje Restaurant',
                'slug' => Str::slug("Sanje Restaurant"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Kayu Aya, Seminyak, Kec. Kuta, Kabupaten Badung, Bali',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15776.241172496524!2d115.1350822116577!3d-8.685816656344045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2471ac7083115%3A0x229ad697fe8c9938!2sSanje%20restaurant%20and%20lounge!5e0!3m2!1sid!2sid!4v1703574150562!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Sanje Restaurant: Opening to panoramic views of the beautiful Indian Ocean, this carefree alfresco restaurant sits above Seminyak Beach on one side, while spilling lazily onto the edge of a reflective pool on the other, all of which lends a comfortable, relaxed feel to your dining experience. The menu features delicious and healthy Mediterranean dishes, combined with local flavors that are as exciting as the culture. Sometimes all you want from life is a beautiful view, a delicious cocktail, and a lover to enjoy it with. Connected to the restaurant by twin humpback bridges, Sanje\'s breezy cocktail lounge at The Seminyak Resorts is the perfect place to stretch out on a rattan chair while enjoying a mojito or coconut martini with a backdrop of the Indian Ocean and another of Seminyak\'s legendary sunsets.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dream Land Beach',
                'slug' => Str::slug("Dream Land Beach"),
                'destination_preference_id' => 2,
                'address' => 'Jl. Pantai Balangan No.54, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.8589535191686!2d115.11519097402174!3d-8.79931919125311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2451ae55527e5%3A0x93773bcb87a92759!2sDreamland%20Beach!5e0!3m2!1sid!2sid!4v1703574131111!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Nestled on the southern coast of Bali, Dreamland Beach beckons with its breathtaking blend of natural beauty and vibrant energy. The golden sands stretch along the shoreline, embraced by rugged cliffs and lush greenery, creating an enchanting backdrop for beachgoers. As a haven for surf enthusiasts, Dreamland delivers consistent waves that attract both seasoned surfers and those eager to ride their first swell. The atmosphere here is relaxed, inviting visitors to bask in the warmth of the sun and absorb the rhythmic melody of the Indian Ocean. Numerous beach clubs and cafes dot the shoreline, offering not only refreshing beverages but also a front-row seat to the captivating coastal panorama. For those seeking elevated views, the clifftop paths provide a vantage point for capturing the essence of Dreamland\'s coastal charm. Easily accessible from popular hubs like Kuta and Seminyak, Dreamland Beach stands as a quintessential Bali destination, where the surf\'s energy meets the tranquility of the sea, creating an idyllic haven for sun-seekers and adventurers alike.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Suluban Beach',
                'slug' => Str::slug("Suluban Beach"),
                'destination_preference_id' => 2,
                'address' => 'Jl. Mamo No.211, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.6893630895006!2d115.08625087402191!3d-8.81522529123783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24f869cb87cb3%3A0x8a3600ee5a2574de!2sSuluban%20Beach%20View!5e0!3m2!1sid!2sid!4v1703574434758!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Suluban Beach, also known as Blue Point Beach, is a hidden gem tucked away beneath towering cliffs on the Bukit Peninsula of Bali, Indonesia. Known for its dramatic landscape and vibrant surf scene, Suluban Beach has become a popular destination for surfers, beach lovers, and those seeking a more secluded coastal experience. Suluban Beach is accessed through a narrow gap in the cliffside, creating a sense of discovery as visitors make their way down to the shore. The towering limestone cliffs that envelop the beach offer stunning panoramic views of the Indian Ocean, making the descent a scenic adventure in itself. Renowned for its challenging waves, Suluban Beach is a paradise for surfers. The consistent swells and powerful waves attract surf enthusiasts from around the world. The reef break creates barreling waves that provide an exhilarating surfing experience for both advanced surfers and those looking to catch their first wave. The beach is characterized by its unique caves and tide-dependent formations. During low tide, visitors can explore the intricate cave systems and marvel at the natural rock formations. The caves add an element of exploration and intrigue to Suluban Beach, creating opportunities for unique photographs.<p>
<p>While popular among surfers, Suluban Beach offers a more relaxed atmosphere compared to some of Bali\'s more crowded beaches. Visitors can unwind on the soft golden sand, listen to the rhythmic crashing of the waves, and enjoy the peaceful ambiance created by the surrounding cliffs. A row of charming beachfront warungs (small local eateries) line the shore, offering a variety of local and international cuisines. Visitors can enjoy a meal with a view, watching the surfers ride the waves while savoring fresh seafood or traditional Balinese dishes. Suluban Beach is a popular spot to witness spectacular sunsets. As the sun descends over the horizon, the cliffs and the expanse of the ocean are bathed in warm hues, creating a magical backdrop for those gathered on the beach. Suluban Beach\'s unique charm, with its cliff-enclosed beauty and dynamic surf scene, makes it a must-visit destination for those seeking a blend of adventure, natural splendor, and artistic vibes on the island of Bali.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sungai Ayung',
                'slug' => Str::slug("Sungai Ayung"),
                'destination_preference_id' => 3,
                'address' => 'Carangsari, Kec. Petang, Kabupaten Badung, Bali 80572',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.667407154566!2d115.2272365740166!3d-8.434284791605203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd223d6d43a08f5%3A0x4e0e2f56d2bb12e1!2sThe%20View%20Above%20Ayung%20River!5e0!3m2!1sid!2sid!4v1703574451462!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Sungai Ayung, Bali\'s longest river, flows gracefully through the heart of the island, originating in the northern mountains and journeying southward to meet the Badung Strait near Sanur. Celebrated for its breathtaking landscapes, Ayung River has become a premier destination for white-water rafting enthusiasts. The river\'s course unveils a mesmerizing tapestry of tropical beauty — dense jungles, terraced rice paddies, and towering canyon walls. White-water rafting on Ayung offers an exhilarating adventure, with rapids suitable for both beginners and experienced rafters. Beyond its adventurous appeal, the riverbanks showcase Bali\'s rich biodiversity, adorned with vibrant flora and occasional wildlife sightings. Sungai Ayung is not only a playground for thrill-seekers but also holds cultural significance, intertwined with Balinese traditions and marked by temples dotting its surroundings. As conservation efforts gain momentum, there\'s a growing commitment to preserving Ayung River\'s ecosystem, ensuring that the unique blend of adventure and natural splendor remains accessible to future generations. Easily reachable from popular tourist hubs like Ubud, Sungai Ayung stands as a testament to Bali\'s diverse beauty, inviting travelers to embark on an unforgettable journey through its cascading waters and scenic</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Finns Beach Club',
                'slug' => Str::slug("Finns Beach Club"),
                'destination_preference_id' => 6,
                'address' => 'Jl. Pantai Berawa No.99, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.260421773371!2d115.13682347401989!3d-8.666765191380835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd247e34ed21a49%3A0x4993b9f229a9b15f!2sFinns%20Beach%20Club!5e0!3m2!1sid!2sid!4v1703574472200!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Finns Beach Club Bali is a hangout place that offers the charm of Berawa Beach from the Semara Luxury Villa Resort complex. This place is dominated by bamboo buildings, giving it a traditional feel but with a more modern concept. There are many activities you can do while at Finn\'s Beach Club Bali. Starting from sunbathing on the beach, playing volleyball or bocce (a typical Italian ball game) with friends. Coming in the morning or afternoon is not a problem. But if you come in the afternoon, don\'t miss the beautiful sunset at Finn\'s Beach Club. This moment felt even more amazing when the lights started to be turned on, giving an exotic feel. Visitors can satisfy their desire to take photos or be satisfied just by enjoying the cool breeze in a romantic atmosphere. You are free to choose a seat that has a variety of different viewing angles for dusk hunting. The Sunset Lounge on the second floor of Finns Beach Club has one of the best views.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Grand Zero Kuta',
                'slug' => Str::slug("Grand Zero Kuta"),
                'destination_preference_id' => 4,
                'address' => 'Jl. Raya Legian, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.728935239953!2d115.17191507402059!3d-8.717269791332152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246b9a26f15bb%3A0xc500c6afd79e4c1b!2sTugu%20Peringatan%20Bom%20Bali!5e0!3m2!1sid!2sid!4v1703574504030!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'description' => '<p>Nestled in the heart of the vibrant Kuta district in Bali, the Grand Zero monument stands as a poignant symbol, commemorating a tragic event in Bali\'s history. This unassuming memorial, often overlooked by the hustle and bustle of modern life, tells a somber tale that is integral to the island\'s resilience and spirit. The Grand Zero monument marks the site of the tragic Kuta bombings that occurred on October 12, 2002. This devastating event claimed the lives of many innocent people and left an indelible mark on Bali\'s history. The monument serves as a solemn reminder of the need for unity, resilience, and remembrance.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kuta Beach',
                'slug' => Str::slug("Kuta Beach"),
                'destination_preference_id' => 1,
                'address' => 'Jl. Pantai Kuta No.32, Legian, Badung, Kabupaten Badung, Bali',
                'map' => 'Jl. Pantai Kuta No.32, Legian, Badung, Kabupaten Badung, Bali',
                'description' => '<p>Kuta Beach is a world-renowned tropical paradise situated on the southern coast of Bali, Indonesia. Known for its stunning natural beauty, vibrant atmosphere, and world-class surf, Kuta Beach has long been a favorite destination for travelers seeking sun, sand, and excitement. The beach stretches for approximately 2.5 kilometers along the Indian Ocean, featuring golden sands that gently slope into the azure waters. Palm trees sway in the warm breeze, providing a picturesque backdrop to the breathtaking sunsets that paint the sky with a myriad of colors. One of the key attractions of Kuta Beach is its legendary surf breaks, making it a haven for surf enthusiasts from around the globe. Whether you\'re a seasoned surfer or a beginner eager to catch your first wave, the consistent and reliable surf conditions make Kuta Beach an ideal spot to ride the waves. Beyond the surf, Kuta Beach offers a lively and eclectic atmosphere. The shoreline is dotted with vibrant beach bars, cafes, and restaurants where visitors can indulge in delicious local cuisine or sip on refreshing tropical beverages. As the sun sets, the beach comes alive with a lively nightlife scene, offering a mix of beach parties, live music, and cultural performances. For those seeking relaxation, Kuta Beach provides ample opportunities to unwind. Visitors can bask in the sun, take leisurely walks along the shoreline, or indulge in rejuvenating spa treatments offered by beachside resorts. The beach is also a popular spot for traditional Balinese massages, allowing visitors to experience the therapeutic touch of the island\'s rich cultural heritage. Kuta Beach is not just a place; it\'s an experience that seamlessly blends natural beauty, water sports, vibrant culture, and a laid-back lifestyle. Whether you\'re seeking adventure, relaxation, or a bit of both, Kuta Beach invites you to immerse yourself in the enchanting charm of this tropical paradise.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kuta Traditional Market',
                'slug' => Str::slug("Kuta Traditional Market"),
                'destination_preference_id' => 8,
                'address' => '',
                'map' => '',
                'description' => '<p>Kuta Traditional Market is a great place to explore and shop for traditional Balinese crafts and souvenirs. Items such as batik fabrics, wood carvings, sarongs, handmade jewelry, and traditional Balinese masks are commonly found here. Some traditional markets also feature local food stalls or warungs where visitors can sample authentic Balinese cuisine. This provides an opportunity to taste local flavors and experience the culinary delights of Bali. Traditional markets are not only places for shopping but also hubs of cultural exchange. Visitors can interact with local vendors, observe traditional Balinese craftsmanship, and get a glimpse into the daily life of the community. Kuta Traditional Market is often conveniently located, making it accessible for tourists exploring the popular attractions in the Kuta area. It\'s a place where visitors can take a break from the beach and commercial areas to immerse themselves in the local culture.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
