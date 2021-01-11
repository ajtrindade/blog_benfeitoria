<template>
  <layout>
    <div style="margin-top: 40px">
      <div class="justify-content-center align-items-center row">
        <div class="col-md-6 align-self-center text-center">
            <div class="mt-2">
                Login
            </div>
            <form @submit.prevent="handleform">
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Seu email" v-model="form.email" />
                </div>
                <div class="form-group">
                  <input 
                    class="form-control"
                    type="password"
                      placeholder="Sua senha"
                      v-model="form.password"
                  />
                </div>  
                <button class="btn btn-primary mt-2" type="submit">Login</button>
             </form>

         </div>
      </div>
    </div>       
  </layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
export default {
  components: { Layout },
  props: {
    errors: Object,
  },
  data: () => {
    return {
      form: {
        email: null,
        password: null,
      },
    };
  },
  methods: {
    handleform() {
      this.$inertia.post("/login", this.form);
    },
  },
};
</script>

<style>
</style>;
