<?php

namespace Tests\Unit;

use App\Models\Curso;
use Tests\TestCase;

class CursoTest extends TestCase
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
        $curso1 = Curso::make([
            'nombre' => 'Laravel 8',
            'descripcion' => 'Este es un gran curso',
            'duracion' => 90,
            'imagen' => 'public/cursos/xS7rmquHaLXh3AZk2AmgdqaY94Oj7AL6qKoxWY4M.jpg'
        ]);

        $curso2 = Curso::make([
            'nombre' => 'Laravel 9',
            'descripcion' => 'Este es un gran curso que te sorprendera',
            'duracion' => 20,
            'imagen' => 'public/cursos/J5LLyUdn1ZcnZscnTOfoE1Sc9GuZkYnFB1064UU6.jpg'
        ]);

        $this->assertTrue($curso1->nombre != $curso2->nombre &&
            $curso1->descripcion != $curso2->descripcion &&
            $curso1->duracion != $curso2->duracion &&
            $curso1->imagen != $curso2->imagen);
    }

    // public function test_guardar_nuevo_curso()
    // {
    //     $respuesta = $this->post('/curso', [
    //         'nombre' => 'Laravel 8',
    //         'descripcion' => 'Este es un buen curso',
    //         'imagen' => 'public/cursos/xS7rmquHaLXh3AZk2AmgdqaY94Oj7AL6qKoxWY4M.jpg',
    //         'duracion' => 80
    //     ]);

    //     return $respuesta->assertRedirect('/');
    // }

    public function test_delete_curso()
    {
        $curso = Curso::factory()->count(1)->make();

        $curso = Curso::first();

        if($curso) {
            $curso->delete();
        }

        $this->assertTrue(true);
    }
}
