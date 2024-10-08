const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
        }
    },
    created() {
        axios.get('http://localhost/php-dischi-json/db/dischi.json')
            .then((response) => {
                this.albums = response.data;
                console.table(this.albums);
            })
    }
}).mount('#app')