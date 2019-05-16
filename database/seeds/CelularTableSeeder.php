<?php

use Illuminate\Database\Seeder;

class CelularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $celulares = [
        	
        	[

        		'marca' => 'Samsung',
        		'color' => 'Azul',
        		'precio' => 4526,
        		'descripcion' => 'Caracteristicas del movil.'

        	],

        	[

        		'marca' => 'Motorola',
        		'color' => 'Negro',
        		'precio' => 5698,
        		'descripcion' => 'A diferencia del Moto G6, el Moto G7 ahora tiene una ceja tipo gota que lo hace verse más moderno que antes y hace que el lector de huellas se traslade a la parte trasera del teléfono, justo donde está el logo de Motorola.'

        	],

        	[

        		'marca' => 'Apple',
        		'color' => 'Rosa',
        		'precio' => 10286,
        		'descripcion' => ' iPhone es un teléfono móvil con herramientas multimedia, desarrollado por la empresa estadounidense Apple Inc. '

        	],

        	[

        		'marca' => 'Nokia',
        		'color' => 'Blanco',
        		'precio' => 6987,
        		'descripcion' => 'Los teléfonos de Nokia se han distinguido siempre por ofrecer dispositivos fáciles de usar y con un diseño suave y cuidado. Tanto en la etapa pre-smartphone como en su posterior regreso en 2017, la enseña Nokia en un móvil ha significado fiabilidad y buenas prestaciones.'

        	]


        ];

        foreach ($celulares as $celular) {

        	App\Celular::create($celular);
        }

    }
}
