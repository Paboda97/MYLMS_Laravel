<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-800 text-white">
            <!-- Sidebar Header -->
            <div class="p-6">
                <h3 class="text-lg font-semibold flex items-center">
                    <i class="fas fa-tachometer-alt mr-2"></i> Admin Dashboard
                </h3>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="mt-6">
                <ul class="space-y-2">
                    <!-- Dashboard -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-home mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Dashboard</a>
                    </li>

                    <!-- Student -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-user-graduate mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Student</a>
                    </li>

                    <!-- Teacher -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-chalkboard-teacher mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Teacher</a>
                    </li>

                    <!-- Courses -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-book mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Courses</a>
                    </li>

                    <!-- Batch -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-layer-group mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Batch</a>
                    </li>

                    <!-- Enrollment -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-user-plus mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Enrollment</a>
                    </li>

                    <!-- Payment -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-dollar-sign mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Payment</a>
                    </li>

                    <!-- Marks -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-chart-bar mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Marks</a>
                    </li>

                    <!-- Attendance -->
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        <i class="fas fa-calendar-check mr-4 text-lg"></i>
                        <a href="#" class="font-semibold">Attendance</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 bg-gray-100">
            <div class="py-12 px-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h2 class="text-2xl font-bold mb-4 text-center">Welcome to the Dashboard!</h2>
                        </div>
                        <div class="p-6 grid grid-cols-2 md:grid-cols-4 gap-4">
                            <!-- Student -->
                            <a href="#" class="p-4 bg-blue-500 text-white text-center rounded shadow hover:bg-blue-600">
                                <i class="fas fa-user-graduate mr-2"></i> Student
                            </a>

                            <!-- Teacher -->
                            <a href="#" class="p-4 bg-green-500 text-white text-center rounded shadow hover:bg-green-600">
                                <i class="fas fa-chalkboard-teacher mr-2"></i> Teacher
                            </a>

                            <!-- Courses -->
                            <a href="#" class="p-4 bg-yellow-500 text-white text-center rounded shadow hover:bg-yellow-600">
                                <i class="fas fa-book mr-2"></i> Courses
                            </a>

                            <!-- Batch -->
                            <a href="#" class="p-4 bg-indigo-500 text-white text-center rounded shadow hover:bg-indigo-600">
                                <i class="fas fa-layer-group mr-2"></i> Batch
                            </a>

                            <!-- Enrollment -->
                            <a href="#" class="p-4 bg-orange-500 text-white text-center rounded shadow hover:bg-orange-600">
                                <i class="fas fa-user-plus mr-2"></i> Enrollment
                            </a>

                            <!-- Payment -->
                            <a href="#" class="p-4 bg-pink-500 text-white text-center rounded shadow hover:bg-pink-600">
                                <i class="fas fa-dollar-sign mr-2"></i> Payment
                            </a>

                            <!-- Marks -->
                            <a href="#" class="p-4 bg-purple-500 text-white text-center rounded shadow hover:bg-purple-600">
                                <i class="fas fa-chart-bar mr-2"></i> Marks
                            </a>

                            <!-- Attendance -->
                            <a href="#" class="p-4 bg-red-500 text-white text-center rounded shadow hover:bg-red-600">
                                <i class="fas fa-calendar-check mr-2"></i> Attendance
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
