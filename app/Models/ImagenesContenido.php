<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImagenesContenido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $primaryKey = 'id_imagen_contenido';
    protected $table = 'imagenes_contenido';
    protected $dateFormat = 'Y-m-d H:i:s';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_actualizacion';
    const DELETED_AT = "trash";

    protected $fillable = [
        'id_tipo_imagen',
        'nombre_original',
        'nombre_modificado',
        'url_imagen',
        'activo'
    ];
}