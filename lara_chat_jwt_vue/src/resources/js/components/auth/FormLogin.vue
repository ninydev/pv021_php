<template>
    <form>
        <div class="input-group">
            <label>Username</label>
            <input v-model="email" id="username" class="form-control" type="text" autocomplete="false">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input v-model="password" id="password" class="form-control" type="password">
        </div>

        <div class="input-group">
        <button type="button"
                :disabled="email === '' || password === ''"
                @click="doLogin" class="btn btn-primary btn-submit">Login</button>
        </div>

    </form>
</template>

<script>
import { useAuthStore } from './../../store/auth'
import {ref} from "vue";

export default {
    name: 'FormLogin',
    setup() {
        const store = useAuthStore()
        const email = ref()
        const password = ref()
        const doLogin = function () {
            // console.log('Start Login: ' + email.value + ' ' + password.value)
            store.tryLogin(email.value, password.value)
        }

        return {
            email, password, doLogin
        }
    },
}
</script>

<style scoped>

</style>
