<template>
  <div id="app">
    <div id="upperLeft" class="tilecorner">
      <img alt="upperLeft"   src="./assets/tiles/UpperLeft.png"> 
    </div>
    <div id="upperRight" class="tilecorner">
      <img alt="upperRight"  src="./assets/tiles/UpperRight.png">
    </div>
    <div id="lowerRight" class="tilecorner">
      <img alt="lowerRight"  src="./assets/tiles/LowerRight.png">
    </div>
    <div id="lowerLeft" class="tilecorner">
      <img alt="lowerLeft"  src="./assets/tiles/LowerLeft.png"> 
    </div>
    <div id="maincircle">
      <Cirlce />
    </div>
  </div>
</template>

<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Cirlce from './components/Circle'

export default {
  name: 'App',
  components: {
    Cirlce
  },
  data() {
    return {
      config: {

      }
    }
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
