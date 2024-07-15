<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    

    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $users = User::query()
            ->when($search, function ($query, $search) {
                $query->where('name', $search)
                      ->orWhere('email', 'LIKE', "%{$search}%");
            })
            ->paginate(6);

            
            return view('admin.users.index',compact('users'));
    }
    
    public function create()
     {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {        
       User::create($request->validated());    
        return redirect()->route('users.index')->with('success', 'Amigo Secreto criado com sucesso');
    }

    public function edit($id)
    {
        $user = User::find($id); 
        return view('admin.users.edit',compact('user'));
    }

    public function update(UpdateUserRequest $request, String $id)
    {
        $user = User::find($id); 
        $user->update($request->all()); 
        return redirect()->route('users.index')->with('message', 'Amigo Secreto editado com sucesso');
    }

    public function show($id)
    {
        $user = User::find($id); 
        return view('admin.users.show',compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id); 
        $user->delete();
        return redirect()->route('users.index')->with('error', 'Amigo Secreto deletado com sucesso');
    }

    public function sorteio(Request $request)
    {
        $usuarios = User::all();

        if ($usuarios->count() < 2) {
            return redirect('/sorteio')->with('error', 'Não há usuários suficientes para realizar o sorteio.');
        }

        // Embaralhar a lista de usuários
        $usuariosArray = $usuarios->shuffle()->toArray();

        // Criar um array associando cada usuário a outro
        $resultados = [];
        $totalUsuarios = count($usuariosArray);

        for ($i = 0; $i < $totalUsuarios; $i++) {
            $doador = $usuariosArray[$i];
            $recebedor = $usuariosArray[($i + 1) % $totalUsuarios];
            $resultados[$doador['name']] = $recebedor['name'];
        }

        return view('admin.users.sorteio', compact('resultados'));
    }

    

}
