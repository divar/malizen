<aside class="w-full bg-white" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 rounded">
        <ul class="space-y-2">
            <li>
                <a href="{{url('/')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fas fa-columns"></i></span>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/residents')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-users-between-lines"></i></span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Penduduk</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/reports')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-chart-pie"></i></span>
                    <span class="flex-1 ml-3 whitespace-nowrap">Report</span>
                </a>
            </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-500">
            <li>
                <a href="{{url('v1/users')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-user"></i></span>
                    <span class="ml-3">User</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/districts')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-landmark-dome"></i></span>
                    <span class="ml-3">Kecamatan</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/villages')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-arrow-right-to-city"></i></span>
                    <span class="ml-3">Kelurahan</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/neighborhood-associations')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-house"></i></span>
                    <span class="flex-1 ml-3 whitespace-nowrap">RT</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/citizen-associations')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-house-chimney"></i></span>
                    <span class="flex-1 ml-3 whitespace-nowrap">RW</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/religions')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-person-praying"></i></span>
                    <span class="ml-3">Religon</span>
                </a>
            </li>
            <li>
                <a href="{{url('v1/professions')}}" class="side-navigation-item">
                    <span class="text-gray-500"><i class="fa-solid fa-user-tie"></i></span>
                    <span class="ml-3">Profession</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

