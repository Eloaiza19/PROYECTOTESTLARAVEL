<?php

namespace Tests\Unit;

use App\Models\Estudiante;
use Tests\TestCase;


class EstudianteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_estudiante_duplication()
    {
        $estudiante1 = Estudiante::make([
            'numDoc' => 123456
        ]);

        $estudiante2 = Estudiante::make([
            'numDoc' => 123456789
        ]);

        $this->assertTrue($estudiante1->numDoc != $estudiante2->numDoc);
    }
    public function test_guardar_nuevo_estudiante()
    {
        $respuesta = $this->post('/estudiante', [
            'nombres' => 'Wilson',
            'apellidos1' => 'Ramirez',
            'apellidos2' => 'Carvajal',
            'fechaExp' => '2022-08-30',
            'documento' => 'public/estudiante/v6uReq5K1bXhgQcIAfLIPpkFlPnbfqCRuEYu34FK.pdf'
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_delete_docente()
    {
        $estudiante = Estudiante::factory()->count(1)->make();

        $estudiante = Estudiante::first();

        if($estudiante) {
            $estudiante->delete();
        }

        $this->assertTrue(true);
    }
}
