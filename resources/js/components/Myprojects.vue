<template>
    <div class="container" id="my-projects">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <h2 class="border-bottom text-center" id="projects">Projects</h2>
            </div>
            <div class="col-11 offset-1 col-xl-10">
                <h5 id="text-project">Some of the projects that I have done so far.</h5>
            </div>
            <div class="col-11 col-xl-4">
                <div class="card" style="height:25rem;">
                    <img src="/images/PizzaProject.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Okotoks Pizza Project</h5>
                        <p class="card-text">This is a project about a fictitinal Pizza retaurant website which was built with HTML and CSS.</p>
                    </div>
                    <div class="card-body border-top text-center">
                        <a href="https://github.com/Isabelaluizi/innotechLuizi.github.io" class="card-link change-color-link">Github Link</a>
                        <a href="#" class="card-link change-color-link">Website Link</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-xl-4">
                <div class="card" style="height:25rem;">
                    <img src="/images/TweeterProject.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tweeter Project</h5>
                        <p class="card-text">A social media website in which users can interacte by posting and making comments. It was built with Laravel, Vuejs and MySQL. </p>
                    </div>
                    <div class="card-body border-top text-center">
                        <a href="https://github.com/Isabelaluizi/TweeterTwo" class="card-link change-color-link">Github Link</a>
                        <a href="#" class="card-link change-color-link">Website Link</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-xl-4">
                <div class="card" style="height:25rem;">
                    <img src="/images/CoffeeLovers.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Coffee Lovers Project</h5>
                        <p class="card-text">This is a coffee reviewer website that allows users to share opinion about different kinds of coffee. This project is been built with Laravel, Vuejs and MySQL.</p>
                    </div>
                    <div class="card-body border-top text-center">
                        <a href="https://github.com/Isabelaluizi/coffeelovers" class="card-link change-color-link">Github Link</a>
                        <a href="#" class="card-link change-color-link">Website Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'Myprojects'
}
</script>

<style scoped>
#projects{
    font-family: 'Fredoka One', cursive;
    margin-top:15vh;
    margin-bottom:5vh;
}
.card{
    margin-bottom:5vh;
}
.change-color-link{
    color:#6c4581;
    font-weight: bold;
}
#text-project{
    margin-bottom:5vh;
}



</style>
