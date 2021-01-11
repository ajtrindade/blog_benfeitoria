<template>
  <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Insert Post
            </h2>
         </template>
    <div style="margin-top: 50px">
      <div class="justify-content-center align-items-center row">
        <div class="col-md-6 align-self-center text-center">
          <form @submit.prevent="handleform">
            <div class="form-group">
              <input
                class="form-control"
                type="text"
                placeholder="Titulo do post"
                v-model="form.titulo"
              />
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="5"
                placeholder="corpo do post"
                v-model="form.corpo"
              ></textarea>
            </div>
            <button class="btn btn-primary mt-2" type="submit">
              Cadastrar
            </button>
            <button class="btn btn-primary mt-2" type="reset">
              Limpar
            </button>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout'
export default {
  components: { 
    AppLayout,
   },
  props: {
    name: String,
    posts: [],
  },
  data: () => {
    return {
      form: {
        titulo: null,
        corpo: null,
        name: null,
      },
    };
  },
  methods: {
    handleform() {
      this.$inertia.post("/insertposts", this.form);
      
    },
  },
};
</script>
<style>
</style>;
