<template>

      <span v-if="isCounting"> {{ counter }}</span>
      <span v-else>{{ targetValue }}</span>

  </template>
  
  <script>
  export default {
    props: {
      targetValue: {
        type: Number,
        required: true,
      },
    },
    data() {
      return {
        counter: 0,
        isCounting: false,
      };
    },
    mounted() {
      this.startCounter();
    },
    methods: {
      startCounter() {
        this.isCounting = true;
        this.incrementCounter();
      },
      incrementCounter() {
        if (this.counter < this.targetValue) {
          setTimeout(() => {
            this.counter++;
            this.incrementCounter();
          }, 70);
        } else {
          this.isCounting = false;
        }
      },
    },
  };
  </script>
  <style>

</style>