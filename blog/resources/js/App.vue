<template >
    <div class="container"  >
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <img src="Images\logo.png" class="img-fluid" >
            <!-- <span class="text-secondary">Socopec</span> -->
            
        </div>

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #62A5FF;">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    

                    <router-link to="/" class="nav-item nav-link">Home</router-link>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agence
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/addAgence">Ajouter une Agence</a>
                            <a class="dropdown-item" href="/Agences">Voir les agences</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agent
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/addAgent">Ajouter un agent</a>
                            <a class="dropdown-item" href="/Agents">Voir les agents</a>
                        </div>
                    </li>

                    <router-link to="/addVehicule" class="nav-item nav-link">Ajouter Véhicule</router-link>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>