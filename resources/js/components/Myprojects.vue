<template>
    <div class="container" id="my-projects">
        <h2 class="border-bottom text-center" id="projects">Projects</h2>
        <div class="row justify-content-center">
            <div class="col-11 offset-1">
                <h5 id="text-project">Some of the projects that I have done so far.</h5>
            </div>
            <div class="col-10">
                <div class="card" style="width: 18rem;">
                    <img src="/images/PizzaProject.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Okotoks Pizza Project</h5>
                        <p class="card-text">This project was built with HTML and CSS.</p>
                    </div>
                    <div class="card-body border-top text-center">
                        <a href="https://github.com/Isabelaluizi/innotechLuizi.github.io" class="card-link change-color-link">Github Link</a>
                        <a href="#" class="card-link change-color-link">Website Link</a>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card" style="width: 18rem;">
                    <img src="/images/TweeterProject.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tweeter Project</h5>
                        <p class="card-text">This project was built with Laravel, Vuejs and MySQL.</p>
                    </div>
                    <div class="card-body border-top text-center">
                        <a href="https://github.com/Isabelaluizi/TweeterTwo" class="card-link change-color-link">Github Link</a>
                        <a href="#" class="card-link change-color-link">Website Link</a>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card" style="width: 18rem;">
                    <img src="/images/CoffeeLovers.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Coffee Lovers Project</h5>
                        <p class="card-text">This project was built with Laravel, Vuejs and MySQL.</p>
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
    margin-top:10vh;
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
