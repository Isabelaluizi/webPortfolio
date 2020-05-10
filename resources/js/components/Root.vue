<template>
    <div>
        <Header />
        <Introduction />
        <Aboutme />
        <Myprojects />
        <Contactme />
        <Footer />
    </div>
</template>

<script>
import Header from './Header.vue'
import Introduction from './Introduction.vue'
import Aboutme from './Aboutme.vue'
import Myprojects from './Myprojects.vue'
import Contactme from './Contactme.vue'
import Footer from './Footer.vue'

    export default {
        name:'Root',
        components:{
            Header,
            Introduction,
            Aboutme,
            Myprojects,
            Contactme,
            Footer
        }
    }
</script>
