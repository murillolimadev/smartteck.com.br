    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Smartteck</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home.index') }}" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">A empresa</a>
                <a href="" class="nav-item nav-link">Noticias</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Serviços</a>
                    <div class="dropdown-menu fade-up m-0 caixa-alta" style="text-transform: uppercase;">
                        <a href="https://smartteck.adiantesa.com/" class="dropdown-item">Antecipação de Recebíveis</a>
                        <a href="https://emprestimos.sistemashugo.com.br/painel/" class="dropdown-item">Administrador</a>
                        <a href="https://smartteck.conectar.site/lojista/site/gerenciar" class="dropdown-item">Lojista</a>
                        <a href="https://smartteck.conectar.site/convenio/site/gerenciar" class="dropdown-item">Clube de Benefícios</a>
                        <a href="https://smartteck.conectar.site/corporativo/site/gerenciar" class="dropdown-item">Corporações</a>
                        <a href="https://smartteck.conectar.site/pos/index.php/site/gerenciar" class="dropdown-item">Pos-web</a>
                        <a href="{{ route('documentacao.api') }}" class="dropdown-item">Documentação API</a>

                    </div>
                </div>
                <a href="{{ route('home.contato.index') }}" class="nav-item nav-link">Contatos</a>
                <a href="https://smartteck.com.br/cobrancas/acesso" class="nav-item nav-link">Área do cliente</a>
            </div>


            <a href="https://api.whatsapp.com/send/?phone=5599981781992&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Whatsapp<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -
