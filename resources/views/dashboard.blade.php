<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="py-4 px-6 text-xl font-bold border-b border-gray-700">
                Dashboard
            </div>
            <nav class="flex-1 px-4 py-2">
                <ul class="space-y-2">
                    <li><a href="#" class="flex items-center p-2 rounded hover:bg-gray-700"><i class="fas fa-home mr-3"></i> Site Home</a></li>
                    <li><a href="#" class="flex items-center p-2 rounded hover:bg-gray-700"><i class="fas fa-calendar-alt mr-3"></i> Calendar</a></li>
                    <li><a href="#" class="flex items-center p-2 rounded hover:bg-gray-700"><i class="fas fa-folder mr-3"></i> Private Files</a></li>
                    <br>
                    <li class="mt-4 font-semibold">Course Semesters</li>
                    <li><a href="#" class="flex items-center p-2 rounded hover:bg-gray-700"><i class="fas fa-graduation-cap mr-3"></i> 1st Semester</a></li>
                    <li><a href="#" class="flex items-center p-2 rounded hover:bg-gray-700"><i class="fas fa-graduation-cap mr-3"></i> 2nd Semester</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Course Cards -->
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="text-lg font-semibold">1st Semester</h3>
                        <br>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gray-300" style="width: 100%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">0% complete</span>
                        </div>
                        <br>
                        <div class="mt-4">
                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                View More
                            </a>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="text-lg font-semibold">2nd Semester</h3>
                        <br>
                        <div class="mt-2">
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-gray-300" style="width: 100%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">0% complete</span>
                        </div>
                        <br>
                        <div class="mt-4">
                            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                View More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Calendar and Upcoming Events -->
                <div class="space-y-2">
                    <!-- Calendar -->
                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="text-lg font-semibold mb-2">Calendar</h3>
                        <input type="date" class="w-full border rounded px-4 py-2" />
                    </div>

                    <!-- Upcoming Events -->
                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="text-lg font-semibold mb-2">Upcoming Events</h3>
                        <p class="text-gray-600">There are no upcoming events.</p>
                        <a href="#" class="text-blue-500 hover:underline">Go to calendar...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
