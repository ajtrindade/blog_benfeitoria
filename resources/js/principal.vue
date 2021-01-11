<template>
  <div style="margin-top:50px;">
       
          <div class="row" v-for="(post, i) in posts" :key=i>
          <span>
              <h3>{{ post.titulo }}</h3>
              <p>{{ post.corpo }}</p>
         </span>
         <span slot="footer" class="dialog-footer">
            <p>{{ post.autor }}</p>
         </span>
     </div>
   </div>
</template>
<script>
export default {
  components:{},
  props: {
    user: String,
  },
  props: {
    posts:{},
  },
};
</script>
<style>
</style>;
