<template>
    <p>Total: <span v-text="store.total"></span> </p>
    <p>Page: <span v-text="store.page"></span> </p>
    <button type="button" @click="doGetMorePosts"> Load More </button>

</template>

<script>

import {usePostStore} from "../../store/posts";

export default {
    name: "BlogIndex",
    setup() {
        const store = usePostStore()
        const doGetMorePosts = function () {
            store.getMorePosts()
        }

        if(store.cur_page === 0)
            doGetMorePosts()

        return {
            store, doGetMorePosts
        }

    }
}
</script>

<style scoped>

</style>
