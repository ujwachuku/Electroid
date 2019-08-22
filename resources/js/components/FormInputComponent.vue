<template>
    <div class="form-group">
        <label :for="name">{{ title }}</label>
        <input type="text" :name="name" :value="value" class="form-control" :placeholder="placeholder">
        <div v-if="error" class="text-danger">* {{ error }}</div>
    </div>
</template>

<script>
    export default {
        name: "TextInputComponent",
        props: {
            'name': String,
            'title': String,
            'value': String,
            'placeholder': String,
            'error': String
        }
    }
</script>

<style scoped>

</style>
