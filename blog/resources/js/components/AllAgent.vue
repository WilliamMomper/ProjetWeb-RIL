<template>
    <div>
        <h3 class="text-center">Liste des Agents</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>telephone</th>
                <th>fax</th>
                <th>mobile</th>
                <th>user</th>
                <th>password</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="agent in agents" :key="agent.id">
                <td>{{ agent.id }}</td>
                <td>{{ agent.agent_nom }}</td>
                <td>{{ agent.agent_prenom }}</td>
                <td>{{ agent.agent_telephone }}</td>
                <td>{{ agent.agent_fax }}</td>
                <td>{{ agent.agent_mobile }}</td>
                <td>{{ agent.agent_user }}</td>
                <td>{{ agent.agent_password }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editAgent', params: { id: agent.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteAgent(agent.id)">Delete</button>
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
                agents: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/agents')
                .then(response => {
                    this.agents = response.data;
                });
        },
        methods: {
            deleteAgent(id) {
                this.axios
                    .delete(`http://localhost:8000/api/agent/delete/${id}`)
                    .then(response => {
                        let i = this.agents.map(item => item.id).indexOf(id); // find index of your object
                        this.agents.splice(i, 1)
                    });
            }
        }
    }
</script>