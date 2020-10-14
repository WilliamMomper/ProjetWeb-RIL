<template>
    <div>
        <h3 class="text-center">Ajouter Agence</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addVehicule">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" v-model="agence.agence_nom">
                    </div>
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" v-model="agence.agence_adresse">
                    </div>
                     <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" class="form-control" v-model="agence.agence_telephone">
                    </div> 
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" v-model="agence.agence_fax">
                    </div> <div class="form-group">
                        <label>Photo</label>
                        <input type="text" class="form-control" v-model="agence.agence_photo">
                    </div> 
                    
                    <button type="submit" class="btn btn-primary">Ajouter Agence</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                agence: {}
            }
        },
        methods: {
            addVehicule() {

                this.axios
                    .post('http://localhost:8000/api/agence/add', this.agence)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>