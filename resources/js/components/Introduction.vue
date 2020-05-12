<template>
    <div>
        <img src="images/R6gdLuNTTyu2zp5ZHNCrNw_thumb_861.jpg" id="main-image" class="img-fluid w-100">
        <h3><strong id="introduction">Hi, my name is Isabela. <br> I'm a Full Stack Web Developer living in Alberta, Canada.</strong></h3>
    </div>
</template>

<script>
export default {
    name:'Body'
}
</script>

<style scoped>
#main-image{
    opacity:0.2;
    max-height: 41.5vh;
    object-fit: cover;
}

#introduction{
    position:absolute;
    top:21vh;
    left:5%;
    right:5%;
    width:80%;
    font-family: 'Fredoka One', cursive;
}
</style>
