<template>
    <div class="form-group">
        <label for="team_id">Team</label>
        <select name="team_id" id="team_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="team in teams" :key="team.id" :value="team.id">{{ team.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "ServiceTeamSelectComponent",
        data: function(){
            return {
                teams: null
            }
        },
        props: {
            value: String
        },
        computed: {
            selected: function () {
                if(this.value === '') {
                    return '0';
                } else {
                    return this.value;
                }
            }
        },
        methods: {
            loadData: function () {
                axios.get('/api/service/teams').then(response => {
                    this.teams = response.data;
                })
            }
        },
        mounted() {
            this.loadData()
        }
    }
</script>

<style scoped>

</style>
