<template>
    <div class="form-group">
        <label for="make_id">Make</label>
        <select name="make_id" id="make_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="make in makes" :key="make.id" :value="make.id">{{ make.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "VehicleMakeSelectComponent",
        data: function(){
            return {
                makes: null
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
                axios.get('/api/fleet/makes').then(response => {
                    this.makes = response.data;
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
