<template>

    <div>
     
        <h3 class="text-center">Liste véhicules</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Modele</th>  
                <th>Prix</th>  
                <th>Date de fabrication</th>  
                <th>Hauteur</th>  
                <th>Largeur</th>  
                <th>Poids</th>  
                <th>Puissance</th>  
                <th>Photo</th>  
                <th>Lieux</th>  
                <th>Status</th>  
                <th>Agent</th>  
                <th>Agence</th>  
                <th>User</th> 
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="vehicule in vehicules" :key="vehicule.id">
                <td>{{ vehicule.vehicule_modele }}</td> 
                <td>{{ vehicule.vehicule_prix }}</td> 
                <td>{{ vehicule.vehicule_dateFab }}</td> 
                <td>{{ vehicule.vehicule_hauteur }}</td> 
                <td>{{ vehicule.vehicule_largeur }}</td> 
                <td>{{ vehicule.vehicule_poids }}</td> 
                <td>{{ vehicule.vehicule_puissance }}</td> 
                <td>{{ vehicule.vehicule_photos }}</td>                
                <td>{{ vehicule.vehicule_lieux }}</td> 
                <td>{{ vehicule.vehicule_status }}</td> 
                <td>{{ vehicule.vehicule_agent }}</td> 
                <td>{{ vehicule.vehicule_agence }}</td> 
                <td>{{ vehicule.vehicule_user }}</td> 

                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editVehicule', params: { id: vehicule.id }}" class="btn btn-primary">Modifier
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBook(vehicule.id)">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                vehicules: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/vehicules')
                .then(response => {
                    this.vehicules = response.data;
                });
        },
        methods: {
            deleteBook(id) {
                this.axios
                    .delete(`http://localhost:8000/api/vehicule/delete/${id}`)
                    .then(response => {
                        let i = this.vehicules.map(item => item.id).indexOf(id); // find index of your object
                        this.vehicules.splice(i, 1)
                    });
            }
        }
    }
</script>