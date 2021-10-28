<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        var_dump("resource seed");


        $hides = array(
            "Coarse Leather",
            "Rugged Leather",
            "Layered Leather",
            "Infused Leather",
            "Runic Leather",
            "Ragehide",
            "Scaly Hide",
            "Shadowfur",
            "Brightscale Hide",
            "Shifthide",
            "Smolderhide",
            "Scarhide",
        );

        $refinedWoods = [
            "Timber",
            "Lumber",
            "Wyrdwood Planks",
            "Ironwood Planks",
            "Glittering Ebony",
            "Petrified Wood",
            "Whisperwood",
            "Quillbark",
            "Ebonwood",
            "Wildwood",
            "Barbvine",
        ];

        $resources = [
            // wood
            ['name' => 'Green Wood', 'tier' => 1],
            ['name' => 'Aged Wood', 'tier' => 2],
            ['name' => 'Petrified Wood', 'tier' => 2],
            ['name' => 'Whisperwood', 'tier' => 3],
            ['name' => 'Wyrdwood', 'tier' => 4],
            ['name' => 'Quillbark', 'tier' => 4],
            ['name' => 'Ebonwood', 'tier' => 4],
            ['name' => 'Ironwood', 'tier' => 5],
            ['name' => 'Wildwood', 'tier' => 5],
            ['name' => 'Barbvine', 'tier' => 5],

            // refined woods
            ['name' => 'Timber', 'tier' => 2],
            ['name' => 'Lumber', 'tier' => 3],
            ['name' => 'Wyrdwood Planks', 'tier' => 4],
            ['name' => 'Ironwood Planks', 'tier' => 5],
            ['name' => 'Glittering Ebony', 'tier' => 5],
            
            // fibers
            ['name' => 'Fibers', 'tier' => 1],
            ['name' => 'Silk Threads', 'tier' => 4],
            ['name' => 'Wirefiber', 'tier' => 5],

            // ores
            ['name' => 'Iron ore', 'tier' => 1],
            ['name' => 'Fae Iron', 'tier' => 2],
            ['name' => 'Starmetal Ore', 'tier' => 4],
            ['name' => 'Azurite Chunk', 'tier' => 4],
            ['name' => 'Orichalcum Ore', 'tier' => 5],
            ['name' => 'Cinnabar', 'tier' => 5],

            ['name' => 'Silver ore', 'tier' => 2],
            ['name' => 'Gold ore', 'tier' => 3],
            ['name' => 'Platinum ore', 'tier' => 4],

            // ingots

            ['name' => 'Iron Ingot', 'tier' => 2],
            ['name' => 'Steel Ingot', 'tier' => 3],
            ['name' => 'Starmetal Ingot', 'tier' => 4],
            ['name' => 'Orichalcum Ingot', 'tier' => 5],
            ['name' => 'Asmodeum', 'tier' => 5],

            
            ['name' => 'Voidmetal', 'tier' => 3],


            // stone n stuff
            ['name' => 'Stone', 'tier' => 1],
            ['name' => 'Lodestone', 'tier' => 4],
            ['name' => 'Oil', 'tier' => 1],
            ['name' => 'Flint', 'tier' => 1],
            
            // hides
            ['name' => 'Rawhide', 'tier' => 1],
            ['name' => 'Ragehide', 'tier' => 2],
            ['name' => 'Fur', 'tier' => 3],
            ['name' => 'Scaly Hide', 'tier' => 3],
            ['name' => 'Shadowfur', 'tier' => 3],
            ['name' => 'Thick Hide', 'tier' => 4],
            ['name' => 'Thick Fur', 'tier' => 4],
            ['name' => 'Brightscale Hide', 'tier' => 4],
            ['name' => 'Shifthide', 'tier' => 4],
            ['name' => 'Iron Hide', 'tier' => 5],
            ['name' => 'Infused Fur', 'tier' => 5],
            ['name' => 'Smolderhide', 'tier' => 5],
            ['name' => 'Scarhide', 'tier' => 5],

            // refined leather
            ['name' => 'Coarse leather', 'tier' => 2],
            ['name' => 'Rugged leather', 'tier' => 3],
            ['name' => 'Layered leather', 'tier' => 4],
            ['name' => 'Infused leather', 'tier' => 5],
            ['name' => 'Runic leather', 'tier' => 5],


            // tools

            // axes
            [
                'name' => 'Iron Logging Axe', 
                'tier' => 2,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Fae Iron','Iron ingot'),
                        "amount" => 12,
                        )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Steel Logging Axe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Steel Ingot', 'Voidmetal'),
                        "amount" => 13
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => $refinedWoods,
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Starmetal Logging Axe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Starmetal Ingot', 'Azurite Chunk'),
                        "amount" => 14
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Orichalcum Logging Axe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Orichalcum Ingot', 'Cinnbar'),
                        "amount" => 15
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],

             // Pickaxes
             [
                'name' => 'Iron Mining Pickaxe', 
                'tier' => 2,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Fae Iron','Iron ingot'),
                        "amount" => 12,
                        )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Steel Mining Pickaxe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Steel Ingot', 'Voidmetal'),
                        "amount" => 13
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Starmetal Mining Pickaxe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Starmetal Ingot', 'Azurite Chunk'),
                        "amount" => 14
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],
            [
                'name' => 'Orichalcum Mining Pickaxe', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Orichalcum Ingot', 'Cinnbar'),
                        "amount" => 15
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 3
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 2
                    )
                ),
            ],

             // Skinning knife
             [
                'name' => 'Iron Skinning Knife', 
                'tier' => 2,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Fae Iron','Iron ingot'),
                        "amount" => 7,
                        )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Steel Skinning Knife', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Steel Ingot', 'Voidmetal'),
                        "amount" => 8
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Starmetal Skinning Knife', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Starmetal Ingot', 'Azurite Chunk'),
                        "amount" => 9
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Orichalcum Skinning Knife', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Orichalcum Ingot', 'Cinnbar'),
                        "amount" => 10
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],

             // Sickle
             [
                'name' => 'Iron Harvesting Sickle', 
                'tier' => 2,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Fae Iron','Iron ingot'),
                        "amount" => 7,
                        )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Steel Harvesting Sickle', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Steel Ingot', 'Voidmetal'),
                        "amount" => 8
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Starmetal Harvesting Sickle', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Starmetal Ingot', 'Azurite Chunk'),
                        "amount" => 9
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
            [
                'name' => 'Orichalcum Harvesting Sickle', 
                'tier' => 3,
                'slot_1' => json_encode(
                    array(
                        "ingredients" => array('Orichalcum Ingot', 'Cinnbar'),
                        "amount" => 10
                    )
                ),
                'slot_2' => json_encode(
                    array(
                        "ingredients" => array($refinedWoods),
                        "amount" => 2
                    )
                ),
                'slot_3' => json_encode(
                    array(
                        "ingredients" => array($hides),
                        "amount" => 1
                    )
                ),
            ],
        ];

        foreach($resources as $resourse){
            DB::table('resources')->insert($resourse);
        }
    }
}
