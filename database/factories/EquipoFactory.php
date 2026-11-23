<?php
namespace Database\Factories;
use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;
    
    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->numerify('#############'),
            'nombre' => fake()->name(),
            'marca' => fake()->company(),
            'fecha_adquisicion' => fake()
            ->dateTimeBetween('-70 years', '-18 years')
            ->format('Y-m-d'),
            'estado' => fake()->randomElement(['Disponible','asignado','mantenimiento']),
        ];
    }
}
