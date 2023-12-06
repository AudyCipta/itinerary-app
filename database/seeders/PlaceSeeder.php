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
                'description' => 'Balangan Beach hidden between two steeply clift, Balangan Beach is one of the beautiful beaches of many beautiful beaches at the southern part of Bali Island. Its location which is close to Dreamland beaches and Uluwatu Temple so that it could be an alternative attractions you can visit.
The entrance access to the beach in the area of Pecatu is not so difficult because stairs have been provided which are wide enough for tourist. The atmosphere is still very natural and it\'s cool, moreover it is not much visited tourist. For surfers, this beach is very famous and a favorite spot for surfing besides Dreamland beach.
Balangan beach with coastline approximately 1 km long north facing to north, so the activity of I Gusti Ngurah Rai International Airport is visible from here in the distance. In the eastern part bounded by high cliffs with indentations underneath because eroded by waves. In the western side, the shore is bounded by high cliffs filled with plants, especially palm trees, but it also contains some sort of cottages to enjoy the beaches from the height. The Absorbing thing is when the sea condition is low tide from this beach we could lead to Dreamland Beach by walking along the west shore.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Garuda Kencana Wisnu',
                'slug' => Str::slug('Garuda Kencana Wisnu'),
                'destination_preference_id' => 4,
                'description' => 'Garuda Wisnu Kencana (GWK) is a cultural park located on the southern part of the island of Bali, Indonesia. The park is situated on a limestone hill in the southern part of Bali, near the town of Ungasan. The main attraction of GWK is the ongoing construction of a gigantic statue depicting the Hindu god Vishnu riding on the mythical bird Garuda. In addition to the statue, Garuda Wisnu Kencana also features a cultural park that showcases traditional Balinese dance performances, exhibitions, and various cultural activities. The park aims to promote and preserve Indonesian arts and culture.
GWK often hosts events, concerts, and cultural performances, making it a popular destination for both tourists and locals. The spacious area and beautiful surroundings make it a unique venue for various activities.
Due to its elevated location, GWK offers stunning panoramic views of the surrounding area, including the Indian Ocean. Visitors can enjoy these views while exploring the park.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kedongan Seafood',
                'slug' => Str::slug('Kedongan Seafood'),
                'destination_preference_id' => 6,
                'description' => 'Kedonganan is a coastal village in Bali, Indonesia, known for its seafood market and beachfront restaurants. One of the notable features in Kedonganan is the Kedonganan Fish Market, where you can find a variety of fresh seafood. The market is often bustling with activity as fishermen bring in their catches, and local vendors display an array of seafood for sale. Kedonganan Fish Market offers a wide selection of fresh seafood, including various fish, prawns, crabs, clams, and more. You can choose your preferred seafood, and many restaurants in the area allow you to select the items you want to be cooked. Along the beach, you\'ll find numerous seafood stalls and restaurants offering grilled seafood dishes. Grilled fish, prawns, squid, and other delights are often prepared with local spices and served with traditional condiments.
Many seafood restaurants in Kedonganan are situated right on the beach, providing a relaxed and picturesque setting. Visitors can enjoy their meals with views of the ocean and beautiful sunsets. One of the unique aspects of dining in Kedonganan is the cook-to-order service. After selecting your preferred seafood at the market, you can take it to one of the nearby restaurants, and they will prepare it according to your liking. Kedonganan offers a more local and less touristy atmosphere compared to some other parts of Bali. It\'s a great place to experience authentic Balinese seafood dining.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Uluwatu Temple',
                'slug' => Str::slug('Uluwatu Temple'),
                'destination_preference_id' => 5,
                'description' => 'Uluwatu Temple is one of Bali\'s most iconic sea temples, situated on the southernmost tip of the island\'s Bukit Peninsula. Perched on a steep cliff about 70 meters above the Indian Ocean, Uluwatu Temple is renowned for its stunning location, Balinese architecture, and traditional Kecak dance performances. Uluwatu Temple is located in Pecatu Village, South Kuta, Badung Regency, Bali. The temple sits atop a dramatic limestone cliff, providing panoramic views of the surrounding ocean. Uluwatu Temple showcases traditional Balinese architecture, with intricately carved stone gateways (candi bentar) and sculptures. The temple is dedicated to Sang Hyang Widhi Wasa in his manifestation as Rudra, the Balinese Hindu deity of the wind and storms. The temple offers breathtaking views of the Indian Ocean, especially during sunset. Visitors often gather at the cliff\'s edge to witness the sun setting over the water, creating a magical atmosphere.
Uluwatu Temple is known for its nightly Kecak dance performances. The Kecak dance is a traditional Balinese dance that involves a large group of male performers chanting "cak" in unison, creating a unique and rhythmic sound. The dance typically depicts episodes from the Ramayana epic. Uluwatu Temple is an active site for Balinese ceremonies, especially during important Hindu festivals. Visitors may have the opportunity to witness traditional rituals and ceremonies if they coincide with their visit.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nyang-nyang Beach',
                'slug' => Str::slug('Nyang-nyang Beach'),
                'destination_preference_id' => 1,
                'description' => 'Nyang Nyang Beach is a beautiful and relatively secluded beach located on the southwestern Bukit Peninsula of Bali, Indonesia. Nyang Nyang Beach is situated in the Pecatu area, near Uluwatu. It\'s part of the larger Bukit Peninsula, known for its stunning cliffs, hidden beaches, and world-class surf breaks. Getting to Nyang Nyang Beach involves a bit of an adventure. The access road to the beach is unpaved, and visitors need to traverse through a lush, green landscape before reaching the shore. The journey adds to the sense of remoteness and tranquility. Nyang Nyang is considered one of Bali\'s hidden gems, offering a peaceful and less crowded environment compared to some of the more popular beaches. Its secluded location attracts those seeking a serene and unspoiled coastal experience. The beach itself features a long stretch of white sand, bordered by cliffs and turquoise waters. It\'s an excellent spot for a leisurely walk along the shoreline or for simply relaxing and enjoying the natural beauty.
While not as well-known as some other surf spots in Bali, Nyang Nyang Beach can offer decent waves for surfing. It\'s often visited by surfers looking for a less crowded alternative. At the eastern end of the beach, there\'s a shipwreck that adds a unique touch to the scenery. The wreckage provides an interesting backdrop for photos and exploration. The beach offers spectacular sunset views over the Indian Ocean, making it a great spot to unwind in the late afternoon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nung-nung Waterfall',
                'slug' => Str::slug('Nung-nung Waterfall'),
                'destination_preference_id' => 3,
                'description' => 'Located in the center of Pelaga Village, Petang District, Badung Regency, you will find a popular natural tourist destination, namely Nungnung Waterfall. Nungnung Waterfall is not just an ordinary natural destination. This place is a symbol of Bali\'s unspoiled and pristine natural beauty, hiding behind a stretch of green and lush tropical forest. Watching this approximately 50 meter high waterfall fall thunderously into the natural pool below, surrounded by boulders and tall trees, is a truly enchanting experience that you can\'t find anywhere else. The roar of the natural destination can be heard as soon as you arrive at the vehicle parking area. To reach the bottom, each visitor needs to go through several paths and around 400 steps.
To ensure your comfort when visiting Nungnung Waterfall, as part of your Bali tour, here are some items you should bring: Raincoat considering that this waterfall is located in the highlands, the chance of rain is quite high, especially in the afternoon. Drinking water and snacks, Change of clothes, Plastic bag to wrap your wet clothes, Plastic protector for your cellphone, camera and wallet, Trekking shoes or sandals for comfort when climbing and descending the stairs',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sangeh Monkey Forest',
                'slug' => Str::slug('Sangeh Monkey Forest'),
                'destination_preference_id' => 3,
                'description' => 'Sangeh Monkey Forest is a natural sanctuary located in the village of Sangeh, in the Badung Regency of Bali, Indonesia. It is known for its sacred and dense nutmeg forest inhabited by a large population of Balinese long-tailed macaques. The main attraction of Sangeh Monkey Forest is its nutmeg (Pala) forest. The tall nutmeg trees create a unique and serene environment, providing a natural habitat for the resident macaques.Sangeh is considered a sacred site, and the monkeys living in the forest are believed to be sacred guardians of the temple within the forest. The area is also home to Pura Bukit Sari, a small temple surrounded by lush greenery. The forest is home to a large population of long-tailed macaques, and visitors can observe these playful and curious primates as they move through the trees and interact with each other.
Visitors to Sangeh Monkey Forest often combine their visit with exploring Pura Bukit Sari. The temple features moss-covered stone structures and adds a cultural and spiritual dimension to the natural setting. Sangeh offers walking paths through the forest, allowing visitors to enjoy a leisurely stroll while observing the monkeys and appreciating the natural beauty of the area. Efforts are made to preserve the natural habitat and protect the macaque population. The forest is managed to maintain a healthy ecosystem for both the monkeys and the diverse plant life. Visitors are advised to follow guidelines provided by the local authorities to ensure the safety of both humans and monkeys. Feeding the monkeys is generally discouraged to prevent disrupting their natural behaviors.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Waterboom Bali',
                'slug' => Str::slug('Waterboom Bali'),
                'destination_preference_id' => 7,
                'description' => 'Waterbom Bali is a popular water park located in Kuta, Bali, Indonesia. It is known for its extensive range of water attractions, slides, and family-friendly activities. The water park boasts a variety of water slides and attractions suitable for visitors of all ages. From thrilling slides for adrenaline seekers to more relaxed attractions, Waterbom Bali offers a diverse range of experiences. For a more leisurely experience, visitors can enjoy the lazy river, where they can float along in a tube and take in the surroundings. Waterbom Bali features a FlowRider, providing an opportunity for visitors to try their hand at bodyboarding and surfing in a controlled environment. Funtastic is an area specifically designed for younger visitors, offering a safe and enjoyable space for kids to play with interactive water features. Waterbom Bali provides dining options within the park, including cafes and snack bars. Additionally, there are facilities such as changing rooms, lockers, and sun loungers for visitors\' convenience. Waterbom Bali is known for its commitment to sustainability and environmental responsibility. The park has implemented various eco-friendly initiatives, such as using renewable energy sources and minimizing its environmental impact.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Old\'s Man',
                'slug' => Str::slug("Old's Man"),
                'destination_preference_id' => 6,
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
