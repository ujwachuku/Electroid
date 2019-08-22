<template>
    <div class="form-group">
        <label for="type_id">Type</label>
        <select name="type_id" id="type_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="type in types" :key="type.id" :value="type.id">{{ type.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "VehicleTypeSelectComponent",
        data: function(){
            return {
                types: null
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
                axios.get('/api/fleet/types').then(response => {
                    this.types = response.data;
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
