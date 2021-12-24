<template>
  <div>
    <button @click="logout()">logout</button>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  methods: {
    async logout() {
        await this.$auth.logout('laravelJWT')
        window.location.reload();
    }
  }
}
</script>