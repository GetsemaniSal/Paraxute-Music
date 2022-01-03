<x-layouts.base>
    {{-- If the user is authenticated --}}
    @auth()
        {{-- If the user is authenticated on the static sign up or the sign up page --}}
        @if (in_array(request()->route()->getName(),['static-sign-up', 'sign-up'],))
            @include('layouts.navbars.guest.sign-up')
      
            @include('layouts.footers.guest.with-socials')
            {{-- If the user is authenticated on the static sign in or the login page --}}
        @elseif (in_array(request()->route()->getName(),['sign-in', 'login'],))
            @include('layouts.navbars.guest.login')
      
            @include('layouts.footers.guest.description')
        @elseif (in_array(request()->route()->getName(),['profile', 'my-profile'],))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @include('layouts.navbars.auth.nav-profile')
                <div>
              
                    @include('layouts.footers.auth.footer')
                </div>
            </div>
            @include('components.plugins.fixed-plugin')
        @else
            @include('layouts.navbars.auth.sidebar')
            @include('layouts.navbars.auth.nav')
            @include('components.plugins.fixed-plugin')
      
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        {{-- If the user is on the login page --}}
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
            @include('layouts.navbars.guest.login')
      
            <div class="mt-5">
                @include('layouts.footers.guest.with-socials')
            </div>

            {{-- If the user is on the sign up page --}}
        @elseif (!auth()->check() && in_array(request()->route()->getName(),['sign-up'],))
            <div>
                @include('layouts.navbars.guest.sign-up')
          
                @include('layouts.footers.guest.with-socials')
            </div>
        @endif
    @endguest

</x-layouts.base>

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Clases</h5>
                        </div>
                        <a href="usuarios/create" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Nueva Clase</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                             
                                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Programa
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Numero de Sesiones por Mes
                                    </th>
                                </tr>
                                            </thead>
                            <tbody>
                            @foreach ($clases as $clase)
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$clase->id}}</p>
                                    </td>
                                    <td>
                                        <div>
                                        <p class="text-xs font-weight-bold mb-0">{{$clasee->name}}</p>
                                        </div>
                                    </td>
                                   
                                    <td class="text-center">
                                      <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                        <a href="/usuarios/{{$usuario->id}}/edit" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit user">
                                            @csrf
                                            @method('DELETE')
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                      </form>
                                    </td>
                                </tr>
                               
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>   
 