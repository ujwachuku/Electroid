<template>
    <div class="form-group">
        <label for="bay_id">Pit</label>
        <select name="bay_id" id="bay_id" v-model="selected" class="form-control">
            <option value="0" disabled>Select an option</option>
            <option v-for="bay in bays" :key="bay.id" :value="bay.id">{{ bay.name }}</option>
        </select>
    </div>
</template>

<script>
    export default {
        name: "ServiceBaySelectComponent",
        data: function(){
            return {
                bays: null
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
                axios.get('/api/service/bays').then(response => {
                    this.bays = response.data;
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
