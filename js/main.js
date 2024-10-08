const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
        }
    },
    created() {
        axios.get('http://localhost/php-dischi-json/reader.php')
            .then((response) => {
                this.albums = response.data;
                console.table(response.data);
            })
    }
}).mount('#app')