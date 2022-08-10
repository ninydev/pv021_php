import { defineStore } from 'pinia'
import {api} from './api'

export const usePostStore = defineStore('post', {
    state: () => ({
        posts: [],
        total: 0, // общее количество загруженных постов
        per_page: 1, // количество постов на страницу
        page: 0, // текущая страница
        isCanMore: true
    }),
    getters: {

    },
    actions: {
        // Получить посты
        getMorePosts(){
            if (this.page * this.per_page > this.total) {
                this.isCanMore = false
                return
            }
            this.page++

            let url = '/users/?page=' + this.page + '&per_page=' + this.per_page
            console.log('get new posts: ' + url)

            api.get(url)
                .then(res => {
                    this.total = res.total
                    console.log('getData: ')
                    console.log(res.data)
                    this.posts = this.posts.concat(res.data)
                })
        }

    }
})
