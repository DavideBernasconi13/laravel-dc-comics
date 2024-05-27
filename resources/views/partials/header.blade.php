<header class="position-fixed z-3 top-0 shadow-lg w-100 debug">
    <nav class="container d-flex">
        <div class="logoheader">
            <img src="img/dc-logo.png" alt="dclogo" />
        </div>
        <div role="navigation" class="menubar">

        </div>
        <div role="search" class="searchbar">
            <label for="search" class="px-2" @click="cleanResult"><i class="fa fa-search"
                    aria-hidden="true"></i></label>
            <input type="search" placeholder="Search" v-model="searchQuery" @input="search" />
            <div v-if="searchResults.length" class="dropdown position-absolute z-3 bg-white p-3 shadow-lg">

            </div>
        </div>
    </nav>
</header>