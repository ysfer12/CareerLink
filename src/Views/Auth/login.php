<?php

require_once("../../../vendor/autoload.php");
use App\Controllers\Auth\AuthController;



if(isset($_POST["submit"]))
{

    if(empty($_POST["email"]) && empty($_POST["mot_de_pass"]))
    {
        echo "email or password is empty";
    }
    else{
        $email = $_POST["email"];
        $mot_de_pass = $_POST["mot_de_pass"];

        $authController = new AuthController();
        $authController->login($email, $mot_de_pass);

    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-purple-600 via-purple-900 to-pink-500">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ0MCIgaGVpZ2h0PSI3NjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IHgxPSIwIiB5MT0iMCIgeDI9IjEiIHkyPSIxIiBpZD0iZyI+PHN0b3Agc3RvcC1jb2xvcj0iIzMzMzMzMyIgb2Zmc2V0PSIwJSIvPjxzdG9wIHN0b3AtY29sb3I9IiM3NTc1NzUiIG9mZnNldD0iMTAwJSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxwYXRoIGQ9Ik0wIDBoMTQ0MHY3NjBIMHoiIGZpbGw9InVybCgjZykiLz48L3N2Zz4=')] opacity-10"></div>

    <div class="container mx-auto min-h-screen flex items-center justify-center px-4">
        <div class="flex w-full max-w-5xl bg-white rounded-3xl overflow-hidden shadow-2xl shadow-purple-900/20">
            <!-- Left Side - Image -->
            <div class="hidden lg:block w-1/2 relative">
                <img src="/api/placeholder/800/1000" alt="Office" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600/90 to-pink-500/90 flex items-center justify-center">
                    <div class="text-center text-white px-12">
                        <div class="flex items-center justify-center space-x-3 mb-8">
                            <div class="bg-white/20 p-3 rounded-xl backdrop-blur-sm">
                                <i class="fas fa-briefcase text-2xl"></i>
                            </div>
                            <span class="text-3xl font-black">CareerLink</span>
                        </div>
                        <h2 class="text-4xl font-bold mb-6">Bienvenue !</h2>
                        <p class="text-xl text-purple-100">Votre parcours professionnel commence ici. Découvrez des milliers d'opportunités qui correspondent à vos ambitions.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="w-full lg:w-1/2 p-8 md:p-12">
                <div class="lg:hidden text-center mb-8">
                    <div class="inline-flex items-center space-x-3">
                        <div class="bg-gradient-to-r from-purple-600 to-pink-500 p-2.5 rounded-xl">
                            <i class="fas fa-briefcase text-xl text-white"></i>
                        </div>
                        <span class="text-2xl font-black bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">
                            CareerLink
                        </span>
                    </div>
                </div>
                
                <h4 class="text-2xl font-bold text-gray-900 text-center mb-2">Connexion</h4>
                <p class="text-gray-600 text-center mb-8">Heureux de vous revoir !</p>
                
                <form class="form space-y-6" id="login-form" action="" method="POST">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="far fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email" required
                                class="w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all"
                                placeholder="votreemail@exemple.com">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-gray-700">Mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="mot_de_pass" id="mot_de_pass" name="mot_de_pass" required
                                class="w-full pl-12 pr-4 py-4 rounded-xl border border-gray-200 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all"
                                placeholder="••••••••">
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" 
                                class="w-4 h-4 rounded text-purple-500 focus:ring-purple-500 border-gray-300">
                            <label for="remember" class="ml-2 text-gray-600 text-sm">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="text-purple-600 hover:text-purple-700 text-sm font-medium">
                            Mot de passe oublié ?
                        </a>
                    </div>
                    
                    <button 
    type="submit" 
    name="submit" 
    value="1"
    class="w-full flex items-center justify-center bg-gradient-to-r from-purple-600 to-pink-500 text-white py-4 rounded-xl hover:shadow-lg hover:shadow-purple-200 transition-all duration-300 font-semibold cursor-pointer"
>
    <span>Se connecter</span>
    <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
</button>
                </form>
                
                <div class="mt-8">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500">Ou continuez avec</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-3 gap-4">
                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl hover:border-purple-200 hover:bg-purple-50 transition-all group">
                            <i class="fab fa-google text-[#db4437] group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl hover:border-purple-200 hover:bg-purple-50 transition-all group">
                            <i class="fab fa-facebook-f text-[#3b5998] group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-gray-200 rounded-xl hover:border-purple-200 hover:bg-purple-50 transition-all group">
                            <i class="fab fa-linkedin-in text-[#0077b5] group-hover:scale-110 transition-transform"></i>
                        </a>
                    </div>
                </div>
                
                <p class="text-center mt-8 text-gray-600">
                    Pas encore de compte ? 
                    <a href="registre.php" class="text-purple-600 hover:text-purple-700 font-semibold ml-1">
                        Inscrivez-vous gratuitement
                    </a>
                </p>

                <!-- Back to home -->
                <div class="text-center mt-8">
                    <a href="index.php" class="inline-flex items-center text-gray-500 hover:text-purple-600 text-sm">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>