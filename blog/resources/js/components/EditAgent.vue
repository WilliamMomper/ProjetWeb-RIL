<template>
    <div>
        <h3 class="text-center">Modification agent</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAgent">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" v-model="agent.agent_nom">
                    </div>

                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" class="form-control" v-model="agent.agent_prenom">
                    </div>

                     <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" v-model="agent.agent_telephone">
                    </div> 

                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" v-model="agent.agent_fax">
                    </div> 
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" v-model="agent.agent_mobile">
                    </div>

                    <div class="form-group">
                        <label>User</label>
                        <input type="text" class="form-control" v-model="agent.agent_user">
                    </div> 
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" v-model="agent.agent_password">
                    </div> 
                    <button type="submit" class="btn btn-primary">Modifier l'agent</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                agent: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/agent/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.agent = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateAgent() {
                this.axios
                    .post(`http://localhost:8000/api/agent/update/${this.$route.params.id}`, this.agent)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>l