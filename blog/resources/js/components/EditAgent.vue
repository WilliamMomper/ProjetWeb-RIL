<template>
    <div>
        <h3 class="text-center">Edit Agent</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAgent">
                    <div class="form-group">
                        <label>nom</label>
                        <input type="text" class="form-control" v-model="agent.agent_nom">
                    </div>

                    <div class="form-group">
                        <label>prenom</label>
                        <input type="text" class="form-control" v-model="agent.agent_prenom">
                    </div>

                     <div class="form-group">
                        <label>telephone</label>
                        <input type="text" class="form-control" v-model="agent.agent_telephone">
                    </div> 

                    <div class="form-group">
                        <label>fax</label>
                        <input type="text" class="form-control" v-model="agent.agent_fax">
                    </div> 
                    <div class="form-group">
                        <label>mobile</label>
                        <input type="text" class="form-control" v-model="agent.agent_mobile">
                    </div>

                    <div class="form-group">
                        <label>user</label>
                        <input type="text" class="form-control" v-model="agent.agent_user">
                    </div> 
                    
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" v-model="agent.agent_password">
                    </div> 
                    <button type="submit" class="btn btn-primary">Update Agent</button>
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