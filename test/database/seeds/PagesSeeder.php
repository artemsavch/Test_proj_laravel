<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([

            [
                'name'=>'About our Company',
                'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Vel facilisis volutpat est velit egestas dui id ornare arcu. Dictum fusce ut placerat orci nulla pellentesque dignissim.
                         Turpis egestas integer eget aliquet nibh praesent tristique magna sit. Elementum nibh tellus molestie nunc non blandit massa enim.
                         Vitae elementum curabitur vitae nunc sed velit dignissim sodales ut. Id nibh tortor id aliquet lectus proin nibh.
                         Vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Nunc sed augue lacus viverra vitae congue eu consequat.
                         Nunc congue nisi vitae suscipit tellus mauris. Non nisi est sit amet facilisis magna etiam tempor orci.
                         Leo duis ut diam quam nulla porttitor massa. Eleifend mi in nulla posuere sollicitudin aliquam.
                         Mattis enim ut tellus elementum sagittis vitae. Amet commodo nulla facilisi nullam vehicula. At elementum eu facilisis sed odio morbi.
                         Feugiat in fermentum posuere urna nec tincidunt. Etiam erat velit scelerisque in dictum non consectetur.
                         Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Libero justo laoreet sit amet cursus sit.
                         Elementum facilisis leo vel fringilla. Non tellus orci ac auctor augue mauris augue neque gravida.
                         Aliquam nulla facilisi cras fermentum odio eu feugiat pretium nibh. Cursus vitae congue mauris rhoncus aenean.
                         Purus ut faucibus pulvinar elementum integer enim neque volutpat ac. Vestibulum mattis ullamcorper velit sed ullamcorper morbi.
                         Nunc sed blandit libero volutpat sed. Justo nec ultrices dui sapien eget. Lectus sit amet est placerat. At elementum eu facilisis sed.
                         Quisque egestas diam in arcu cursus euismod quis viverra. At varius vel pharetra vel turpis nunc eget lorem dolor.
                         Lacus viverra vitae congue eu. In nisl nisi scelerisque eu ultrices vitae auctor eu. Morbi non arcu risus quis varius quam.
                         Integer vitae justo eget magna fermentum iaculis. Tortor dignissim convallis aenean et.
                         Sit amet nisl suscipit adipiscing bibendum est ultricies integer quis. Justo eget magna fermentum iaculis eu non. Dictum fusce ut placerat orci.
                         Malesuada proin libero nunc consequat interdum. Gravida neque convallis a cras semper auctor neque vitae.
                         Eu scelerisque felis imperdiet proin fermentum leo vel. Ac turpis egestas maecenas pharetra convallis posuere.
                         Iaculis eu non diam phasellus vestibulum. Augue interdum velit euismod in. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus in.
                         Egestas integer eget aliquet nibh praesent. Proin fermentum leo vel orci porta non pulvinar neque laoreet. Risus quis varius quam quisque id.
                         Morbi tristique senectus et netus et malesuada fames ac. In eu mi bibendum neque egestas congue quisque egestas.
                         Id aliquet lectus proin nibh. Diam sollicitudin tempor id eu nisl. Etiam erat velit scelerisque in dictum.
                         Viverra aliquet eget sit amet tellus cras adipiscing enim eu. In aliquam sem fringilla ut morbi tincidunt.
                         Diam volutpat commodo sed egestas egestas fringilla phasellus. Nunc mi ipsum faucibus vitae aliquet nec.
                         Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Egestas diam in arcu cursus. Quam quisque id diam vel quam elementum.
                         Amet venenatis urna cursus eget. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Aliquam ut porttitor leo a diam sollicitudin.
                         Amet est placerat in egestas. Enim nunc faucibus a pellentesque sit amet porttitor eget dolor.
                         Odio morbi quis commodo odio aenean sed adipiscing diam donec. Ipsum dolor sit amet consectetur adipiscing. Id porta nibh venenatis cras.
                         Eu mi bibendum neque egestas.',
                'alias'=>'about'
            ]

        ]);
    }
}
