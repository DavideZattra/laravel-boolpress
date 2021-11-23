<template>
  <div>
      <div class="card" v-for="post in posts" :key="post.id">
          <div class="card-header">
              <h5>
              {{ post.title }}
              </h5>
          </div>
          <div class="card-body">
              <p>
              {{ post.content }}
              </p>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'posts',

    data(){
        return{
            posts : []
        }
    },

    methods:{

        getPosts(){

            axios.get(`http://127.0.0.1:8000/api/posts/`)
            .then((res) => {
                // eseguo solo quando la chiamata axios ha successo e res sarà la risposta
                this.posts = res.data[0].posts;
                console.log(this.posts);
            })
            .catch((err)=> {
                // eseguo solo quando la chiamata axios non ha successo e l'errore sarà err
                console.error(err);
            })
        }

    },
    created(){
        this.getPosts();
    }
}
</script>

<style>

</style>