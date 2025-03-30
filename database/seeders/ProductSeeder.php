<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Tuborg Classic 0,5 l',
            'description' => '',
            'price' => 65.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'blue',
        ]);

        Product::create([
            'name' => 'Coca Cola 0,5 l',
            'description' => '',
            'price' => 46.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Parma',
            'description' => 'Ost, tomatsauce, parmaskinke, ruccula, grøn pesto',
            'price' => 125.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'blue',
        ]);

        Product::create([
            'name' => 'Pizza Hawaii',
            'description' => 'Ost, tomatsauce, skinke, ananas',
            'price' => 95.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Burger special',
            'description' => 'Oksekød, salat, tomat, agurk, løg, ost, syltede løg, bacon, mango chutney',
            'price' => 145.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'blue',
        ]);

        Product::create([
            'name' => 'Vegetarlasagne',
            'description' => 'Aubergine, squash, røde linser, tomat',
            'price' => 86.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'orange',
        ]);

        Product::create([
            'name' => 'Pita kebab',
            'description' => 'Salat, ost, tomat, agurk, majs, ærter, dressing, hvidløg, chilli',
            'price' => 75.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Heineken 0,33 l',
            'description' => '',
            'price' => 58.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pommes frites',
            'description' => 'Dyppelse købes særskilt',
            'price' => 35.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Carlsberg Pilsner 0,5 l',
            'description' => '',
            'price' => 62.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Fanta Orange 0,5 l',
            'description' => '',
            'price' => 44.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Margherita',
            'description' => 'Ost, tomatsauce',
            'price' => 85.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Pepperoni',
            'description' => 'Ost, tomatsauce, pepperoni',
            'price' => 105.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Cheeseburger',
            'description' => 'Oksekød, ost, ketchup, sennep, løg',
            'price' => 115.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Grøntsagstærte',
            'description' => 'Broccoli, gulerødder, spinat, æg',
            'price' => 78.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Durum kebab',
            'description' => 'Salat, ost, tomat, agurk, majs, ærter, dressing, hvidløg, chilli',
            'price' => 80.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Løgringe (8 stk.)',
            'description' => 'Sprøde løgringe',
            'price' => 40.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Royal Export 0,5 l',
            'description' => '',
            'price' => 68.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Sprite 0,5 l',
            'description' => '',
            'price' => 45.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Capricciosa',
            'description' => 'Ost, tomatsauce, skinke, champignon',
            'price' => 110.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Dobbelt Burger',
            'description' => 'Dobbelt oksekød, salat, tomat, agurk, løg, ost, dressing',
            'price' => 165.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Svampetærte',
            'description' => 'Blandede svampe, løg, fløde',
            'price' => 82.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Kyllinge pita',
            'description' => 'Kylling, salat, tomat, agurk, dressing',
            'price' => 78.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Mozzarella sticks (6 stk.)',
            'description' => 'Panerede mozzarella sticks',
            'price' => 45.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Heineken 0,33 l',
            'description' => '',
            'price' => 58.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pepsi Max 0,5 l',
            'description' => '',
            'price' => 43.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Mexicana',
            'description' => 'Ost, tomatsauce, oksekød, jalapeños, løg',
            'price' => 115.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Stærk',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Triple Burger',
            'description' => 'Triple oksekød, salat, tomat, agurk, løg, ost, dressing',
            'price' => 185.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Spinattærte',
            'description' => 'Spinat, fetaost, hvidløg',
            'price' => 80.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Falafel pita',
            'description' => 'Falafel, salat, tomat, agurk, tahini dressing',
            'price' => 72.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'orange',
        ]);

        Product::create([
            'name' => 'Chili cheese tops (6 stk.)',
            'description' => 'Panerede chili og ost',
            'price' => 48.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Stærk',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Somersby Cider 0,33 l (Pære)',
            'description' => '',
            'price' => 55.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => '7-Up 0,5 l',
            'description' => '',
            'price' => 44.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Diavola',
            'description' => 'Ost, tomatsauce, stærk salami, chili',
            'price' => 120.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Stærk',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Kyllingeburger',
            'description' => 'Grillet kylling, salat, tomat, agurk, karrydressing',
            'price' => 135.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Broccolitærte',
            'description' => 'Broccoli, cheddarost, muskatnød',
            'price' => 79.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Halloumi pita',
            'description' => 'Grillet halloumi, salat, peberfrugt, tzatziki',
            'price' => 85.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'orange',
        ]);

        Product::create([
            'name' => 'Nuggets (9 stk.)',
            'description' => 'Panerede kyllingestykker',
            'price' => 52.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Mokaï Cider 0,33 l (Hyldeblomst)',
            'description' => '',
            'price' => 57.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Danskvand 0,5 l',
            'description' => '',
            'price' => 30.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Quattro Stagioni',
            'description' => 'Ost, tomatsauce, skinke, champignon, artiskok, oliven',
            'price' => 112.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Double Cheeseburger',
            'description' => 'Dobbelt oksekød, ost, ketchup, sennep, løg',
            'price' => 135.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Caesarsalat',
            'description' => 'Romainesalat, kylling, croutons, parmesan, dressing',
            'price' => 92.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Sund',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Chicken wings (12 stk.)',
            'description' => 'Krydrede kyllingevinger',
            'price' => 98.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Americano',
            'description' => 'Espresso med varmt vand',
            'price' => 32.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Mocaccino',
            'description' => 'Espresso med chokolade og mælk',
            'price' => 40.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);

        Product::create([
            'name' => 'Pizza Marinara',
            'description' => 'Tomatsauce, hvidløg, oregano',
            'price' => 75.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Vegatar',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Bacon Double Cheeseburger',
            'description' => 'Dobbelt oksekød, ost, bacon, ketchup, sennep, løg',
            'price' => 145.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Populær',
            'tag_color' => 'red',
        ]);

        Product::create([
            'name' => 'Tunsalat',
            'description' => 'Tun, salat, tomat, agurk, dressing',
            'price' => 90.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => 'Sund',
            'tag_color' => 'green',
        ]);

        Product::create([
            'name' => 'Onion Rings (12 stk.)',
            'description' => 'Sprøde løgringe',
            'price' => 70.00,
            'currency' => 'DKK',
            'vat_rate' => 25.00,
            'tag_name' => null,
            'tag_color' => null,
        ]);
    }
}
