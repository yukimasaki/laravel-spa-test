<template>
  <v-card width="400px" class="mx-auto mt-5">
    <v-card-title>会員登録</v-card-title>

    <v-card-text>
      <v-form>
        <v-text-field
          label="Name"
          prepend-icon="mdi-account-circle"
          v-model="registerForm.name"
        />
        <v-text-field
          label="Email"
          prepend-icon="mdi-email"
          v-model="registerForm.email"
        />
        <v-text-field
          v-bind:type="showPassword ? 'text' : 'password'"
          @click:append="showPassword = !showPassword"
          label="Password"
          prepend-icon="mdi-lock"
          v-bind:append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          v-model="registerForm.password"
        />
        <v-text-field
          v-bind:type="showPassword ? 'text' : 'password'"
          @click:append="showPassword = !showPassword"
          label="Password (Confirm)"
          prepend-icon="mdi-lock"
          v-bind:append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          v-model="registerForm.password_confirmation"
        />
      </v-form>
    </v-card-text>

    <v-card-actions>
      <v-btn
        class="info"
        @click="register"
      >登録</v-btn>
    </v-card-actions>

  </v-card>
</template>

<script>
  export default {
    data () {
      return {
        showPassword : false,
        registerForm: {
          name: '',
          email: '',
          password: '',
          password_confirmation: ''
        }
      }
    },
    methods: {
      //authストア経由でAPIを呼び出す
      async register () {
        // authストアのresigterアクションを呼び出す
        await this.$store.dispatch('auth/register', this.registerForm)

        // トップページに移動する
        this.$router.push('/')
      }
    }
  }
</script>