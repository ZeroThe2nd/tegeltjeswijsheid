<template>
  <div class="mainlayout">
    <div id="upperLeft" class="tilecorner">
      <img alt="upperLeft"   src="../assets/tiles/UpperLeft.png"> 
    </div>
    <div id="upperRight" class="tilecorner">
      <img alt="upperRight"  src="../assets/tiles/UpperRight.png">
    </div>
    <div id="lowerRight" class="tilecorner">
      <img alt="lowerRight"  src="../assets/tiles/LowerRight.png">
    </div>
    <div id="lowerLeft" class="tilecorner">
      <img alt="lowerLeft"  src="../assets/tiles/LowerLeft.png"> 
    </div>
    <div id="maincircle">
      <div class="outer">
        <div class="middle">
            <div class="inner" v-bind:class="{ 'inner-height' :widthBiggerThanHeight , 'inner-width' : !widthBiggerThanHeight }">
                <ul>
                    <li>
                        <v-link href="/">Home</v-link>
                        <v-link href="/login">Login</v-link>
                    </li>
                </ul>
                <slot></slot>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VLink from '../components/VLink.vue'

export default {
  name: 'MainLayout',
  components: {
      VLink
  },
  data: function() {
      return {
          windowWidth: 0,
          windowHeight: 0,
          widthBiggerThanHeight: true
      }        
  },
  mounted() {
      this.$nextTick(function() {            
          window.addEventListener('resize', this.getWindowWidth);
          window.addEventListener('resize', this.getWindowHeight);
          this.getWindowWidth();
          this.getWindowHeight();
          this.widthBiggerThanHeight = this.windowWidth > this.windowHeight;
      })

  },
  methods: {
      getWindowWidth() {
          this.windowWidth = document.documentElement.clientWidth;
          this.widthBiggerThanHeight = this.windowWidth > this.windowHeight;
      },

      getWindowHeight() {
          this.windowHeight = document.documentElement.clientHeight;
          this.widthBiggerThanHeight = this.windowWidth > this.windowHeight;
      }
  },
  beforeDestroy() {
      window.removeEventListener('resize', this.getWindowWidth);
      window.removeEventListener('resize', this.getWindowHeight);
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  width: 100%;
  height: 100%;
  display: inline-block;
}

.outer {
  display: table;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
  
}

.inner {
    margin-left: auto;
    margin-right: auto;
    border: 5px solid #2a2f73;
    border-radius: 100%;
}

.inner-width {
    width: 79vw;
    height: 79vw;
}
.inner-height {
    width: 79vh;
    height: 79vh;
}
    
#boundingbox {
    width: 100%;
    height: 100%;
    border: thick solid;
    border-color: black;
}

#upperLeft { 
    top: 0px;
    left: 0px;
}
#upperRight { 
    top: 0px;
    right: 0px;
}
#lowerRight { 
    bottom: 0px;
    right: 0px;
}
#lowerLeft {     
    bottom: 0px;
    left: 0px;
}
.tilecorner {
  position: absolute;
  width: 20%;
  max-width: 173px;
}
.tilecorner img {
  width: 100%;
}
#maincircle {
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  padding: 10%;
}
#maincircle:after {
  display: block;
  padding-bottom: 100%;
  
}
html {
  height: 100%;
  overflow: hidden;
}
body{
  margin: 0;
  padding: 0;
  height: 100%;
  
}
</style>
