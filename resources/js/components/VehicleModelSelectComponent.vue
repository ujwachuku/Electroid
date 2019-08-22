<template>
    <div class="form-group">
        <label for="model_id">Model</label>
        <select name="model_id" id="model_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="model in models" :key="model.id" :value="model.id">{{ model.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "VehicleModelSelectComponent",
        data: function(){
            return {
                models: null
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
                axios.get('/api/fleet/models').then(response => {
                    this.models = response.data;
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
