<template>
    <div>
        <h3 class="text-center">Ajouter Agent</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addAgent">
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
                   
                    <button type="submit" class="btn btn-primary">Ajouter Agent</button>
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
        methods: {
            addAgent() {

                this.axios
                    .post('http://localhost:8000/api/agent/add', this.agent)
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