<template>
    
    <RouterView></RouterView>
</template>
<script>
import FormLogin from "./auth/FormLogin";
export default {
    components: {FormLogin},
    setup: () => ({
    })
}
</script>
