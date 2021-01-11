<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Delete Post
      </h2>
    </template>
    <div class="delpost">
      <div class="row">
      <div class="col-md-3"  v-for="(post, i) in posts" :key="i">
        <div class="card mt-4">
          <div class="card-body">
            <p class="card-text">
              <strong>{{ post.titulo }}</strong> <br />
              {{ truncateText(post.corpo) }}
            </p>
          </div>
          <button class="btn btn-success m-2" @click="DeletePost(post.id)">
            Excluir Post
          </button>
        </div>
      </div>
      </div>
    </div>
  </app-layout>
</template>


<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
  components: { AppLayout },
  props: {
    posts: {},
    name: String,
  },
  methods: {
    truncateText(text) {
      if (text.length > 24) {
        return `${text.substr(0, 24)}...`;
      }
      return text;
    },
    DeletePost(postId) {
      this.$inertia.post("/deleteposts/" + postId, this.form);
    },
  },
};
</script>
<style>
.delpost{
  margin-left: 100px;
}
</style>
