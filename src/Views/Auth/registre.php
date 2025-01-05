<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-r from-gray-800 to-blue-600">
    <div class="container mx-auto min-h-screen flex items-center">
        <div class="flex w-full gap-8 bg-white rounded-xl overflow-hidden shadow-2xl">
            <!-- Left Side - Image -->
            <div class="hidden lg:block w-1/2 relative">
                <img src="/api/placeholder/800/600" alt="Office" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/50 to-gray-900/50 flex items-center justify-center">
                    <div class="text-center text-white px-8">
                        <h2 class="text-4xl font-bold mb-4">Rejoignez CareerLink</h2>
                        <p class="text-xl">Créez votre compte et commencez votre nouvelle aventure professionnelle</p>
                    </div>
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="w-full lg:w-1/2 p-8 md:p-12">
                <div class="text-2xl font-bold text-gray-800 text-center mb-8">
                    <i class="fas fa-briefcase mr-2"></i>CareerLink
                </div>
                
                <h4 class="text-2xl font-semibold text-center mb-8">Créer un compte</h4>

                <!-- User Type Selector -->
                <div class="flex justify-center gap-4 mb-8">
                    <button class="user-type-btn active px-6 py-3 border-2 border-blue-500 rounded-lg transition-all duration-300 font-semibold" data-type="candidate">
                        <i class="fas fa-user mr-2"></i>Candidat
                    </button>
                    <button class="user-type-btn px-6 py-3 border-2 border-blue-500 rounded-lg transition-all duration-300 font-semibold" data-type="recruiter">
                        <i class="fas fa-building mr-2"></i>Recruteur
                    </button>
                </div>
                
                <form id="registerForm" class="space-y-4">
                    <div>
                        <label class="text-gray-600 mb-2 block">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
                    </div>

                    <div>
                        <label class="text-gray-600 mb-2 block">Mot de passe</label>
                        <input type="password" class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
                    </div>

                    <input type="hidden" id="roleId" name="roleId" value="candidate">

                    <button type="submit" name="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition-colors font-semibold">
                        Créer mon compte
                    </button>
                </form>

                <p class="text-center mt-6 text-gray-600">
                    Déjà inscrit ? 
                    <a href="login.php" class="text-blue-500 hover:text-blue-600 font-semibold">Connectez-vous</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Toggle user type
        const userTypeBtns = document.querySelectorAll('.user-type-btn');
        userTypeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                userTypeBtns.forEach(b => {
                    b.classList.remove('active', 'bg-blue-500', 'text-white');
                });
                btn.classList.add('active', 'bg-blue-500', 'text-white');
                
                const type = btn.dataset.type;
                document.getElementById('roleId').value = type;
            });
        });

        // Form validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your form validation and submission logic here
        });
    </script>
</body>
</html>