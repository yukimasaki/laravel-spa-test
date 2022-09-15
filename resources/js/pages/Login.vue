<template>
  <v-card width="400px" class="mx-auto mt-5">
    <v-card-title>ログイン</v-card-title>

    <v-card-text>
      <v-form>
        <v-text-field
          label="Email"
          prepend-icon="mdi-account-circle"
          v-model="loginForm.email"
        />
        <v-text-field
          v-bind:type="showPassword ? 'text' : 'password'"
          @click:append="showPassword = !showPassword"
          label="Password"
          prepend-icon="mdi-lock"
          v-bind:append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          v-model="loginForm.password"
        />
      </v-form>
      <div>会員登録は<router-link to="/register">コチラ</router-link></div>
    </v-card-text>

    <v-card-actions>
      <v-btn
        class="info"
        @click="login"
      >ログイン</v-btn>
    </v-card-actions>

  </v-card>
</template>

<script>
  export default {
    data () {
      return {
        showPassword : false,
        loginForm: {
          email: '',
          password: ''
        },
      }
    },
    methods: {
      async login() {
        // authストアのloginアクションを呼び出す
        await this.$store.dispatch('auth/login', this.loginForm)

        // トップページに移動する
        this.$router.push('/')

        // console.log(
        //   'name = ' + this.loginForm.name + '\n' +
        //   'password = ' + this.loginForm.password
        // )
      }
    }
  };
</script>