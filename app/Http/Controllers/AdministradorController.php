<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
        $cargauser = User::paginate(10);
        return view('pages.paneladmin.paneluser', compact('cargauser'));
    }

    public function edit(User $usuario){
        return view('pages.paneladmin.editar', ['edituser' => $usuario]);

    }

    public function update(Request $request, $id){
        $request->validate([


            'nickname'=>'required |unique:users',
        ]);

        try {

            $edituser = User::find($id);
            $edituser->name = $request->name;
            $edituser->nickname = $request->nickname;
            $edituser->email = $request->email;
            $edituser->rol = $request->get('rol');
            $edituser->save();
        } catch (QueryException $exception){
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function delete(User $usuario){
        $usuario::destroy($usuario->id);
        return redirect()->back();
    }
}
