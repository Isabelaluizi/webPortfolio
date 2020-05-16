<template>
  <div id="contact-me" class="container">
    <div class="row justify-content-center" style="overflow-x: hidden">
      <div class="col-12 col-sm-12 col-xl-10">
        <h2
          data-aos="fade-right"
          data-aos-duration="1000"
          class="border-bottom text-center"
          id="contact-me-title"
        >Contact me</h2>
      </div>
      <div class="col-11 col-sm-11 offset-1 offset-sm-1 col-xl-10">
        <h5 data-aos="fade-right" data-aos-duration="1000" id="message-contact-me">Do you want to know more about me?</h5>
      </div>
    </div>
    <div id="container-contact-me" data-aos="zoom-in" data-aos-duration="1000">
      <div class="row justify-content-center" style="overflow-x: hidden">
        <div class="col-xl-8">
          <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <h5>
              <strong>Get in touch.</strong>
            </h5>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
              </div>
              <input
                type="text"
                class="form-control"
                v-model="name"
                aria-label="Username"
                aria-describedby="basic-addon1"
              />
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">E-mail</span>
              </div>
              <input
                type="text"
                class="form-control"
                v-model="email"
                aria-label="Username"
                aria-describedby="basic-addon1"
              />
            </div>
            <div class="input-group">
              <textarea class="form-control" rows="5" v-model="message"></textarea>
            </div>
            <div class="text-center button-submit">
              <button
                @click="sendEmail()"
                class="btn btn-primary btn-capsule px-4 change-button-color"
              >Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contactme",
  data() {
    return {
      name: "",
      email: "",
      message: "Message"
    };
  },
  methods: {
    sendEmail() {
      axios
        .post("/sendEmail", {
          name: this.name,
          email: this.email,
          message: this.message
        })
        .then(response => {
          console.log(response.data);
        })
        .catch(error => {
          console.log("Error storing data");
        });
    }
  }
};
</script>

<style scoped>
#contact-me-title {
  font-family: "Fredoka One", cursive;
  margin-top: 5vh;
  margin-bottom: 5vh;
}
.change-button-color {
  background-color: #c2bbff;
  border-color: #c2bbff;
  color: black;
}
#text-get-in-touch {
  font-family: "Fredoka One", cursive;
}
.change-button-color {
  background-color: #c2bbff;
  border-color: #c2bbff;
  color: black;
}
.button-submit {
  margin-top: 1vh;
}
#contact-me {
  margin-top: 10vh;
}
#message-contact-me{
    margin-bottom:3vh;
}
</style>
