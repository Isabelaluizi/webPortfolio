<template>
    <div>
        <Header />
        <Introduction />
        <Aboutme />
        <Footer />
    </div>
</template>

<script>
import Header from './Header.vue'
import Introduction from './Introduction.vue'
import Aboutme from './Aboutme.vue'
import Footer from './Footer.vue'

    export default {
        name:'Root',
        components:{
            Header,
            Introduction,
            Aboutme,
            Footer
        }
    }
</script>
