<template>
    <div id="my-header" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
            <a class="navbar-brand" href="#"><i class="fas fa-laptop-code fa-2x"></i><span id="style-name">Isabela Monteiro</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#about-me">About me</a>
                    <a class="nav-item nav-link active" href="#my-projects">Projects</a>
                    <a class="nav-item nav-link active" href="/images/ISABELAMONTEIRO042020.pdf">Resume</a>
                    <a class="nav-item nav-link active" href="#contact-me">Contact me</a>
                </div>
  º         </div>
        </nav>
    </div>
</template>

<script>
export default {
    name:'Header'

}
</script>

<style scoped>
#my-header{
    background-color:#6c4581;
}
.bg-custom{
    background-color:#6c4581;
}
#style-name {
    font-family: 'Rock Salt', cursive;
    font-size:18px;
}
</style>


