namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;

    // Define los campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'descripcion', 'imagen'];

    // Si no quieres que Laravel maneje automáticamente las fechas, puedes desactivarlo:
    // public $timestamps = false;
}
