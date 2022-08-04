import { defineStore } from 'pinia'
import {api} from "./api";
import {useToastStore} from "./toast";

export const useAuthStore = defineStore('auth', {
    state: () => ({
        jwt: localStorage.getItem('jwt') || null
    }),
    getters: {
    },
    actions: {
        tryLogin (email, password) {

            const data = new FormData()
            data.append('email', email);
            data.append('password', password);

            // const res = api.post('auth/login', data)
            // console.log('tryLogin res: ')
            // console.log(res)

            api.post('auth/login', data)
                .then(res=> {
                    console.log(res)
                    const toast = useToastStore()
                    toast.success(res.user.name)
                    this.rememberJwt(res.access_token)
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
