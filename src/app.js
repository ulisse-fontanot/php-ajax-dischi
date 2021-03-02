import Vue from 'vue';

var root = new Vue({
    el: '#app',
    data: {
      dischi: []
    },
    mounted(){
        axios
        .get('http://localhost:8888/esercizi/1-3-2021/php-ajax-dischi/server.php')
        .then((result) => {
            this.dischi= result.data;
            console.log(this.dischi);
        });
    }
});
  