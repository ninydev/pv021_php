import { defineStore } from 'pinia'
import {useApiStore} from "./api";

export const useAuthStore = defineStore('auth', {
    state: () => ({
        jwt: localStorage.getItem('jwt') || null
    }),
    getters: {
    },
    actions: {
        tryLogin (email, password) {
            const api = useApiStore()
            const data = new FormData()
            data.append('email', email);
            data.append('password', password);
            api.post('auth/login', data, function (json) {
                console.log('tryLogin res: ')
                console.log(json)
                // this.rememberJwt(json)
            })

        },
        rememberJwt(jwt) {
            this.jwt = jwt
            localStorage.setItem('jwt', jwt)
        },
        forgetJwt() {
            this.jwt = null
            localStorage.removeItem('jwt')
        },
    }
})
