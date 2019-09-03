<template>
    <div class="form-group">
        <label for="area_id">Area</label>
        <select name="area_id" id="area_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="area in areas" :key="area.id" :value="area.id">{{ area.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "IncidentAreaSelectComponent",
        data: function(){
            return {
                areas: null
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
                axios.get('/api/incident/areas').then(response => {
                    this.areas = response.data;
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
