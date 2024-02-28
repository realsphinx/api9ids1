<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function view(Request $req){
        if ($req->id) {
            $permiso = Permiso::find($req->id);
        } else {
            $permiso = new Permiso();
        }
        return json_encode($permiso);
    }

    public function store(Request $req){
        if ($req->id != 0) {
            $permiso = Permiso::find($req->id);
        } else {
            $permiso = new Permiso();
        }
       $permiso->fecha = $req->fecha;
        $permiso->estado = $req->estado;
        $permiso->motivo = $req->motivo;
        $permiso->observaciones = $req->observaciones;
        $permiso->profesoresid = $req->profesoresid;
        $permiso->save();
        return "Solicitud guardada correctamente";
        
    }
    
    public function delete(Request $req){
        $permiso = Permiso::find($req->id);
        $permiso->delete();
        return "Se elimino correctamente";
    }
    
    public function index(){
        $permisos = Permiso::all();
        return json_encode($permisos);
    }
}
