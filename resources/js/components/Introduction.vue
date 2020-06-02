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
    axios.get("/getMessage")
    .then(response => {
            document.getElementById("introduction").innerHTML = response.data;
            var textWrapper = document.querySelector(".ml2");
            textWrapper.innerHTML = textWrapper.textContent.replace(
            /\S/g,
      "<span class='letter'>$&</span>"
    );
   anime.timeline({loop:false}).add({
      targets: ".ml2 .letter",
      scale: [3, 1],
      opacity: [0, 1],
      translateZ: 0,
      easing: "easeOutExpo",
      duration: 950,
      delay: (el, i) => 1000 + 60 * i
    });
    })
    .catch(error => {
      console.log("Error getting message");
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
  overflow: hidden;
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
