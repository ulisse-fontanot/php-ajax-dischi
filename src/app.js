var root = new Vue({
    el: '#app',
    data: {
      dischi: [];
    },
    mounted(){
        axios
        .get('server.php')
        .then((result) => {
            this.dischi= result.data;
            console.log(this.dischi);
        });
    }
});
  