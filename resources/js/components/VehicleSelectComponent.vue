<template>
    <div class="form-group">
        <label for="vehicle_id">Vehicle</label>
        <select name="vehicle_id" id="vehicle_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="vehicle in vehicles" :key="vehicle.id" :value="vehicle.id">{{ vehicle.fleet_nr }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "VehicleSelectComponent",
        data: function(){
            return {
                vehicles: null
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
                axios.get('/api/fleet/vehicles').then(response => {
                    this.vehicles = response.data;
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
