<template>
    <div>
        <h3 class="text-center">Modification de véhicule</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateVehicule">
                     <div class="form-group">
                        <label>Modèle</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_modele">
                    </div>

                    <div class="form-group">
                        <label>Prix</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_prix">
                    </div>
                     <div class="form-group">
                        <label>Date de fabrication</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_dateFab">
                    </div> 
                    <div class="form-group">
                        <label>Hauteur</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_hauteur">
                    </div> <div class="form-group">
                        <label>Largeur</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_largeur">
                    </div> 
                    <div class="form-group">
                        <label>Poids</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_poids">
                    </div> 
                    <div class="form-group">
                        <label>Puissance</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_puissance">
                    </div> 
                   
                    <div class="form-group">
                        <label>Lieux</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_lieux">
                    </div> 
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_status">
                    
                    </div> <div class="form-group">
                        <label>Agence</label>
                        <input type="text" class="form-control" v-model="vehicule.vehicule_agence">
                        </div> 
                    
                    <button type="submit" class="btn btn-primary">Modifier le véhicule</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                vehicule: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/vehicule/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.vehicule = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateVehicule() {
                this.axios
                    .post(`http://localhost:8000/api/vehicule/update/${this.$route.params.id}`, this.vehicule)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>