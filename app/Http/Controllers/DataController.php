<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showAllData()
    {
        // Obtener todos los nombres de las tablas en la base de datos
        $tableNames = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        // Obtener todos los datos de cada tabla
        $data = [];
        foreach ($tableNames as $tableName) {
            $data[$tableName] = DB::table($tableName)->get();
        }

        return view('show-all-data', compact('data'));
    }
}
