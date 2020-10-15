<template>
    <div>
        <h3 class="text-center">Liste des agences</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone At</th>
                <th>Fax At</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="agence in agences" :key="agence.id">
                <td>{{ agence.id }}</td>
                <td>{{ agence.agence_nom }}</td>
                <td>{{ agence.agence_adresse }}</td>
                <td>{{ agence.agence_telephone }}</td>
                <td>{{ agence.agence_fax }}</td>
                <td>{{ agence.agence_photo }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editAgence', params: { id: agence.id }}" class="btn btn-primary">Modifier
                        </router-link>
                        <button class="btn btn-danger" @click="deleteAgence(agence.id)">Supprimer</button>
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
                agences: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/agences')
                .then(response => {
                    this.agences = response.data;
                });
        },
        methods: {
            deleteAgence(id) {
                this.axios
                    .delete(`http://localhost:8000/api/agence/delete/${id}`)
                    .then(response => {
                        let i = this.agences.map(item => item.id).indexOf(id); // find index of your object
                        this.agences.splice(i, 1)
                    });
            }
        }
    }
</script>