import Icon from "./Icon.js";

export default {
	components: {
		Icon
	},
	template: /* html */`
		<div v-show="todos.length">
			<h2 class="text-2xl font-bold mb-2">
				{{title}} 
				<span>({{todos.length}})</span> 
			</h2>

			<prime-button severity="secondary" label="primary"></prime-button>

			<div class="flex gap-2 mb-4">
				<button 
					v-for="tag in tags" 
					@click="currentTag = tag"
					class="border rounded px-1 py-px text-xs cursor-pointer"
					:class="{
						'border-blue-500 text-blue-500': tag === currentTag
					}"
					>{{tag}}</button>
			</div>

			<ul class="flex flex-col justify-start items-center min-h-[500px] border-gray-200 border-1 px-4 py-4 w-[500px] space-y-4">
				<li v-for="todo in filteredTodos" class="flex flex-row items-center justify-between w-full " :key="todo.id">
					<div class="flex flex-row items-center space-x-2">
						<button class="p-1 rounded-md bg-red-600 cursor-pointer" @click="$emit('delete-todo', todo)">
								<icon></icon>
						</button>
						<span class="block text-lg font-semibold text-gray-400" :class="todo.completed ? 'line-through' : ''  ">{{todo.title}}</span> 
					</div>
					<input type="checkbox" :checked="todo.completed" v-model="todo.completed" :id="todo.id">  
				</li>
			</ul>
		</div>
	`,
	props: {
		todos: Array,
		title: {
			type: String,
			default: ""
		}
	},
	data(){
		return {
			currentTag: "all"
		}
	},
	computed: {
		tags(){
			return ['all', ...new Set(this.todos.map(todo => todo.tag))]
		},
		filteredTodos(){
			if (this.currentTag === 'all'){
				return this.todos;
			}
			return this.todos.filter(todo => todo.tag === this.currentTag);
		}
	},
}