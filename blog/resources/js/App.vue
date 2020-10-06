<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            
            <span class="text-secondary">Socopec</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/Agences" class="nav-item nav-link">Home Agence</router-link>
                    <router-link to="/Agents" class="nav-item nav-link">Home Angent</router-link>
                    <router-link to="/addVehicule" class="nav-item nav-link">Ajouter Véhicule</router-link>
                    <router-link to="/addAgence" class="nav-item nav-link">Ajouter Agence</router-link>
                    <router-link to="/addAgent" class="nav-item nav-link">Ajouter Agent</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>