<template>
  <div id="about-me">
    <img src="images/R6gdLuNTTyu2zp5ZHNCrNw_thumb_861.jpg" id="main-image" class="img-fluid" />
    <h1 class="ml2" id="introduction"></h1>
  </div>
</template>

<script>
export default {
  name: "Body",
  mounted() {
    document.getElementById("introduction").innerHTML =
      "<strong><span>Hi, my name is Isabela. <br>  I'm a Full Stack Web Developer living in Alberta, Canada.</span></strong>";
    var textWrapper = document.querySelector(".ml2");
    textWrapper.innerHTML = textWrapper.textContent.replace(
      /\S/g,
      "<span class='letter'>$&</span>"
    );
    anime.timeline().add({
      targets: ".ml2 .letter",
      scale: [3, 1],
      opacity: [0, 1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 60 * i
    });
  }
};
</script>

<style scoped>
.ml2 {
  font-weight: 900;
  font-size: 1.8em;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
#main-image {
  opacity: 0.2;
  max-height: 41.5vh;
  object-fit: cover;
  width: 100%;
}

#introduction {
  position: absolute;
  top: 15vh;
  left: 5%;
  right: 5%;
  width: 90%;
  font-family: "Fredoka One", cursive;
}
</style>
