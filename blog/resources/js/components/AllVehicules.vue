<template>
    <div>
        <h3 class="text-center">Liste véhicules</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Modele</th>                
            </tr>
            </thead>
            <tbody>
            <tr v-for="vehicule in vehicules" :key="vehicule.id">
                <td>{{ vehicule.vehicule_modele }}</td>                
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editVehicule', params: { id: vehicule.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteBook(vehicule.id)">Delete</button>
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