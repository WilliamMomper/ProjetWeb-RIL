<template>
    <div>
        <h3 class="text-center">Modification de l'agence</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAgence">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" v-model="agence.agence_nom">
                    </div>
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" v-model="agence.agence_adresse">
                    </div>
                     <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" v-model="agence.agence_telephone">
                    </div> 
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" v-model="agence.agence_fax">
                    </div> <div class="form-group">
                        <label>Photo</label>
                        <input type="text" class="form-control" v-model="agence.agence_photo">
                    </div> 
                    <button type="submit" class="btn btn-primary">Modfier l'agence</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/agence/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.agence = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateAgence() {
                this.axios
                    .post(`http://localhost:8000/api/agence/update/${this.$route.params.id}`, this.agence)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>