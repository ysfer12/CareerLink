<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Dashboard Recruteur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <!-- Left side -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-briefcase text-blue-600 text-xl mr-2"></i>
                        <span class="text-xl font-bold">CareerLink</span>
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-400 hover:text-gray-500">
                        <i class="fas fa-bell text-xl"></i>
                    </button>
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-gray-600 hover:text-gray-700">
                            <img src="/api/placeholder/32/32" alt="Profile" class="w-8 h-8 rounded-full">
                            <span>John Doe</span>
                            <i class="fas fa-chevron-down text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white h-screen border-r">
            <nav class="mt-8 px-4">
                <div class="space-y-2">
                    <a href="#" class="flex items-center px-4 py-2.5 text-blue-600 bg-blue-50 rounded-lg">
                        <i class="fas fa-home text-xl w-6"></i>
                        <span class="ml-3">Tableau de bord</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-briefcase text-xl w-6"></i>
                        <span class="ml-3">Offres d'emploi</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-users text-xl w-6"></i>
                        <span class="ml-3">Candidats</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-envelope text-xl w-6"></i>
                        <span class="ml-3">Messages</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 rounded-lg">
                        <i class="fas fa-cog text-xl w-6"></i>
                        <span class="ml-3">Paramètres</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <i class="fas fa-briefcase text-blue-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-gray-500">Ce mois</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">42</h3>
                    <p class="text-gray-600">Offres publiées</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-green-50 p-3 rounded-lg">
                            <i class="fas fa-users text-green-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-gray-500">Ce mois</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">156</h3>
                    <p class="text-gray-600">Candidatures reçues</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-purple-50 p-3 rounded-lg">
                            <i class="fas fa-eye text-purple-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-gray-500">Ce mois</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">2.4k</h3>
                    <p class="text-gray-600">Vues des offres</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-orange-50 p-3 rounded-lg">
                            <i class="fas fa-handshake text-orange-600 text-xl"></i>
                        </div>
                        <span class="text-sm text-gray-500">Ce mois</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">18</h3>
                    <p class="text-gray-600">Entretiens planifiés</p>
                </div>
            </div>

            <!-- Recent Applications -->
            <div class="bg-white rounded-xl shadow-sm mb-8">
                <div class="p-6 border-b">
                    <h2 class="text-xl font-bold">Candidatures récentes</h2>
                </div>
                <div class="p-6">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left text-sm text-gray-500">
                                <th class="pb-4">Candidat</th>
                                <th class="pb-4">Poste</th>
                                <th class="pb-4">Date</th>
                                <th class="pb-4">Statut</th>
                                <th class="pb-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            <tr class="border-b">
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img src="/api/placeholder/32/32" alt="Avatar" class="w-8 h-8 rounded-full mr-3">
                                        <div>
                                            <p class="font-medium">Marie Laurent</p>
                                            <p class="text-sm text-gray-500">marie@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">Développeur Frontend</td>
                                <td class="py-4">24 Oct 2023</td>
                                <td class="py-4">
                                    <span class="px-3 py-1 text-sm text-green-700 bg-green-100 rounded-full">
                                        En cours
                                    </span>
                                </td>
                                <td class="py-4">
                                    <button class="text-blue-600 hover:text-blue-800">Voir détails</button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Active Job Listings -->
            <div class="bg-white rounded-xl shadow-sm">
                <div class="p-6 border-b flex justify-between items-center">
                    <h2 class="text-xl font-bold">Offres actives</h2>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-plus mr-2"></i>Nouvelle offre
                    </button>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border rounded-lg p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="font-bold text-lg mb-1">Développeur Frontend</h3>
                                    <p class="text-gray-500">Paris, France</p>
                                </div>
                                <button class="text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
                                <span><i class="fas fa-clock mr-1"></i>Temps plein</span>
                                <span><i class="fas fa-user-friends mr-1"></i>23 candidats</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="px-3 py-1 text-sm text-blue-700 bg-blue-100 rounded-full">
                                    Active
                                </span>
                                <button class="text-blue-600 hover:text-blue-800">Modifier</button>
                            </div>
                        </div>
                        <!-- Add more job cards as needed -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>