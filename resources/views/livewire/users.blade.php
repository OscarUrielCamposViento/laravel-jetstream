<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1 class="font-bold text-2xl">Usuarios del sistema</h1>
    <p>{{$mensaje}}</p>
    <input type="text" name="mensaje" wire:model='mensaje'>
    <div class="flex gap-4">
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><button wire:click="show({{$user->id}})">Detalles</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
        <div>
            <h2 class="font-bold text-xl">Detalles del usuario</h2>
            @isset($detallesUser)
            <ul>
                <li>Nombre: {{$detallesUser->name}}
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>
                </li>
                <li>Nombre: {{$detallesUser->email}}</li>
                <li>Confirmado desde: {{$detallesUser->email_verified_at->locale('es')->isoFormat('dddd, MMMM D, YYYY');}}</li>
            </ul>
            @endisset
        </div>
    </div>
</div>
