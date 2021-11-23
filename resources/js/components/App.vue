<template>
  <div class="container">
      <h2>Work in progress</h2>
    <div class="row">
      <div class="col-12">

        <Posts />
      </div>
    </div>
  </div>
</template>

<script>
import Posts from "./Posts/posts.vue";

export default {
    name: 'App', 
    components: { 
      Posts,
    }
}
</script>

<style>

</style>