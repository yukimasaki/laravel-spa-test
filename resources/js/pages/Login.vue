<template>
  <v-card width="400px" class="mx-auto mt-5">
    <v-card-title>Login</v-card-title>

    <v-card-text>
      <v-form>
        <v-text-field
          label="Email"
          prepend-icon="mdi-account-circle"
          v-model="name"
        />
        <v-text-field
          v-bind:type="showPassword ? 'text' : 'password'"
          @click:append="showPassword = !showPassword"
          label="Password"
          prepend-icon="mdi-lock"
          v-bind:append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
          v-model="password"
        />
      </v-form>
    </v-card-text>

    <v-card-actions>
      <v-btn
        class="info"
        @click="submit"
      >Login</v-btn>
    </v-card-actions>

  </v-card>
</template>

<script>
  export default {
    name: 'App',
    data: () => ({
      showPassword : false,
      name:'',
      password:'',
    }),
    methods: {
      submit(){
        console.log(
          'name = ' + this.name + '\n' +
          'password = ' + this.password
        )
      }
    }
  };
</script>