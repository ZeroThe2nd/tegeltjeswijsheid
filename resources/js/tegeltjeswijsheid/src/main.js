import Vue from 'vue'
import Home from './views/Home'
import Login from './views/Login'
import NotFound from './views/404'
// import routes from './routes'

const routes = {
  '/': Home,
  '/login': Login
}

Vue.config.productionTip = false;
const app = new Vue({
  el: '#app',
  data: {
    currentRoute: window.location.pathname
  },
  computed: {
    ViewComponent () {
      return routes[this.currentRoute] || NotFound
    }
  },
  render (h) { return h(this.ViewComponent) }
});

window.addEventListener('popstate', () => {
  app.currentRoute = window.location.pathname
});
