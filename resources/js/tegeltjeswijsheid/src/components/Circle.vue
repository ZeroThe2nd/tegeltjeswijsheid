<template>
    <div class="outer">
        <div class="middle">
            <div class="inner">
                
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:"Cirlce"
}
</script>
<style scoped>
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
    width: 79vw;
    height: 79vw;
    border: 5px solid #2a2f73;
    border-radius: 100%;
}
    
    #boundingbox {
        width: 100%;
        height: 100%;
        border: thick solid;
        border-color: black;
    }
</style>