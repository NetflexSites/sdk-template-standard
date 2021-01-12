<template>
  <div class="example-component">
    <p>
      <img src="https://media3.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif" height="300">
    </p>
    <h2>{{ titleText }}</h2>
    <p>{{ contentText }}</p>
    <p>
      <a
        class="btn btn-primary"
        target="_blank"
        href="https://netflex-sdk.github.io/#/docs/intro"
      >
        Netflex SDK Documentation
      </a>
    </p>
  </div>
</template>

<script>
export default {
  props: {
    titleText: String,
    contentText: String,
  },

  data: () => ({

  }),

  mounted() {

  },

  methods: {

  },

  computed: {

  },
}
</script>
