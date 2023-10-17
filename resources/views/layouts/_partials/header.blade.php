<header class='bg-black'>
    <nav class="navbar navbar-expand-lg bg-black modify-pd">
        <div class="container-fluid">
            <a class="navbar-brand" href="home_view.html">
                <img src="{{asset('images/logo.png')}}" class="img-responsive img" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dashboard-class">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('home.index')}}"><i
                                class="bx bxs-dashboard"></i> Home</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('despesas.index')}}"><i class="bx bx-wallet"></i>
                            Despesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('receitas.index')}}"><i class="bx bx-calculator"></i>
                            Receitas</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light" href="contas_view.html"><i class="bx bxs-bank"></i>
                            Registro de Contas</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('reservas.index')}}"><i class="bx bx-money"></i>
                            Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('investimentos.index')}}"><i class="bx bx-calculator"></i>
                            Investimentos, Ações e Fundos</a>
                    </li>
                    <li class="nav-item text-left">
                        <a class="nav-link text-light" href="../index.html"><i class="bx bx-exit"></i> Sair</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>