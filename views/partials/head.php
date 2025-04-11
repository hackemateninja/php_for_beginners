<!doctype html>
<html lang="en" class="h-full">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@3.5.13/dist/vue.global.min.js"></script>
		<style>


			/* HTML: <div class="loader"></div> */
			.loader {
				width: 50px;
				aspect-ratio: 1;
				display: grid;
				border-radius: 50%;
				background:
					linear-gradient(0deg ,rgb(0 0 0/50%) 30%,#0000 0 70%,rgb(0 0 0/100%) 0) 50%/8% 100%,
					linear-gradient(90deg,rgb(0 0 0/25%) 30%,#0000 0 70%,rgb(0 0 0/75% ) 0) 50%/100% 8%;
				background-repeat: no-repeat;
				animation: l23 1s infinite steps(12);
			}
			.loader::before,
			.loader::after {
				content: "";
				grid-area: 1/1;
				border-radius: 50%;
				background: inherit;
				opacity: 0.915;
				transform: rotate(30deg);
			}
			.loader::after {
				opacity: 0.83;
				transform: rotate(60deg);
			}
			@keyframes l23 {
				100% {transform: rotate(1turn)}
			}
		</style>
  </head>
  <body class="h-full">