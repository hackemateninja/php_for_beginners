<?php require("partials/head.php") ?>


<div id="app">
</div>


<script type="module">
	import App from '../js/components/App.js'

	const { createApp, ref } = Vue;
	const app = createApp(App)
	app.use(PrimeVue.Config);

  app.component('prime-button', PrimeVue.Button);
	
	app.mount("#app");
</script>
