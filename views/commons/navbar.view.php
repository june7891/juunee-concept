<nav class="bg-white fixed w-full z-20 top-0 left-0 mb-8 border-gray-200 dark:bg-gray-900">
    <div class="navbar max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?=URL?>" class="flex items-center">
            <img src="assets/images/logo.svg" class=" h-8 mr-3" alt="Juunee Concept Logo" />

        </a>

        <div class="toggle">
            <i class="fa-solid fa-bars-staggered open"></i>
            <i class="fa-sharp fa-solid fa-xmark close"></i>
        </div>




        <div class="menu hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="navbar-nav  font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li class="nav-item active">
                    <a href="<?= URL ?>"
                        class="nav-link block py-2 pl-3 pr-4 text-gray-900 hover:text-blue-700 rounded md:bg-transparent  md:p-0 dark:text-white md:dark:text-blue-500">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="<?= URL ?>#about"
                        class="nav-link block py-2 pl-3 pr-4 text-gray-900 hover:text-blue-700  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">A
                        propos</a>
                </li>
                <li class="nav-item">
                    <a href="<?= URL ?>#services"
                        class="nav-link block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li>
                <li class="nav-item">
                    <a href="<?= URL ?>#projects"
                        class="nav-link block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projets</a>
                </li>

                <li class="nav-item">
                    <a href="<?= URL ?>#contact"
                        class="nav-link block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>