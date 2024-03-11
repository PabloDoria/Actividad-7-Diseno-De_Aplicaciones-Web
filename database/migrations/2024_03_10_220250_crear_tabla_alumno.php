    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CrearTablaAlumno extends Migration
    {
        public function up()
        {
            Schema::create('alumno', function (Blueprint $table) {
                $table->id();
                $table->string('grado');
                $table->unsignedBigInteger('FK_IdGrupo')->nullable();
                $table->unsignedBigInteger('FK_TipoUsuario');
                $table->foreign('FK_IdGrupo')->references('id')->on('grupos')->onDelete('set null');
                $table->foreign('FK_TipoUsuario')->references('id')->on('usuarios');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('alumnos');
        }
    }
