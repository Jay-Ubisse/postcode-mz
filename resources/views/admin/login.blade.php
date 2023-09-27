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
    <body class="bg-gradient-to-tr from-teal-600 to-cyan-700 w-screen min-h-screen pt-10">
        <div class="tabs w-fit mb-1 mx-auto">
            <a class="admin-tab tab tab-lifted text-white">Adminstrador</a>
            <a class="user-tab tab tab-lifted tab-active text-white">Usuario</a>
        </div>
        <form 
            action=""
            class="bg-white rounded-lg w-1/2 mx-auto h-[300px]"
        >
            <section class="admin-field">
                Admin section
            </section>
            <section class="user-field">
                User
            </section>
            <div class="test"></div>
        </form>
    </body>
</html>
