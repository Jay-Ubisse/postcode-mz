<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postcode-mz</title>
    @vite('resources/css/app.css')
    @vite('resources/js/login.js')
    <script src="{{ asset('js/login.js') }}"></script>
</head>

<body
    class="bg-gradient-to-tr from-teal-600 to-cyan-700 w-screen h-screen flex flex-col justify-center items-center pt-10">
    <div class="tabs w-fit mb-1 mx-auto">
        <a class="admin-tab tab tab-lifted text-white">Adminstrador</a>
        <a class="user-tab tab tab-lifted text-white tab-active">Usuario</a>
    </div>
    <form action="" class="bg-white rounded-lg w-1/3 mx-auto h-fit p-4">
        @csrf
        <h1 class="text-slate-800 w-1/2 font-bold text-lg border-b-2 pl-1 border-slate-800 mb-5">
            Iniciar Sessão
        </h1>
        <section class="admin-field">
            <div class="flex flex-col gap-3 mb-7">
                <input type="text" placeholder="Nome de usario ou email"
                    class="bg-transparent text-slate-800 px-3 border border-slate-800 focus:outline-none  focus:shadow-xl focus:border-2 h-10 rounded-md">
                <input type="text" placeholder="Palavra-passe"
                    class="bg-transparent text-slate-800 px-3 border border-slate-800 focus:outline-none  focus:shadow-xl focus:border-2 h-10 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn bg-gradient-to-r from-teal-600 to-cyan-800 border-none text-white">
                    Entrar
                </button>
            </div>
        </section>
        <section class="user-field">
            <div class="flex flex-col gap-3 mb-7">
                <input type="text" placeholder="Nome de usario ou email"
                    class="bg-transparent text-slate-800 px-3 border border-slate-800 focus:outline-none  focus:shadow-xl focus:border-2 h-10 rounded-md">
                <input type="text" placeholder="Palavra-passe"
                    class="bg-transparent text-slate-800 px-3 border border-slate-800 focus:outline-none  focus:shadow-xl focus:border-2 h-10 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn bg-gradient-to-r from-teal-600 to-cyan-800 border-none text-white">
                    Entrar
                </button>
            </div>
        </section>
    </form>
</body>

</html>
