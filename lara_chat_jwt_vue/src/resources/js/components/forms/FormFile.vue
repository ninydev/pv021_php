<template>
    <form name="fileSend">
        <input type="file" name="image">
        <input type="button" @click="this.send()" value="send">
    </form>
</template>
<script>
export default {

    setup: () => ({

        send: function () {
            let data = new FormData(document.forms.fileSend)
            console.log('Send')
            console.log(data)

            fetch('/api/file', {
                    method: 'POST',
                headers: {
                    // 'Content-Type': 'application/json'
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                    body: data
                }
            )
                .then(res=> {
                    console.log(res)
                    return res .text()
                })
                .then(txt => {
                    console.log(txt)
                })
                .catch(err => {
                    console.log('Error')
                    console.log(err)
            })



        }
    })
}
</script>
