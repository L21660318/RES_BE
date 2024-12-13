namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobBatch extends Model
{
    use HasFactory;

    // Especificamos el nombre de la tabla en caso de que no siga las convenciones
    protected $table = 'Job_batches';

    // Si la tabla tiene una clave primaria que no es 'id', puedes especificarlo:
    // protected $primaryKey = 'id';

    // Los campos que se pueden asignar masivamente
    protected $fillable = ['name', 'total_jobs', 'pending_jobs', 'failed_jobs', 'failed_job_ids', 'options', 'cancelled_at', 'created_at', 'finished_at'];

    // Si no quieres que Laravel maneje automáticamente las fechas, puedes desactivarlo:
    // public $timestamps = false;
}
