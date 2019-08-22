<template>
    <a :href="href" class="btn btn-secondary">Cancel</a>
</template>

<script>
    export default {
        name: "FormCancelComponent",
        props: {
            href: String
        }
    }
</script>

<style scoped>

</style>
