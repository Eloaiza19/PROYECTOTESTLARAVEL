<?php

namespace Tests\Unit;

use App\Models\Docente;
use Tests\TestCase;

class DocenteTest extends TestCase
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

    public function test_curso_duplication()
    {
        $docente1 = Docente::make([
            'nombres' => 'Carlos',
            'apellidos' => 'Mora',
            'titulo' => 'Ingeniero de Software',
            'edad' => 19,
            'fecha' => '2022-09-26',
            'imagen' => 'public/docente/imagenes/oPRz3sDLRDyrgnnxaIbeiPBiejDeZKOJKIxeEFs2.jpg',
            'documento' => 'public/docente/documentos/em1QNh6kkTUMY0MCSRPn1dx1y8cBmLLGqDtuJecz.pdf'
        ]);

        $docente2 = Docente::make([
            'nombres' => 'Wilson',
            'apellidos' => 'Ramirez',
            'titulo' => 'Ingeniero de Sistemas',
            'edad' => 20,
            'fecha' => '2019-09-27',
            'imagen' => 'public/docente/documentos/em1QNh6kkTUMY0MCSRPn1dx1y8cBmLLGqDtuJecz.pdf',
            'documento' => 'public/docente/imagenes/oPRz3sDLRDyrgnnxaIbeiPBiejDeZKOJKIxeEFs2.jpg'
        ]);

        $this->assertTrue($docente1->nombres != $docente2->nombres &&
            $docente1->apellidos != $docente2->apellidos &&
            $docente1->titulo != $docente2->titulo &&
            $docente1->edad != $docente2->edad &&
            $docente1->fecha != $docente2->fecha &&
            $docente1->imagen != $docente2->imagen &&
            $docente1->documento != $docente2->documento);
    }

    public function test_guardar_nuevo_docente()
    {
        $respuesta = $this->post('/docente', [
            'nombres' => 'Wilson',
            'apellidos' => 'Ramirez',
            'titulo' => 'Ingeniero de Sistemas',
            'edad' => 20,
            'fecha' => '2019-09-27',
            'imagen' => 'public/docente/documentos/em1QNh6kkTUMY0MCSRPn1dx1y8cBmLLGqDtuJecz.pdf',
            'documento' => 'public/docente/imagenes/oPRz3sDLRDyrgnnxaIbeiPBiejDeZKOJKIxeEFs2.jpg'
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_delete_docente()
    {
        $docente = Docente::factory()->count(1)->make();

        $docente = Docente::first();

        if($docente) {
            $docente->delete();
        }

        $this->assertTrue(true);
    }
}
