<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from_id'=>1,
            'to_id'=>2,
            'content'=> 'Hola Liz ¿Cómo estás?'
        ]);
        Message::create([
            'from_id'=>1,
            'to_id'=>3,
            'content'=> 'Hola Jaimito ¿Cómo estás?'
        ]);

        Message::create([
            'from_id'=>2,
            'to_id'=>1,
            'content'=> 'Bien ¿Y tu Oscar?'
        ]);
        Message::create([
            'from_id'=>2,
            'to_id'=>3,
            'content'=> 'Bien ¿Y tu Jaimito?'
        ]);
       

        Message::create([
            'from_id'=>3,
            'to_id'=>1,
            'content'=>'¿Qué tal? Oscar Soy jaime'
        ]);
        Message::create([
            'from_id'=>3,
            'to_id'=>2,
            'content'=>'¿Qué tal? Liz Soy jaime'
        ]);
    }
    
}
