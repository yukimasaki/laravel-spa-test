<template>
  <v-app>
    <!--サイドバー-->
    <v-navigation-drawer app v-model="drawer" clipped >
      <v-container>
        <v-list-item>
          <v-list-item-content>
            <v-list-item-title class="title">
              Navigation lists
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-divider></v-divider>
        <v-list dense nav>
          <v-list-item v-for="nav_list in nav_lists" :key="nav_list.name">
            <v-list-item-icon>
              <v-icon>{{ nav_list.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>{{ nav_list.name }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-container>
    </v-navigation-drawer>

    <!-- ヘッダー -->
    <v-app-bar color="primary" dark app clipped-left>
      <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
      <v-toolbar-title
        @click="$router.push('/')"
        style="cursor:pointer"
      >Vue Dashboad</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items>
        <template v-if="isLogin">
          <v-menu offset-y open-on-hover>
            <template v-slot:activator="{on}">
              <v-btn v-on="on" style="text-transform:none" text>{{ username }}</v-btn>
            </template>
            <v-list>
              <!-- ログアウト -->
              <v-list-item link>
                <v-list-item-content>
                  <v-list-item-title @click="logout">ログアウト</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-menu>
        </template>
        <template v-else>
          <v-btn text to="/login">ログイン</v-btn>
        </template>
      </v-toolbar-items>
    </v-app-bar>

    <!-- コンテンツ -->
    <v-main><router-view></router-view></v-main>

    <!-- フッター -->
    <v-footer color="primary" dark app>©2022 Yuki Masaki</v-footer>

  </v-app>
</template>

<script>
  import { INTERNAL_SERVER_ERROR } from './util'

  export default {
    data () {
      return {
        drawer: null,
        nav_lists:[
          {name: 'Getting Started',icon: 'mdi-vuetify'},
          {name: 'Customization',icon: 'mdi-cogs'},
          {name: 'Styles & animations',icon: 'mdi-palette'},
          {name: 'UI Components',icon: 'mdi-view-dashboard'},
          {name: 'Directives',icon: 'mdi-function'},
          {name: 'Preminum themes',icon: 'mdi-vuetify'},
        ],
      }
    },
    methods: {
      async logout () {
        await this.$store.dispatch('auth/logout')
        this.$router.push('/login')
      }
    },
    computed: {
      isLogin () {
        return this.$store.getters['auth/check']
      },
      username () {
        return this.$store.getters['auth/username']
      },
      errorCode () {
        return this.$store.state.error.code
      }
    },
    watch: {
      errorCode: {
        handler (val) {
          if (val === INTERNAL_SERVER_ERROR) {
            this.$router.push('/500')
          }
        },
        immediate: true
      },
      $route () {
        this.$store.commit('error/setCode', null)
      }
    }
  }
</script>