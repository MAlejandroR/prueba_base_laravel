<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory, HasRoles;
    protected $guard_name = 'web';

    protected $fillable = ['nombre', 'apellido', 'email', 'fecha_nacimiento'];

    public static function getLabels():array{
        $fields = __("alumnos.fields");
        return $fields;
    }

}
