import { defineStore } from 'pinia'
import {api} from "./api";
import {useToastStore} from "./toast";
import {useUserStore} from  "./user"

export const useAuthStore = defineStore('auth', {
    state: () => ({
        // expires_in: 3600
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
                    this.rememberJwt(res.access_token)

                    const toast = useToastStore()
                    toast.success(res.user.name)

                    const userStore = useUserStore()
                    userStore.updateUser(res.user)
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
