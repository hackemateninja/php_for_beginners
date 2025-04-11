import AppButton from "./AppButton.js";

export default {
	components: {
		AppButton
	},
	template: /* html */ `
		<form @submit.prevent="createTodo" class="flex flex-row items-center justify-center space-x-4 my-6 ">
			<input 
				id="newTodo" 
				v-model="newTodo" 
				type="text" 
				placeholder="Write a new todo" class="px-4 py-2 border-1 rounded-md border-gray-300 focus:border-gray-400 w-[350px]">
			<app-button>Add Todo</app-button>
		</form>
	`,
	data() {
		return {
			newTodo: ""
		}
	},
	methods: {
		createTodo(){
			if (this.newTodo <= 4) {
          return alert("The todo should be more than 5 characters");
      }
			this.$emit('createTodo', this.newTodo);
			this.newTodo = "";
		}
	}
}