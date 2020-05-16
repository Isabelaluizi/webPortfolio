<template>
  <div id="footer">
    <div class="container" id="container-footer">
      <div class="row" style="overflow-x: hidden">
        <div class="col-8 offset-1">
          <h5 class="text-footer">Isabela Monteiro</h5>
          <h6 class="text-footer">
            <i class="fas fa-envelope fa-fw"></i> isabelaluizi@gmail.com
          </h6>
        </div>
        <div class="col-2">
          <a href="https://www.linkedin.com/in/isabelaluizimonteiro/">
            <i class="fab fa-linkedin fa-3x text-footer"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer"
};
</script>

<style scoped>
#footer {
  height: 12vh;
  background-color: #6c4581;
  margin-top: 2vh;
  height: 15vh;
}
.text-footer {
  color: white;
}
#container-footer {
  padding-top: 2vh;
}
</style>
