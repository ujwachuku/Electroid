<template>
    <div class="form-group">
        <label for="role_id">Role</label>
        <select name="role_id" id="role_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "RoleSelectComponent",
        data: function(){
            return {
                roles: null
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
                axios.get('/api/roles').then(response => {
                    this.roles = response.data;
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
