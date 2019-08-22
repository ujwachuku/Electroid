<template>
    <a :href="href" @click.prevent="handleClickEvent" class="btn btn-danger">Delete</a>
</template>

<script>
    export default {
        name: "FormDeleteComponent",
        props: {
            href: String
        },
        methods: {
            handleClickEvent: function () {
                let confirm = window.confirm('Are you sure you want to delete this record?');
                if (confirm === true)
                {
                    window.location = this.href;
                }
            }
        }
    }
</script>

<style scoped>

</style>
